<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            // 'username' => 'required | unique:users|min:5|max:15',
            // 'email' => 'required | unique:users | email',
            'username' => 'required |min:5|max:15',
            'email' => 'required | email',
            'password' => 'required | confirmed | min:6'
        ]);

        User::Create([
            'name' => $request ->name,
            'username' => $request ->username,
            'email' => $request ->email,
            'password' => $request ->password
        ]);
    }
}
