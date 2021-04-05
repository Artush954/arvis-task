@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('company.store')}}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" cols="30" rows="10" class="form-control" name="description"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
