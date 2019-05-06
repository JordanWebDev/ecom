<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function ourteam(){
        return view('ourteam');
    }
    public function privacy(){
        return view('privacy');
    }
    public function terms(){
        return view('terms');
    }
    public function testimonials(){
        return view('testimonials');
    }
}
