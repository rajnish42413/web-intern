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
}
