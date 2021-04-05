@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('branch.store')}}">
            @csrf
            <input type="hidden" value="{{$id}}" name="company_id">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       class="form-control"
                       name="branch_name"
                       id="name"
                       placeholder="Name" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
