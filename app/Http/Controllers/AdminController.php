<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addvertise;
use App\Comment;
use App\Category;
use App\Article;
use App\User;
use App\Blog;
use App\Option;
use DB;
use  Response;
use Illuminate\Support\Facades\Redirect;
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
        return view('admin.admin-index', ['count' => $count, 'count_confim' => $count_confim, 'count_no_confim' => $count_no_confim, 'count_comment' => $count_comment, 'comments' => $comments, 'user_info' => $user_info]);
    }

    public function showAddvertise()
    {
        $addvertises = Addvertise::all();
        foreach ($addvertises  as $key => $addvertise) {
            $date = $addvertise->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $addvertises[$key]['jalali'] = $date;
        }
        return view('admin.addvertise-all', ['addvertises' => $addvertises]);
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
        $addvertise->telegram = request('telegram');
        $addvertise->insta = request('instagram');
        $addvertise->address = request('address');
        $addvertise->description = request('description');
        $addvertise->ostan = $request->input('ostan');
        $addvertise->Special = $request->input('Special');
        $imagePath = request('image')->store('uploads', 'public');
        $addvertise->image = $imagePath;
        $addvertise->confirm = 1;
        $addvertise->is_admin = 1;
        $addvertise->save();
        return redirect('/add-all')->withMessage(' آگهی مورد نظر با موفقیت  ثبت شد ');
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
        return redirect('/blog-all')->withMessage(' نوشته شما با موفقیت  ثبت شد ');
    }


    public function showCategory()
    {
        $category = Category::all();
        return view('admin.addvertise-categories', compact('category', $category));
    }


    public function categoryStore(Request $request)
    {
        $category = new Category();
        $category->name = request('name');
        $category->title = request('title');
        $category->save();
        return redirect('/add-cat')->withMessage(' دسته جدید با موفقیت  ثبت شد ');
    }


    public function showArticle()
    {
        $articles = Article::all();
        foreach ($articles  as $key => $article) {
            $date = $article->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $articles[$key]['jalali'] = $date;
        }
        return view('admin.blog-all', compact('articles', $articles));
    }


    public function addvertiseEdit(Addvertise $addvertise)
    {
        return view('admin.addvertise-edit', compact('addvertise'));
    }


    public function addvertiseUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'title' => 'required',
            'address' => 'required',
            'cat' => 'required',
            'ostan' => 'required',
            'description' => '',
            'email' => '',
            'CustomerName' => '',
            'image' => '',
            'insta' => '',
            'telegram' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $validatedData = array_merge(
                $validatedData,
                ['image' => $imagePath]
            );
        }
        Addvertise::whereId($id)->update($validatedData);
        return redirect('/add-all')->withMessage(' آگهی مورد نظر با موفقیت ویرایش شد ');;
    }

    public function commentDestroy(Comment $comment)
    {
        $commentInfo = Comment::findOrFail($comment->id);
        $commentInfo->delete($commentInfo->id);
        return redirect('/admin')->withMessage(' کامنت مورد نظر با موفقیت حذف شد ');
    }

    public function categoryDestroy(Category $category)
    {
        $categoryInfo = Category::findOrFail($category->id);
        $categoryInfo->delete($categoryInfo->id);
        //return redirect('/admin');
        return redirect('/add-cat')->withMessage(' دسته مورد نظر با موفقیت حذف شد ');
    }
    public function addvertiseDestroy(Addvertise $addvertise)
    {
        $addvertiseInfo = Addvertise::findOrFail($addvertise->id);
        $addvertiseInfo->delete($addvertiseInfo->id);
        return redirect('/add-all')->withMessage(' آگهی مورد نظر با موفقیت حذف شد ');
    }


    public function blogEdit(Article $blog)
    {
        return view('admin.blog-edit', compact('blog'));
    }
    public function blogUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'description' => '',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $validatedData = array_merge(
                $validatedData,
                ['image' => $imagePath]
            );
        }
        Article::whereId($id)->update($validatedData);
        return redirect('/blog-all')->withMessage(' نوشته مورد نظر با موفقیت ویرایش شد ');
    }

    public function blogDestroy(Article $blog)
    {
        $blogInfo = Article::findOrFail($blog->id);
        $blogInfo->delete($blogInfo->id);
        return redirect('/blog-all')->withMessage(' نوشته مورد نظر با موفقیت حذف شد ');
    }

    public function confirm(Addvertise $addvertise)
    {
        $addvertiseInfo = Addvertise::findOrFail($addvertise->id);
        $addvertiseInfo->confirm = '1';
        $addvertiseInfo->save();
        return redirect('/add-all')->withMessage(' آگهی مورد نظر با موفقیت تایید شد ');
    }

    public function confirmComment(Comment $comment)
    {
    
        $commentInfo = Comment::findOrFail($comment->id);
        $commentInfo->confirm = '1';
        $commentInfo->save();
        return redirect('/admin')->withMessage(' کامنت مورد نظر با موفقیت تایید شد ');
    }

    
    public function profileEdit(User $user){
        return view('admin.profile-setting', compact('user'));
    }
    public function profileUpdate(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => '',
            'username' => '',
            'image' => '',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $validatedData = array_merge(
                $validatedData,
                ['image' => $imagePath]
            );
        }
        User::whereId($id)->update($validatedData);
        return redirect('/admin')->withMessage(' پروفایل شما با موفقیت ویرایش شد. ');
    }


    public function getSetting(){
        $options=Option::all();
        $option_news = [];
        foreach ($options as $option) {
            $setting = $option['setting'];
            $value = $option['value'];
            $option_news[$setting] = $value;
        }
        return view('admin.site-setting', compact('option_news'));
    }
    public function updateSetting(Request $request)
    {
        $id=[1,2,3,4,5,6,7,8,9,10,11,12];
        DB::table('options')->where('id', $id[0])->where('setting', 'title')->update(['value' => $request->title]);
        DB::table('options')->where('id', $id[1])->where('setting', 'desc')->update(['value' => $request->desc]);
        DB::table('options')->where('id', $id[2])->where('setting', 'site')->update(['value' => $request->site]);
        DB::table('options')->where('id', $id[3])->where('setting', 'email_admin')->update(['value' => $request->email_admin]);
        DB::table('options')->where('id', $id[4])->where('setting', 'address')->update(['value' => $request->address]);
        DB::table('options')->where('id', $id[5])->where('setting', 'phon1')->update(['value' => $request->phon1]);
        DB::table('options')->where('id', $id[6])->where('setting', 'phon2')->update(['value' => $request->phon2]);
        DB::table('options')->where('id', $id[7])->where('setting', 'tel')->update(['value' => $request->tel]);
        DB::table('options')->where('id', $id[8])->where('setting', 'insta')->update(['value' => $request->insta]);
        DB::table('options')->where('id', $id[9])->where('setting', 'linkdin')->update(['value' => $request->linkdin]);
        DB::table('options')->where('id', $id[10])->where('setting', 'facebook')->update(['value' => $request->facebook]);
        DB::table('options')->where('id', $id[11])->where('setting', 'youtube')->update(['value' => $request->youtube]);
        return redirect('/admin')->withMessage(' تنظیمات با موفقیت ویرایش شد ');
    }

}
