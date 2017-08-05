@extends('main')

@section('title', '| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <th><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{ route("tags.store") }}">
                    {{ csrf_field() }}
                    <h2>New Tag</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <br>
                    <button class="btn btn-primary btn-block">Create new tag</button>
                </form>
            </div>
        </div>
    </div>

@endsection