@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p>Thanks for visiting!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div> <!-- end of .row -->
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Headline</h3>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured
                    content or information...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Headline</h3>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured
                    content or information...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Headline</h3>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured
                    content or information...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Headline</h3>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured
                    content or information...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Headline</h3>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                    featured
                    content or information...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            Sidebar
        </div>
    </div>
@endsection