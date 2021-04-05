@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{route('company.create')}}">Crete company</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($company as $item)
                <tr>
                    <th scope="row">#{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{route('branch.index',['id'=> $item->id])}}" class="btn btn-success">More</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
