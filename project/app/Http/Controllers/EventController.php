<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
class EventController extends Controller
{
    //
    public function show()
    {

    	$events=Event::all();


    	return view('index', compact('events'));
    }


    



}
