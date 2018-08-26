<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function menu() {
        $title = "User Menu";
        $user = auth()->user();

        return view('user.menu', compact(['title', 'user']));
    }
}
