<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard;
use App\Models\Syllabus;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\Subject;
use App\Models\StudentDetail;
use App\Models\Olympiad;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class StudentController extends Controller
{

	public function index()
	{
     $data = [];
     $data["totalBuyed"] = UserPackage::where("status",1)->where("expire_at",">",Carbon::now())->count();
     $olympiads = Olympiad::active()->get();
	   return view('user.dashboard',compact('data','olympiads'));
	}

	public function verification()
	{
		$user = auth()->user();
	    $student = $user->student;
	    if(!$student){
	  	$student = StudentDetail::create([
	  	  'user_id' => $user->id
	  	]);
	  }
		return view('user.profile.verification',compact('user','student'));
	}

	public function edit()
	{
	  $user = auth()->user();
	  $student = $user->student;
	  if(!$student){
	  	$student = StudentDetail::create([
	  	  'user_id' => $user->id
	  	]);
	  }
	  return view('user.profile.edit',compact('user','student'));
	}

	public function update(Request $request)
	{

		$this->validate($request, [
			'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1048',
		]);

		$user = auth()->user();
	    $student = $user->student;
	    $user->name = $request->name;
	    $user->save();

        if ($student) {
          $student->standard     = $request->standard;
          $student->school_name  = $request->school_name;
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

        if($request->hasFile('profile_image')){
            if($request->hasfile('profile_image')){
                $avatar = $request->file('profile_image');
                $filename = $student->id.'.'.time() . '.' . $avatar->getClientOriginalExtension();
                $image = Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/profile_images/' . $filename));
                $student->profile_photo = $filename;
                $student->save();
           }
        }
	    return redirect()->back()->with(["success" => "Updated Successfully"]);
	}

	public function updateIdProof(Request $request)
	{

		$this->validate($request, [
			'id_proof'      => 'required',
			'id_front'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
			'id_back'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
		]);
       $user = auth()->user();
		

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

        $student->id_proof = $request->id_proof;

        if($request->hasFile('id_front')){
            if($request->hasfile('id_front')){
                $avatar = $request->file('id_front');
                $filename = $student->id.'.front_id.'.time() . '.' . $avatar->getClientOriginalExtension();
                $image = Image::make($avatar)->resize(500, 300)->save(public_path('/uploads/id_proofs/' . $filename));
                $student->id_front = $filename;
                $student->save();
           }
        }

        if($request->hasFile('id_back')){
            if($request->hasfile('id_back')){
                $avatar = $request->file('id_back');
                $filename = $student->id.'.back_id.'.time() . '.' . $avatar->getClientOriginalExtension();
                $image = Image::make($avatar)->resize(500, 300)->save(public_path('/uploads/id_proofs/' . $filename));
                $student->id_back = $filename;
                $student->save();
           }
        }

        if ($student->id_front && $student->id_back) {
          $user = auth()->user();
          $user->status = User::UNDER_VERIFICATION;
          $user->save();
        }
	    return redirect()->back()->with(["success" => "Updated Successfully"]);
	}

  public function deleteImage(Request $request, $type)
  {
    $user = auth()->user();
    $student = $user->student;

    if (!$student) {
      return redirect()->back();
    }

    $filename = "";
    if ($type == "id_front") {
      $filename = $student->id_front;
      $student->id_front = "";
    }

    if ($type == "id_back") {
     $filename = $student->back;
     $student->id_back = "";
    }

    if ($filename) {
     $old_image = public_path('/uploads/id_proofs/' . $filename);
     if (file_exists($old_image)) {
       @unlink($old_image);
     }
    }

    $student->save();
    return redirect()->back();    
  }

}
