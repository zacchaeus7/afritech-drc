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

        $services = $this->repository->findAll('services');

        //substr('',0,150)
        return view('pages.service',compact('services'));
    }

    public function about(){

        $partners = $this->repository->findAll('partners');

        return view('pages.about',compact('partners'));
    }

    public function contact(){

        return view('pages.contact');
    }

}
