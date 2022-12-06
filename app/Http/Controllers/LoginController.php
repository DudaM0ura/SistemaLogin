<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
   
      $credenciais = $request->validate([
          'name' => ['required'],
          'password' => ['required'],
      ]);
 
       if (Auth::attempt($credenciais)) {
           dd('logado');
       }else{
           dd('error');
       }
    }
}
