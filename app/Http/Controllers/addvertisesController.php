<?php

namespace App\Http\Controllers;

use App\Addvertise;
use App\Comment;
use Addvertises;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use \Morilog\Jalali\Jalalian;

class addvertisesController extends Controller
{
    //
    public function index()
    {
        $addvertises = Addvertise::all();
        foreach ($addvertises  as $key => $addvertise) {
            $date = $addvertise->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $addvertises[$key]['jalali'] = $date;
        }
        return view('welcome')->with(('addvertises'), $addvertises);
        //return view('welcome')->with(('addvertises'), $addvertises)->limit(1)->get();;
    }

    public function show(Addvertise $addvertise)
    {
        $comments = Comment::all();
        return view('addvertise', compact(['addvertise', 'comments']));
    }

    public function create()
    {
        return view('submitAdd');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'title' => 'required',

        ]);
        $addvertise = new Addvertise();
        $addvertise->name = request('name');
        $addvertise->email = request('email');
        $addvertise->phone = request('phone');
        $addvertise->title = request('title');
        $addvertise->cat = $request->input('cat');
        $addvertise->telegram = request('telegram');
        $addvertise->insta = request('instagram');
        $addvertise->address = request('address');
        $addvertise->ostan = $request->input('ostan');
        $imagePath = request('image')->store('uploads', 'public');
        $addvertise->image = $imagePath;
        $addvertise->confirm = 0;
        $addvertise->is_admin = 0;
        $addvertise->save();


        /* $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->all();
        $student = Addvertise::create($input); */

        /* $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $data['ostan'] = request()->input('ostan');
        Addvertise::create($data);
 */

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
