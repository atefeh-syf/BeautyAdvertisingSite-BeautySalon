<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
class optionsController extends Controller
{
    //
    public function index()
    {
        $options = Option::all();
        $option_news = [];
        foreach ($options as $option) {
            $setting = $option['setting'];
            $value = $option['value'];
            $option_news[$setting] = $value;
        }
        return view('layouts.header');
    }
}
