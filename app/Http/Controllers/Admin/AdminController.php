<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('admins.index');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }

    public function project(){

        $projects = $this->repository->findAll('projects');

        return view('admins.projects.project',compact('projects'));

    }

    public function partners(){

        $partners = $this->repository->findAll('partners');

        return view('admins.partners.partner',compact('partners'));

    }

    public function create_project(){

        $services = $this->repository->findAll('services');

        return view('admins.projects.add_project',compact('services'));
    }

    public function store_project(Request $request){

        $data = $request->validate([
           'title'=>'required',
           'description'=>'required',
           'service_id'=>'required',
            'cover'=>'required'
        ]);

        $coverName = time() . '.' . $request->file('cover')->extension();
        $request->file('cover')->move(public_path('assets/images/projects'), $coverName);
        $data['cover'] = $coverName;

        $this->repository->save('projects',$data);

        return redirect(url('/afritech_project'));

    }


    public function create_partner(){

        return view('admins.partners.add_partner');
    }

    public function store_partner(Request $request){

        $data = $request->validate([
            'title'=>'required',
            'cover'=>'required'
        ]);

        $coverName = time() . '.' . $request->file('cover')->extension();
        $request->file('cover')->move(public_path('assets/images/partners'), $coverName);
        $data['cover'] = $coverName;

        $this->repository->save('partners',$data);

        return redirect(url('/afritech_project'));

    }



}
