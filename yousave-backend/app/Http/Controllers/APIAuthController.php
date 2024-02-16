<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
  public function register(Request $request){
    $request->validate([
      'fname'=> 'required',
      'lname'=> 'required',
      'tel'=> 'required|string',
      'email'=> 'required|email|unique:users',
      'password'=> 'required|min:6',
      'address' => 'required',
    ]);
    
  }


  public function logIn(Request $request){


  }



  public function logOut(){

  }
}
