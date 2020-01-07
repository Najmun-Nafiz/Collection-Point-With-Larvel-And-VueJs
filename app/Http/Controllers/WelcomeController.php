<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin\Category;


class WelcomeController extends Controller
{
	public function index()
	{
		$data = Category::where('status', 1)->get();
		return view('welcome', compact('data'));
	}

}
