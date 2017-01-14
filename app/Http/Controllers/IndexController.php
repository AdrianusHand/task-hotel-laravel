<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function hello()
    {
    	// return "hello world";
    	$name = "Tata";
    	$age = "23";
    	$friends = ['Andra','Bryan'];
		return view('welcome')->with([
    		'name'=>$name,
    		'age'=>$age,
    		'friends'=>$friends,
    		]);
    }
}
