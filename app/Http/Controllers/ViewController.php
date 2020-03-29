<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    
    public function index() {
       
        $labs = DB::select('select * from labs');
        
       return view('welcome',['labs'=>$labs]);
     
    }



}
