@extends('layouts.blog')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blog.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="">
                <h2 class="blog-title"> {{ $post->title }}</h2>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="blog-post">
                
                {!! $post->content !!}
            </div>
            <p class="blog-post-meta">{{ $post->updated_at }} by <a href="#">Janus</a></p>
        </div>
    </div>
@endsection