<?php

namespace App\Http\Controllers;

use App\Category;
use App\Addvertise;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    //

    public function show($Category)
    {
        if ($Category == 'last') {
            $Category_id = '';
        } elseif ($Category == 'beautysalons') {
            $Category_id = '1';
        } elseif ($Category == 'beautyclass') {
            $Category_id = '2';
        } elseif ($Category == 'beauty_services') {
            $Category_id = '3';
        } elseif ($Category == 'cosmetic') {
            $Category_id = '4';
        }

        if ($Category_id == '') {
            $addvertises = Addvertise::paginate(12)->sortByDesc("created_at");
            //return view('addvertises', ['addvertises' => $addvertises]);
        } else {
            $category = Category::findOrFail($Category_id);
            if ($category !== null) {
                //dd(Addvertise::query()->where('cat',"$Category_id")->get());
                //$addvertises = $category->addvertises->sortByDesc("created_at");
                $addvertises = Addvertise::query()->where('cat', "$Category_id")->get();
            }
        }
        return view('addvertises', ['addvertises' => $addvertises, 'category' => $Category]);
    }
}
