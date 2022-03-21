<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Http\Request;

class AfritechController extends Controller
{

    private $repository;

    public function __construct(Repository $repository)
    {

        $this->repository = $repository;

    }

    public function index(){

        $services = $this->repository->findAll('services');

        return view('pages.index',['services' =>
            $services]);
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
