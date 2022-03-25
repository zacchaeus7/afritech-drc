<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    private $repository;

   public function __construct(Repository $repository)
   {
       $this->repository = $repository;
   }

    public function index()
    {
        $services = $this->repository->findAll('sub_service');

        return view('admins.subservices.index',compact('services'));
    }


    public function create()
    {
        $services = $this->repository->findAll('services');

        $data['action'] = 'add';
        return view('admins.subservices.add',compact('services','data'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'cover' => 'nullable',
            'service_id'=>'required'
        ]);

        $coverName = time() . '.' . $request->file('cover')->extension();
        $request->file('cover')->move(public_path('assets/images/services'), $coverName);
        $data['cover'] = $coverName;

        $this->repository->save('sub_service',$data);

        return redirect(url('subservice'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $services = $this->repository->findAll('services');

        $data['action'] = 'edit';
        $data['service'] = $this->repository->findRecord('sub_service',$id);

        return view('admins.subservices.add',compact('data','services'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'cover' => 'nullable',
            'service_id'=>'required'
        ]);

        $service = $this->repository->findRecord('sub_service',$id);

        if (empty($data['cover'])){

            $data['cover'] = $service->cover;
        }
        else{

            $coverName = time() . '.' . $request->file('cover')->extension();
            $request->file('cover')->move(public_path('assets/images/services'), $coverName);
            $data['cover'] = $coverName;
        }

        $this->repository->update('sub_service',$id,$data);

        return redirect(url('subservice'));
    }


    public function destroy($id)
    {
        $this->repository->delete('sub_service',$id);

        return redirect(url('subservice'));
    }
}
