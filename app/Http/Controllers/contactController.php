<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class contactController extends Controller
{
    //
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->title = request('subject');
        $contact->description = request('message');
        $contact->save();
        return redirect('/contact')->withMessage(' نظر ،انتقاد و پیشنهاد شما با موفقیت ثبت شد ');

    }

}
