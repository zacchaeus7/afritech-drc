@extends('layouts.admin-layout')

@section('content-body')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="page-header">
                    <h1>Page-header</h1>
                    <div class="col-sm-4 col-sm-offset-12">
                        <a href="{{url('partners/partner_create')}}" class="btn btn-primary">Ajouter</a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nom du service</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $service)
                        <tr>
                            <td>{{$service->id}}</td>
                            <td>{{$service->title}}</td>
                            <td>
                                <a href="{{url('project/'.$service->id).'/edit'}}"><span class="badge bg-success">edit</span></a>
                                <a href="{{url('project/delete/'.$service->id)}}"><span class="badge bg-danger">delete</span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection