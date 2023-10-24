<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view(view:'login');
    }
    function registration(){
        return view(view:'registration');
    }
    function loginPost(Request $request){
$request->validate([
    'email' => 'required',
    'password' => 'required'
]);
$credentials = $request->only ('email','password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route(name:'home'));
    }
    return redirect(route(name:'login'))->with("error","Invalid Email");
    }

    function registrationPost(Request $request){
    $request->validate([
    'name' => 'required',
    'email' => 'required|email|unique:users',
    'password' => 'required'
    ]);
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);
    $user = user::create($data);
    if(!$user){
        return redirect(route(name:'registration'))->with("error","registration Failed!");
    }
    return redirect(route(name:'login'))->with("success","Registration Successful!");
    }

}
