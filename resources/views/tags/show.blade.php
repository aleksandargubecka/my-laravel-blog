@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $tag->name }} Tag
                <small>Posts {{$tag->posts()->count()}}</small>
            </h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-block form-spacing-top">Edit</a>
        </div>
        <div class="col-md-2">
            <form method="post" action="{{ route('tags.destroy',  $tag->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger btn-block form-spacing-top" type="submit">Delete</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tag->posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <th><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></th>
                        <th>
                            @foreach($post->tags as $tag)
                                <span class="label label-default">{{$tag->name}}</span>
                            @endforeach
                        </th>
                        <th><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">View</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection