@extends('layouts.admin-layout')

@section('content-body')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sub services</h3>
            </div>
            <form method="POST"  enctype="multipart/form-data" action="{{ ($data['action'] == "edit") ?url('subservice/'.$data['service']->id) : url('subservice')}}">
                {{--@method('PATCH')--}}
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
                        <label for="exampleInputPassword1">Services</label>
                        <select name="service_id" id="" class="form-control">
                            @foreach ($services as $service)
                                <option value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Cover</label>
                        <input type="file" value="" class="form-control" name="cover" placeholder="Cover">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
@endsection