@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{route('employee.create',['branch_id' => $id])}}">Crete Employee</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employee as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->surname}}</td>
                    <th> {{$item->role->name}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
