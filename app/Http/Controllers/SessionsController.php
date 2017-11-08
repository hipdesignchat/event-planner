<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
  public function __construct() {
    // MN: The guest middleware will stop authenticated users from logging in again after logging in
    $this->middleware('guest', ['except' => 'destroy']);
  }

	public function create() {
    $title = 'Sign In';
    return view('sessions.create', compact(['title']));
	}

  public function store() {
    // MN: Attempt to authenticate
    if (!auth()->attempt(request(['email', 'password']))) {
      // MN If unsuccessful, redirect back with errors
      return back()->withErrors([
        'message' => 'Please check your credentials and try again.'
      ]);
    }

    // Redirect to the home page
    return redirect()->home();
  }

	public function destroy() {
		auth()->logout();

		return redirect()->home();
	}
}
