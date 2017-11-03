<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
	public function create() {
		$title = 'Register a User';
		return view('registration.create', compact(['title']));
	}

	public function store() {
		// MN: Validate the form
		$this->validate(request(), [
			'name'		=>	'required',
			'email'		=>	'required|email',
			'password'	=>	'required|confirmed'
		]);

		// MN: Create and save user
		$user = User::create(request(['name', 'email', 'password']));

		// MN: Sign the user in
		auth()->login($user);

		// MN: Set flash data to indicate success, you've registered successfully!

		// MN: Redirect to user index page
		return redirect()->home();
	}
}
