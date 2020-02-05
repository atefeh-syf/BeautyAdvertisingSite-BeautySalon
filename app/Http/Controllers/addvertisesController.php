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

    public function store(Request $request)
    {
        /* $addvertise = new Addvertise();
        $addvertise->name = request('name');
        $addvertise->title = request('title');
        $request->input('ostan');
        $addvertise->save(); */

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->all();
        $student = Addvertise::create($input);




        /* $data = request()->validate([
           'name' => 'required',
           'phone' => 'required',
        ]);
        
        Addvertise::create($data);
        $city= request()->input('ostan'); */



        /* Addvertise::create([
            'name'=>$data['name'],
            'title'=>$data['name'],
            'phone'=>$data['phone'],
            'ostan' => $city,
        ]); */
        //return redirect('/');
        //$addvertises = Addvertise::create($request->all());
        //dd($request->all());
    }
}
