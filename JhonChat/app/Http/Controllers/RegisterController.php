<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.Register');
    }

    public function store(Request $request){

        // dd($request); debug
        // moficar request 

        //validacion laravel

        $this->validate($request,[
            'name' => 'required',
            'username' => 'required|unique:users|min:5|max:15',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6'
        ]);

        $request->request->add(['username' => Str::slug($request->username)]);
        //crear registro
        User::create([
            'name' => $request ->name,
            'username' => $request->username,
            // lug -espacios por -
            'email' => $request ->email,
            'password' => Hash::make($request ->password)
        ]);

        //autenticar
        //1
        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ]);
        //2

        // auth()->attempt($request->only('email','password'));
        
        //redirecionar usuario
        return redirect()->route('post.index', auth()->user()->username);
    }
}
