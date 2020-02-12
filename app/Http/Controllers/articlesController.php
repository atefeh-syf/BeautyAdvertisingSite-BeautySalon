<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Addvertise;
class articlesController extends Controller
{
    //
    public function index(){
        $articles=Article::paginate(12)->sortByDesc("created_at");
        $addvertises = Addvertise::paginate(5)->sortByDesc("created_at");
        $arts = Article::paginate(5)->sortByDesc("created_at");
        return view('blog', ['articles' => $articles, 'addvertises' => $addvertises, 'arts' => $arts]);
    }
}
