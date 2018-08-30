<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Hello extends Controller
{
    //
    public function index()
	{
	  return 'hello world from controller bodo';
	}

	public function show($name)
	{
		return view("hello ",$names = array('name' => $name ));
	}
}

