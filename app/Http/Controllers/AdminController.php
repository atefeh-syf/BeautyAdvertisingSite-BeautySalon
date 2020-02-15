<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addvertise;
use App\Comment;
use App\User;
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
        $count= Addvertise::count();
        $count_confim= Addvertise::where('confirm','1')->count();
        $count_no_confim= Addvertise::where('confirm','0')->count();
        $count_comment=Comment::count();
        
        
        $comments = Comment::all();
        foreach ($comments  as $key => $comment) {
            $date = $comment->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $comments[$key]['jalali'] = $date;
        }
        
        $user_info=auth()->user();
        return view('adminpage',['count'=>$count, 'count_confim'=> $count_confim, 'count_no_confim'=> $count_no_confim, 'count_comment'=> $count_comment, 'comments'=> $comments, 'user_info'=> $user_info]);

    }
    public function showAddvertise(){
        $addvertises = Addvertise::all();
        foreach ($addvertises  as $key => $addvertise) {
            $date = $addvertise->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $addvertises[$key]['jalali'] = $date;
            return view('adminpage-blog-all',['addvertises' => $addvertises]);
        }

    }
}
