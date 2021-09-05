@extends('main')
@section('title', '| Homepage')
@section('content')
    <div class="row" style="background-color: gray; ">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <hr class="my-4">
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- End of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
        </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
    </div>
@endsection


