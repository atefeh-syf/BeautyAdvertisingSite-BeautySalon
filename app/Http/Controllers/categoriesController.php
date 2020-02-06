<?php

namespace App\Http\Controllers;

use App\Category;
use App\Addvertise;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    //

    public function show(Category $category){
        $addvertises = Addvertise::all();
        if($addvertises->cat == $category->name){
            dd($addvertises);
        }
    }

}
