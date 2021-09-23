@extends('main')
@section('title', '| View Post')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary btn-block">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="card h-100 p-5 bg-light border rounded-3">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ $post->updated_at}}</dd>
                    </dl>
                    <hr>

                    <div class="row">
                        <div class="col-sm-6 ">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection