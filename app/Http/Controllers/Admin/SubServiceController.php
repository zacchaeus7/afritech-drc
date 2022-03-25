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
        return view('admins.subservices.index');
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

        $data['action'] = 'add';
        return view('admins.subservices.add',compact('services','data'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
