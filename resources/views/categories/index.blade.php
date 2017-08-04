@extends('main')

@section('title', '| All Categories')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <th>{{ $category->name }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{ route("categories.store") }}">
                    {{ csrf_field() }}
                    <h2>New Category</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <br>
                    <button class="btn btn-primary btn-block">Create new category</button>
                </form>
            </div>
        </div>
    </div>

@endsection