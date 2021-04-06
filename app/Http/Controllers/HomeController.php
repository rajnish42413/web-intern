<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard;
use App\Models\Syllabus;
use App\Models\Subject;

class HomeController extends Controller
{

	public function index()
	{

	   return view('user.dashboard');
	}

   public function registerStudent()
   {
      return view('student-register');
   }

   public function registerSchool()
   {
      return view('school-register');
   }

   public function syllabus(Request $request,$standard)
   {
      if (!($standard && $request->subject_id)) {
   		abort(404);
   	  }

   	 $syllabus = Syllabus::where(["class_id" ,$standard,"subject_id" => $request->subject_id])->get();
   	 return $syllabus;
   }
}
