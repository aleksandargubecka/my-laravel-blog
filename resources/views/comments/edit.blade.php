@extends('main')

@section('title', '| Edit Comment')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Comment</h1>

            <form method="post" action="{{route('comments.update', $comment->id)}}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $comment->name }}" disabled>
                <br>
                <label for="email">Email: </label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $comment->email }}" disabled>
                <br>
                <label for="comment">Comment: </label>
                <textarea name="comment" id="comment" class="form-control">{{ $comment->comment }}</textarea>
                <br>
                <button class="btn btn-success pull-right">Update Comment</button>
            </form>
        </div>
    </div>
@endsection