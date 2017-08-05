@extends('main')

@section('title', '| Edit Tag')

@section('stylesheets')
    <link rel="stylesheet" href="/css/vendor/parsley.css">
@endsection

@section('content')
    <div class="row">
        <form method="post" action="{{ route('tags.update',  $tag->id)}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Tag Name:</label>
                    <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Name" required
                           maxlength="140" value="{{$tag->name}}">
                </div>
                <div class="col-md-2 pull-right">
                    <input type="submit" class="btn btn-success btn-block" value="Save">
                </div>
            </div>
        </form>
    </div>
@endsection


@section('scripts')
    <script src="/js/vendor/parsley.min.js" type="text/javascript"></script>
@endsection