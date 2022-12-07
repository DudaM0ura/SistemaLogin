<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminAccess;
use App\Http\Middleware\ClientAccess;                                                                                         

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
   
      $credenciais = $request->validate([
          'name' => ['required'],
          'password' => ['required'],
      ],[
        'name.required' => 'Usuário é obrigatório!',
        'password.required' => 'Senha é obrigatória!'
      ]);
 
       if (Auth::attempt($credenciais)) {
           dd('ok');
       }else{
           return redirect()->back()->with('danger','E-mail ou senha inválidos!');
       }
    }
}
