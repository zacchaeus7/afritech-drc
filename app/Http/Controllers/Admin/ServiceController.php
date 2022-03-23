<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $services = $this->repository->findAll('services');
        return view('admins.services.index',compact('services'));
    }


    public function create()
    {
        $data['action'] = "add";
        return view('admins.services.add',compact('data'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required',
            'cover'=>'required'
        ]);

        $coverName = time() . '.' . $request->file('cover')->extension();
        $request->file('cover')->move(public_path('assets/images/services'), $coverName);
        $data['cover'] = $coverName;


        $this->repository->save('services',$data);

        return redirect(url('service'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['service'] = $this->repository->findRecord('services',$id);

        $data['action'] = "edit";

        return view('admins.services.add',compact('data'));
    }

    public function update_service(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required',
            'cover'=>'nullable'
        ]);

        $service = $this->repository->findRecord('services',$id);

        if (empty($data['cover'])){

            $data['cover'] = $service->cover;
        }
        else{

            $coverName = time() . '.' . $request->file('cover')->extension();
            $request->file('cover')->move(public_path('assets/images/services'), $coverName);
            $data['cover'] = $coverName;
        }

        $this->repository->update('services',$id,$data);

        return redirect(url('service'));
    }


    public function destroy($id)
    {
        $this->repository->delete('service',$id);

        return redirect(url('service'));
    }
}
