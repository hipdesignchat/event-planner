<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show', 'search']);
    }

    /**
     * Display a listing of all events
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::Current()->get();
        $title = "Event Index";
        return view('event.index', compact(['events', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create an Event';
        return view('event.create', compact(['title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',
            'event_begin'   => 'required',
            'event_end'     => 'required',
            'location'      => 'required',
            'colour'        => 'required',
            'status_id'     => 'required|numeric',
            'category_id'   => 'required|numeric'
        ]);

        auth()->user()->publish(
            $event = new Event(request([
                'title',
                'description',
                'location',
                'status_id',
                'event_begin',
                'event_end',
                'colour',
                'category_id'
            ]))
        );

        return redirect()->route('event_view', [$event]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $title = $event->title;
        return view('event.show', compact(['event', 'title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $title = 'Editing '.$event->title;
        // MN: Model binding means we can move on
        return view('event.edit', compact(['event', 'title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
      // Validate the data
      $this->validate($request, [
          'title'         => 'required',
          'description'   => 'required',
          'event_begin'   => 'required',
          'event_end'     => 'required',
          'location'      => 'required',
          'colour'        => 'required',
          'status_id'     => 'required|numeric',
          'category_id'   => 'required|numeric'
      ]);

      // MN: Store the data
      $event->title  =  $request['title'];
      $event->description  =  $request['description'];
      $event->event_begin  =  date("Y-m-d H:i:s", strtotime($request['event_begin']));
      $event->event_end  =  date("Y-m-d H:i:s", strtotime($request['event_end']));
      $event->location  =  $request['location'];
      $event->colour  =  $request['colour'];
      $event->status_id  =  $request['status_id'];
      $event->category_id  =  $request['category_id'];
      $event->save();

      return redirect()->route('event_view', [$event]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    /**
     * Search for an event
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $results = Event::where('title', 'like', '%'.request('query').'%')->get();
        $title = 'Searching for ‘'.request('query').'’';

        return view('event.search', compact(['results', 'title']));
    }
}
