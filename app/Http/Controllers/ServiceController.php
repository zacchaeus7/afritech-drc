<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function repair_pump($id){

        $service = $this->repository->findRecord('services',$id);

        return view('services.service',['service'=>$service]);
    }
}
