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
        $projets_service = $this->repository->findRecordsByField('projects','service_id',$service->id);
        $sub_services = $this->repository->findRecordsByField('sub_service','service_id',$service->id);

        //var_dump($projets_service);die;
        return view('services.service',['service'=>$service,'project'=>$projets_service,'sub_services'=>$sub_services]);
    }
}
