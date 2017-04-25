<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;
	// public function login(Request $request){
		// dd($request);
	// }

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function validateLogin(Request $request){
		if(filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)) {
			$request->request->add(['email' => $request->input('login')]);
		}
		$request->request->add(['usuario' => $request->input('login')]);   
		$this->validate($request, [
			$this->username() => 'required', 'password' => 'required',
			]);
	}
	protected function credentials(Request $request)
	{
		if($request->has('email')){
			return $request->only('email', 'password');
		}
		return $request->only('usuario', 'password');
	}
	public function username(){
		return 'login';
	}
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}
	public function logout(Request $request){
		dd($request->all());
	}
}
