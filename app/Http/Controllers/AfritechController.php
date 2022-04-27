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
        $projects = $this->repository->findAll('projects');

        return view('pages.index',['services' =>
            $services,'projects'=>$projects]);
    }

    public function service(){

        $services = $this->repository->findAll('services');
        $sub_services = $this->repository->findAll('sub_service');


        return view('pages.service',compact('services','sub_services'));
    }

    public function about(){

        $partners = $this->repository->findAll('partners');
        $services = $this->repository->findAll('services');


        return view('pages.about',compact('partners','services'));
    }

    public function contact(){

        return view('pages.contact');
    }

    public function portfolio(){

        $portfolios = $this->repository->findAll('projects');

        foreach ($portfolios as $key => $portfolio){

            $portfolios[$key]->service = $this->repository->findRecord('services',$portfolio->service_id);

        }

        return view('pages.portfolio',compact('portfolios'));
    }

}
