<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfritechController extends Controller
{


    public function index(){


        return view('pages.index');
    }

    public function service(){

        return view('pages.service');
    }

    public function about(){

        return view('pages.about');
    }

    public function contact(){

        return view('pages.contact');
    }

}
