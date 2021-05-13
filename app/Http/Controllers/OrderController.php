<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Olympiad;
use App\Models\Order;
use App\Models\User;
use App\Models\StudentDetail;
use App\Models\UserPackage;
use App\Models\Package;
use Carbon\Carbon;
use PaytmWallet;
use Illuminate\Support\Facades\Hash;

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

		$order->user_id = $user->id;
		$order->save();

        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $order->id,
          'user' => $user->id,
          'mobile_number' => $request->phone,
          'email' => $request->email,
          'amount' => 1,
          'callback_url' => url('payment/callback')
        ]);
        return $payment->receive();
	}

	public function paymentCallback(Request $request)
	{

		// $request->all();
	    $transaction = PaytmWallet::with('receive');
	    $response = $transaction->response();
	    $order_id = $transaction->getOrderId();
	    $order = Order::find($order_id);

	    $data = [];

	    if($transaction->isSuccessful()){
	      $this->assignPackage($order_id);
	      $data['status'] = "success";
	      $data['transaction_id'] = $transaction->getTransactionId();
	      $data['message'] = "Payment Successfully Paid.";
	      $order->status = Order::PAID;
	      $order->payment_response_id =  $transaction->getTransactionId();
	      $order->payment_at =  Carbon::now();

	    }else if($transaction->isFailed()){
	      $order->status = Order::PAID;
	      $data['status'] = "error";
	      $data['message'] = $response["RESPMSG"];
	      
	    }

	    $order->save();

	    $isHideBack = true;
	    $isHideFooter = true;

	    return view("order.status",compact('data','isHideBack','isHideFooter'));
	} 

	protected function assignPackage($order)
	{
		$order = Order::find($order);
		$user = $order->user;
		if (!$user) return;
		if(!$user) return;

		$packages = explode(',', $order->packages);
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
			    $user->assignProduct($package->product, UserPackage::ALLOWED_ONLY_OLYMPIAD, $package->expire_at);
			  }
			}

			if ($package && $package->type == Package::ALL_OLYMPIAD_PLUS_MOCKTEST) {
			  $all_o = Olympiad::where('status',1)->get();
			  foreach ($all_o as $o) {
			    $user->assignProduct($package->product, UserPackage::ALLOWED_OLYMPIAD_AND_MOCKTEST, $package->expire_at);
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

    	$name = explode(" ", $request->name);
    	$password = strtolower($name[0]).$request->standard;
    	if (!$password) {
    	 $password = Hash::make($this->randomPassword());
    	}
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
