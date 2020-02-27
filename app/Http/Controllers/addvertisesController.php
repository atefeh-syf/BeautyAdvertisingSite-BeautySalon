<?php

namespace App\Http\Controllers;

use App\Addvertise;
use App\Comment;
use Addvertises;
use App\Article;
use App\Option;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use \Morilog\Jalali\Jalalian;

class addvertisesController extends Controller
{
    //
    public function index()
    {
        $addvertises = Addvertise::paginate(6);
        foreach ($addvertises  as $key => $addvertise) {
            $date = $addvertise->created_at;
            $date = Jalalian::forge($date)->format('%d %B');
            $addvertises[$key]['jalali'] = $date;
        }
        $articles = Article::paginate(5);

        

        return view('welcome',['addvertises'=>$addvertises,'articles'=>$articles]);
        
    }
    public function createSpecial()
    {
        return view('submitAddSpecial');
    }

    public function storeSpecial(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'title' => 'required',

        ]);
        $addvertise = new Addvertise();
        $addvertise->name = request('name');
        $addvertise->CustomerName = request('CustomerName');
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
        $addvertise->Special = 1;
        $addvertise->is_admin = 0;
        $addvertise->save();
        return redirect('/a/create/special')->withMessage(' آگهی شما با موفقیت ثبت شد پس از تایید مدیر سایت نمایش داده می شود ');

    }

    public function search(Request $request){
        $text=request('text');
        $cat = $request->input('cat');
        $ostan = $request->input('ostan');
        $searchs =Addvertise::query()->where('name', 'LIKE', "%{$text}%")->orWhere('cat',"$cat")
        ->orWhere('ostan',"$ostan")->get();

        return view('addvertises', ['addvertises' => $searchs, 'category' => 'search']);
    }
    
    public function showOstan($ostan,Request $request){
        $addvertises =Addvertise::query()->where('ostan',"$ostan")->get();

        return view('addvertises', ['addvertises' => $addvertises, 'category' => $ostan]);
    }
    public function show(Addvertise $addvertise)
    {
        $baner_id= $addvertise->id;
        $comments = Comment::query()->where('banner_id', "$baner_id")->where('confirm', "1")->get();
        $addvertises = Addvertise::paginate(5)->sortByDesc("created_at");
        $articles = Article::paginate(5)->sortByDesc("created_at");

        return view('addvertise', compact(['addvertises', 'comments','addvertise' , 'articles']));
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
        $addvertise->CustomerName = request('CustomerName');
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
        $addvertise->Special = 0;
        $addvertise->is_admin = 0;
        $addvertise->save();
        return redirect('/a/create')->withMessage(' آگهی شما با موفقیت ثبت شد پس از تایید مدیر سایت نمایش داده می شود ');
    }
}
