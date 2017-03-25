<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Place;

class SearchController extends Controller{

public function search(Request $request)
{
   $q=$request->input('search');
   $places=Place::SearchByKeyword($q)->get();

   //return $places;

  // return view('search',compact('places'));
   foreach($places as $place){
   $d=$place->pid;
   $events=Event::SearchByKeyword($d)->get(); 
   
  //return $events;
 return view('search',compact('places','events'));
  
  //return $d;
  // $d1=$events[0]->descrip;
 //return $d1;

}
}
}
