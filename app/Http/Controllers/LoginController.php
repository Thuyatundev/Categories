<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function create(){

        
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        $user = User::where('email',$request->email)->first();

        if (! $user) {
            return redirect('login');
        }

        $credentials = [
            'email' => $request->email,
            'password'=>$request->password
        ];

        if (! Auth::attempt($credentials)) {
            return redirect('login');
        }
        return redirect('posts');
}

    public function destroy(){
        Auth::logout();
        return redirect('posts');
    }

    public function myvalidate($request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
}
}
