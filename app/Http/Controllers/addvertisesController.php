<?php

namespace App\Http\Controllers;

use App\Addvertise;
use Addvertises;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class addvertisesController extends Controller
{
    //
    public function index()
    {
        $addvertises = Addvertise::all();
        return view('welcome')->with(('addvertises'), $addvertises);
        //return view('welcome')->with(('addvertises'), $addvertises)->limit(1)->get();;
    }

    public function create()
    {
        return view('submitAdd');
    }

    public function store()
    {
        /* $addvertise = new Addvertise();
        $addvertise->name = request('name');
        $addvertise->title = request('title');
        $request->input('ostan');
        $addvertise->save(); */
        


        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
       
        $city = request()->input('ostan');
        Addvertise::create([
            'ostan' => $city,

        ]);
        
        
        //return redirect('/');
        //$addvertises = Addvertise::create($request->all());
        //dd($request->all());
    }
}
