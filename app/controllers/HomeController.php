<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin(){
		// show the form
		return View::make('login');
	}

	public function doLogin(){
		//process the form
		// validate the info, create rules for the inputs
		$rules=array(
			'username' => 'required|alphaNum|min:3',
			'password' => 'required|alphaNum|min:3'
		);

		// run the validator fails, redirect back to the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()){
			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
		}else{
			// create our user data for the authenticarion
			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);

			//attempt to do the login
			if(Auth::attempt($userdata)){
				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				return Redirect::to('/');
			}else{
				// validation not successful, send back to form
				return Redirect::to('login');
			}
		}
	}
}