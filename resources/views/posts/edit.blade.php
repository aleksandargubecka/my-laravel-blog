@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')
    <link rel="stylesheet" href="/css/vendor/parsley.css">
@endsection

@section('content')
    <div class="row">

        <form method="post" action="{{ route('posts.update',  $post->id)}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control input-lg" id="title" name="title" placeholder="Title" required
                           maxlength="140" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control input-lg" id="slug" name="slug" placeholder="Slug" required
                           maxlength="140" value="{{$post->slug}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{ ($category->id === $post->category_id) ? 'selected' : '' }}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="body" class="form-spacing-top">Post body:</label>
                    <textarea class="form-control" id="body" name="body" placeholder="Body text..."
                              required>{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date('j. M, Y. - H:i', strtotime( $post->created_at ))  }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date('j. M, Y. - H:i', strtotime( $post->updated_at )) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-success btn-block" value="Save">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <a href="{{ route('posts.index') }}" class="btn btn-default btn-block"><< See all posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('scripts')
    <script src="/js/vendor/parsley.min.js" type="text/javascript"></script>
@endsection