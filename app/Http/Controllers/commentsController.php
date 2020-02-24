<?php

namespace App\Http\Controllers;

use App\Addvertise;
use App\Comment;
use Illuminate\Http\Request;

class commentsController extends Controller
{
    //
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->banner_id = request('banner_id');
        $comment->name = request('name');
        $comment->email = request('email');
        $comment->description = request('message');
        $comment->confirm = 0;
        $comment->save();
        return redirect('/a' .'/'.$comment->banner_id)->withMessage(' کامنت شما با موفقیت ثبت و بعد از تایید مدیر سایت نمایش داده میشود ');
    }
    
}
