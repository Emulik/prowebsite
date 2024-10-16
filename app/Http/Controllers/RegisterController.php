<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function save(Request $request){

        $validateFields = $request->validate([
            'name'=>'string',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        dd($validateFields);
        // $user = User::create($validateFields);
    }
}
