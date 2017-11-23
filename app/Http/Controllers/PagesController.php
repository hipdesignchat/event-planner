<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
    public function index() {
      $title = 'Home';
      $events = Event::take(6)->orderBy('event_begin', 'desc')->get();
      return view('pages.landing', compact(['title', 'events']));
    }

    public function about() {
      $title = 'About';
      return view('pages.about', compact(['title']));
    }

    public function terms() {
      $title = 'Terms of Service';
      return view('pages.termsofuse', compact(['title']));
    }

    public function privacy() {
      $title = 'Privacy Policy';
      return view('pages.privacypolicy', compact(['title']));
    }
}
