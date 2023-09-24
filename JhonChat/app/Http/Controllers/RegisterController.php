<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.Register');
    }

    public function store(Request $request){

        // dd($request); debug

        //validacion laravel

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
            
        ]);
    }
}
