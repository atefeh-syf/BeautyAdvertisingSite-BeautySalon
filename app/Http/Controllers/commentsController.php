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
        
        //$addvertise = Addvertise::findOrFail($request->banner_id);
        $comment = new Comment();
        $comment->banner_id = request('banner_id');
        $comment->name = request('name');
        $comment->email = request('email');
        $comment->description = request('message');
        $comment->confirm = 0;
        $comment->save();
    }
    
}
