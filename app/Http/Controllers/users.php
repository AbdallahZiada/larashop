<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class users extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function master()
    {
        return view('layouts/master');
    }

    public function page()
    {
        return view('page');
    }

    public function store(Request $request)
    {
    	$user_data = $request->all();
        $valid = $this->validate($request,[
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

		$user = User::create([
			'name'=>$user_data['username'],
			'email'=>$user_data['email'],
			'password'=>$user_data['password']
		]);
        auth()->login($user);
        return redirect()->to('/');
    }
}
