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
        return view('admins.services.index');
    }


    public function create()
    {
        return view('admins.services.add');
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
}
