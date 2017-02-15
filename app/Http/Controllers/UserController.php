<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
public function getIndex(){
	$user = User::all();
	return view('inscription', ['user'=>$user]);
}
  //  public function getUser($id){
  //   $user=User::find($id);
  //  	return view('inscription', ['user'=>$user]);
  //  }

  // public function postUser(Request $request){
  // 	User::create($request->all());
  // 	return back();

  // }
}
