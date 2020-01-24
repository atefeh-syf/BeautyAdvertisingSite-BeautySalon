<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Addvertise;

class addvertisesController extends Controller
{
    //
    public function index()
    {
        $addvertises = Addvertise::all();
        return view('welcome')->with(('addvertises'), $addvertises)->limit(1)->get();;
    }

    public function create()
    {
        return view('submitAdd');
    }
}
