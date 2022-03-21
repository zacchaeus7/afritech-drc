<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function repair_pump(){

        return view('services.service');
    }
}
