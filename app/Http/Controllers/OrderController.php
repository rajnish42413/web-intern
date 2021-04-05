<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Olympiad;
use App\Models\Order;
use App\Models\User;
use App\Models\StudentDetail;
use App\Models\Package;
use Carbon\Carbon;
use PaytmWallet;

class OrderController extends Controller
{

	public function packages()
	{
	   $all_packages  =Package::active()->get();
	   $packages = Package::active()->whereIn("type",[Package::ALL_OLYMPIAD,Package::ALL_OLYMPIAD_PLUS_MOCKTEST])->get();
	   $olympiads = Olympiad::get();
	   return view("order.package",compact('packages','olympiads','all_packages'));
	}

	public function checkout(Request $request,Order $order)
	{
		if (!$order) return redirect()->back();
		if (!($order->amount && $order->packages)) return redirect()->back();
		return view("order.checkout",compact('order'));
	}

	public function create(Request $request)
	{
	   $this->validate($request, [
			'package_ids' => 'required',
			'amount' => 'required',
		]);
	    // $packages = explode(',', $request->package_ids);

   	 	$order = Order::create([
          'amount' => $request->amount,
          'packages' => $request->package_ids,
          'comment'  =>"Order created from packages page"
        ]);
       return redirect()->route('order/checkout', ['order' => $order->id]);
	}

	public function payment(Request $request,Order $order)
	{
	    $this->validate($request, [
			'email' => 'required|email|max:255|string',
			'phone' => 'required|numeric|digits:10',
			'school' => 'required|string',
			'name' => 'required|string',
		]);
		$user = User::where("email", $request->email)->first();
		if ($user) {
		  $user->phone = $request->phone;
		  $user->save();
		}else{
			 $user = $this->createUser($request);
		}

        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $order->id,
          'user' => $user->id,
          'mobile_number' => $request->phone,
          'email' => $request->email,
          'amount' => $order->amount,
          'callback_url' => url('payment/status')
        ]);
        return $payment->receive();
	}

	public function paymentCallback()
	{

		return $request->all();
	    $transaction = PaytmWallet::with('receive');
	    $response = $transaction->response();
	    $order_id = $transaction->getOrderId();

	    $data = [];

	    if($transaction->isSuccessful()){
	      $this->assignPackage($order_id);
	      $data['status'] = "success";
	      $data['transaction_id'] = $transaction->getTransactionId();
	      $data['message'] = "Payment Successfully Paid.";
	    }else if($transaction->isFailed()){
	      $data['status'] = "error";
	      $data['transaction_id'] = $transaction->getTransactionId();
	      $data['message'] = "Payment Failed";
	    }

	    return view("order.status",compact('data'));
	} 

	protected function assignPackage($order)
	{
		$order = Order::find($order);
		$user = $order->user;
		if (!$user) return;
		if(!$user) return;

		$packages = explode(',', $request->package_ids);
		foreach ($packages as $p) {
			$package = Package::find(trim($p));
			if ($package && $package->type == Package::OLYMPIAD) {
				$user->assignProduct($package->product, UserPackage::ALLOWED_ONLY_OLYMPIAD, $package->expire_at);
			}

			if ($package && $package->type == Package::OLYMPIAD_PLUS_MOCKTEST) {
			  $user->assignProduct($package->product, UserPackage::ALLOWED_OLYMPIAD_AND_MOCKTEST, $package->expire_at);
			}

			if ($package && $package->type == Package::ALL_OLYMPIAD) {
			  $all_o = Olympiad::where('status',1)->get();
			  foreach ($all_o as $o) {
			    $user->assignProduct($o->id, UserPackage::ALLOWED_ONLY_OLYMPIAD, $package->expire_at);
			  }
			}

			if ($package && $package->type == Package::ALL_OLYMPIAD_PLUS_MOCKTEST) {
			  $all_o = Olympiad::where('status',1)->get();
			  foreach ($all_o as $o) {
			    $user->assignProduct($o->id, UserPackage::ALLOWED_OLYMPIAD_AND_MOCKTEST, $package->expire_at);
			  }
			}
		}
      return true;
	}

	protected function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); 
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); 
	}

	protected function createUser($request)
    {
        $user = User::create([
		    'phone' => $request->phone,
		    'name' => $request->name,
		    'email' => $request->email,
		    'password' => Hash::make($this->randomPassword())
		]);

	    $student = $user->student;
        if ($student) {
          $student->standard       = $request->standard;
          $student->school_name    = $request->school_name;
          $student->date_of_birth  = $request->dob;
          $student->save();
        }else{
        	$student = StudentDetail::create([
               "user_id" => $user->id,
               "standard" => $request->standard,
               "school_name" => $request->school_name,
               "date_of_birth" => $request->dob,
        	]);
        }
        return $user;
    }

}
