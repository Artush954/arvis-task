@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="card mb-4">
            <div class="card-body">
                <a  href="{{route('branch.create',['id'=>$id])}}">Crete branch</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($branch as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->branch_name}}</td>
                    <td>
                        <a href="{{route('employee.index',['id'=> $item->id])}}" class="btn btn-success" >More</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
