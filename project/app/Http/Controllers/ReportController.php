<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DateTime;

class ReportController extends Controller
{
    //

    public function create(){


     return view('reports.form');

    }
   

   public function store(){
 \App\Person::create([
            	'pname'=>request('pname'),
               'pmail'=>request('pmail'),
               'pmobile'=>request('pmobile')
                 
              
            	]);

     
   
       $a= \App\Person::all()->last()->peid;
    
  

  	
\App\Report::create([
          'rdescrip'=>request('descr'),
          'city'=>request('city'),
          'state'=>request('state'),
          'zip'=>request('zip'),
        'peid'=>$a
          /* $now = new DateTime(),
                'td'=>$now
           */
           ]);
   $b = \App\Report::all()->last()->rid;
           
           
         
         return view('reports.submit',compact('b'));
         
         


  }


  public function search(Request $request)
  {

     $r=$request->input('rstatus');
      $m=$request->input('rmail');

     $report=\App\Report::SearchByKeyword($r)->get();
     $person=\App\Person::SearchByKeyword($m)->get();

     $a=$report[0]->peid;
     $c=$person[0]->peid;
     $b= $report[0]->status;

     if($a==$c)

     	return view('reports.status',compact('b'));





  }

}
