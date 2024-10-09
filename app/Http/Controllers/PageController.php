<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }

    public function feed(){
        return view('pages.feed');
    }
    public function join(){
        return view('pages.join');
    }
    public function scholars(){
        return view ('pages.scholars');
    }
    public function sme(){
        return view('pages.sme');
    }
    public function training(){
        return view('pages.training');
    }
    public function farmers(){
        return view('pages.farmers');
    }
}
