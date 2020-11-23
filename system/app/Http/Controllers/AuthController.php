<?php 

namespace App\Http\Controllers;
use Auth;


class AuthController extends Controller
{
	
	 function loginProcess(){
	 	return view('login');
	 	if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
	 		return redirect('beranda')->with('succes', 'Login Berhasil');
	 	}else{
	 		return back()->with('danger', 'Login Gagal, Silakan cek email dan password anda');
	 	}

	 }

	 function showRegister(){
	 	return view('register');
	 }

}