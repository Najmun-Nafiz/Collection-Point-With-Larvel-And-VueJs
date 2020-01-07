<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function cate_output($id)
    {
        return view('cate.output');
    }
}
