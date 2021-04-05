@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('employee.store')}}">
            @csrf
            <input type="hidden" value="{{ $branch_id }}" name="branch_id">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name"   placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Surname</label>
                <input type="text" class="form-control" name="surname"   placeholder="Name">
            </div>
            <div class="form-group">
                <label for="role">Select Role</label>
                <select name="role" id="" class="form-control">
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
