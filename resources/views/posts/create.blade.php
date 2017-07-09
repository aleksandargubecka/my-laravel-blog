@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    <link rel="stylesheet" href="/css/vendor/parsley.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form method="post" action="/posts" data-parsley-validate>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required maxlength="140">
                </div>
                <div class="form-group">
                    <label for="body">Post body:</label>
                    <textarea class="form-control" id="body" name="body" placeholder="Body text..." required></textarea>
                </div>
                <button type="submit" class="btn btn-success pull-right">Create Post</button>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/vendor/parsley.min.js" type="text/javascript"></script>
@endsection