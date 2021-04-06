<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard;
use App\Models\Syllabus;
use App\Models\Subject;
use App\Models\Olympiad;
use App\Models\Order;

class UserController extends Controller
{

	public function purchase()
	{
	   $olympiads = Olympiad::active()->get();
	   return view('user.purchase', compact('olympiads'));
	}

   public function mock()
   {
      $olympiads = Olympiad::active()->get();
      return view('user.mock-tests', compact('olympiads'));
   }

   public function exam()
   {
      $olympiads = Olympiad::active()->get();
      return view('user.olympiad-exam', compact('olympiads'));
   }

   public function answer()
   {
      $olympiads = Olympiad::active()->get();
      return view('user.olympiad-exam-answer', compact('olympiads'));
   }

}
