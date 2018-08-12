<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class index extends Controller
{
    public function index( )
    {
        $albums = DB::select('select * from platedata');
         return view("index", ['albums'=>$albums,'artist'=>$albums]);


    }
}
