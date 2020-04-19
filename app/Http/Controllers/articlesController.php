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
        $addvertises = Addvertise::orderBy('id', 'desc')->take(5)->get();
        $arts = Article::orderBy('id', 'desc')->take(5)->get();
        return view('blog', ['articles' => $articles, 'addvertises' => $addvertises, 'arts' => $arts]);
    }
    
    public function show(Article $blog)
    {
        $addvertises = Addvertise::orderBy('id', 'desc')->take(5)->get();
        $articles = Article::orderBy('id', 'desc')->take(5)->get();
        return view('single-blog', compact(['blog', 'comments', 'addvertises', 'articles']));
    }


}
