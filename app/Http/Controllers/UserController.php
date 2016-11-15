<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getLogin(){
    	return view('auth.login');
    }
    
    public function postLogin(Request $request){
    	$username = $request['username'];
    	$password = md5($request['password']);
    	$status = $request['status'];

    	if($status == 'A'){
    		
    	}
    }
}
