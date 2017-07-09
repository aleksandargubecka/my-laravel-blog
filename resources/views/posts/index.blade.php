@extends('main')

@section('title', '| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new
                post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ substr($post->title, 0, 40) }}{{ (strlen($post->title) > 40) ? '...' : ''  }}</td>
                        <td>{{ substr($post->body, 0, 50) }}{{ (strlen($post->body) > 50) ? '...' : ''  }}</td>
                        <td>{{ date('j. M, Y. - H:i', strtotime($post->created_at)) }}</td>
                        <td>{{ date('j. M, Y. - H:i', strtotime($post->updated_at)) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection