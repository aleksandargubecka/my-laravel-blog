@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>

            <div class="tags">
                @foreach($post->tags as $tag)
                    <a href="{{ route('tags.show', $tag->id) }}" class="label label-default">{{ $tag->name }}</a>
                @endforeach
            </div>
            <div id="backend-comments" style="margin-top: 50px;">
                <h3>Comments
                    <small>{{ $post->comments()->count() }} total</small>
                </h3>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th width="70px"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($post->comments as $comment)
                        <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}"
                                   class="btn btn-xs btn-primary pull-left"><span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                <form method="post" action="{{ route('comments.destroy', $comment->id) }}">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-xs btn-danger pull-right"><span
                                                class="glyphicon glyphicon-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Slug:</label>
                    <p><a target="_blank"
                          href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
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