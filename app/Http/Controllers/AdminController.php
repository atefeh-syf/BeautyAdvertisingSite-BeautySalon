<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addvertise;
use App\Comment;
use App\Category;
use App\Article;
use App\User;
use App\Blog;
use \Morilog\Jalali\Jalalian;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $count = Addvertise::count();
        $count_confim = Addvertise::where('confirm', '1')->count();
        $count_no_confim = Addvertise::where('confirm', '0')->count();
        $count_comment = Comment::count();


        $comments = Comment::all();
        foreach ($comments  as $key => $comment) {
            $date = $comment->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $comments[$key]['jalali'] = $date;
        }

        $user_info = auth()->user();
        return view('adminpage', ['count' => $count, 'count_confim' => $count_confim, 'count_no_confim' => $count_no_confim, 'count_comment' => $count_comment, 'comments' => $comments, 'user_info' => $user_info]);
    }
    public function showAddvertise()
    {
        $addvertises = Addvertise::all();
        foreach ($addvertises  as $key => $addvertise) {
            $date = $addvertise->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $addvertises[$key]['jalali'] = $date;
        }
        return view('addvertise-all', ['addvertises' => $addvertises]);
    }
    public function addvertiseStore(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'title' => 'required',

        ]);
        $addvertise = new Addvertise();
        $addvertise->name = request('name');
        $addvertise->CustomerName = request('CustomerName');
        $addvertise->email = request('email');
        $addvertise->phone = request('phone');
        $addvertise->title = request('title');
        $addvertise->cat = $request->input('cat');
        //$addvertise->telegram = request('telegram');
        ///$addvertise->insta = request('instagram');
        $addvertise->address = request('address');
        $addvertise->description = request('description');
        $addvertise->ostan = $request->input('ostan');
        $imagePath = request('image')->store('uploads', 'public');
        $addvertise->image = $imagePath;
        $addvertise->confirm = 1;
        $addvertise->is_admin = 1;
        $addvertise->save();
        return view('addvertise-add');
    }

    public function blogStore(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'text' => 'required',
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->text = request('text');
        $article->description = request('description');
        $article->cat = 1;
        $imagePath = request('image')->store('uploads', 'public');
        $article->image = $imagePath;
        $article->save();
        return view('add-blog');
    }

    public function showCategory()
    {
        $category = Category::all();
        return view('addvertise-categories', compact('category', $category));
    }

    public function showArticle()
    {
        $articles = Article::all();
        foreach ($articles  as $key => $article) {
            $date = $article->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $articles[$key]['jalali'] = $date;
        }
        return view('show-blog', compact('articles', $articles));
    }
    public function addvertiseEdit(Addvertise $addvertise)
    {
        return view('addvertise-edit', compact('addvertise'));
    }
    public function addvertiseUpdate(Addvertise $addvertise)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'title' => 'required',
            ]
        );
        if (request('image')){
            $imagePath = request('image')->store('uploads', 'public');
        }
        $addvertise->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));
    
    }
    public function addvertiseDestroy(Addvertise $addvertise)
    {
        $addvertiseInfo = Addvertise::findOrFail($addvertise->id);
        $addvertiseInfo->delete($addvertiseInfo->id);
        return redirect('/add-all');
    }
    public function blogEdit(Article $blog)
    {
        return view('edit-blog', compact('blog'));
    }
    public function blogUpdate(Article $blog)
    {
        
    }
    public function blogDestroy(Article $blog)
    {
        $blogInfo = Article::findOrFail($blog->id);
        $blogInfo->delete($blogInfo->id);
        return redirect('/blog-all');
    }

    public function confirm(Addvertise $addvertise)
    {
        $addvertiseInfo = Addvertise::findOrFail($addvertise->id);
        $addvertiseInfo->confirm ='1';
        $addvertiseInfo->save();
        return redirect('/add-all');
    }
}
