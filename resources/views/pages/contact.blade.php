@extends('main')

@section('title', '| Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form method="post" action="{{ route('contact.post') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input id="subject" type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Body:</label>
                    <textarea id="message"  name="message" class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection