@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>

        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Slug:</label>
                    <p><a target="_blank" href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Category:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('j. M, Y. - H:i', strtotime( $post->created_at ))  }}</p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('j. M, Y. - H:i', strtotime( $post->updated_at )) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-md-6">
                        <form method="post" action="{{ route('posts.destroy',  $post->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-block" type="submit">Delete</button>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <a href="{{ route('posts.index') }}" class="btn btn-default btn-block"><< See all posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection