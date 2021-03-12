<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard;
use App\Models\Syllabus;
use App\Models\Subject;

class StudentController extends Controller
{

	public function index()
	{
	   return view('user.dashboard');
	}

	public function verification()
	{
		$user = auth()->user();
	    $student = $user->student;
		return view('user.profile.verification',compact('user','student'));
	}

	public function edit()
	{
	  $user = auth()->user();
	  $student = $user->student;
	  return view('user.profile.edit',compact('user','student'));
	}

	public function update(Request $request)
	{
		$user = auth()->user();
	    $student = $user->student;

	    $user->name = $request->name;
	    $user->save();

        if ($student) {
          $student->standard     = $request->standard;
          $student->school_name  = $request->school_name;
          $student->date_of_birth  = $request->date_of_birth;
        }else{
        	$student = StudentDetail::create([
               "user_id" => $user->id,
               "standard" => $request->standard,
               "school_name" => $request->school_name,
               "date_of_birth" => $request->date_of_birth,
        	]);
        }
	    return redirect()->back()->with(["success" => "Updated Successfully"]);
	}
}
