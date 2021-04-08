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
      $subjects = Subject::where('abbr','!=','WNGNO')->orderBy('name')->groupBy('name')->get();
      $standards =Standard::all();
      return view('syllabus', compact('subjects','standards'));
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
