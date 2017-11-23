<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
    public function index() {
      $title = 'Event Planner';
      $events = Event::take(6)->orderBy('event_begin', 'desc')->get();
      return view('pages.landing', compact(['title', 'events']));
    }

    public function about() {
      $title = '';
    }

    public function terms() {
      $title = '';
    }

    public function privacy() {
      $title = '';
    }
}
