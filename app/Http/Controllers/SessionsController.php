<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function create() {
    $title = 'Sign In';
    return view('sessions.create', compact(['title']));
	}

	public function destroy() {
		auth()->logout();

		return redirect()->home();
	}
}
