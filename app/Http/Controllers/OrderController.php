<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Olympiad;
use App\Models\Package;
use Carbon\Carbon;

class OrderController extends Controller
{

	public function packages()
	{
	   $all_packages  =Package::active()->get();
	   $packages = Package::active()->whereIn("type",[Package::ALL_OLYMPIAD,Package::ALL_OLYMPIAD_PLUS_MOCKTEST])->get();
	   $olympiads = Olympiad::get();
	   return view("order.package",compact('packages','olympiads','all_packages'));
	}

	public function saveOrder(Request $request, $order)
	{
	   return $request->all();
	}
}
