@extends('layouts.admin-layout')

@section('content-body')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <form method="POST"  enctype="multipart/form-data" action="{{ ($data['action'] == "edit") ?url('service/update_service/'.$data['service']->id) : url('service')}}">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" value="{{($data['action'] == "edit") ? $data['service']->title : ''}}" class="form-control" name="title" placeholder="Titre du service">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" value="{{($data['action'] == "edit") ? $data['service']->description : ''}}" class="form-control" name="description" placeholder="Description">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Cover</label>
                        <input type="file" value="" class="form-control" name="cover" placeholder="Cover">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
@endsection