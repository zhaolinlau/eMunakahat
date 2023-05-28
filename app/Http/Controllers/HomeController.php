<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function indexAdmin()
	{
		return view('admin');
	}

	public function indexStaff()
	{
		return view('staff');
	}

	public function indexUser()
	{
		return view('user');
	}
}
