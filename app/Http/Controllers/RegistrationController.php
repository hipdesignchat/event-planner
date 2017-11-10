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

		// MN: Set user as administrator if they are the first
		if (User::get()->count() < 1) {
			$user_role = 'admin';
		} else {
			$user_role = 'user';
		}

		// MN: Create and save user

		$registration_data = [
			'name' => request('name'),
			'email' => request('email'),
			'password' => request('password'),
			'user_role' => $user_role
		];
		$user = User::create(
			$registration_data
		);

		// MN: Sign the user in
		auth()->login($user);

		// MN: Set flash data to indicate success, you've registered successfully!

		// MN: Redirect to user index page
		return redirect()->home();
	}
}
