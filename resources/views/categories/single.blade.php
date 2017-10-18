@extends('layouts.blog')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog Posts</h2>
            </div>
            
        </div>
    </div>

    @if (empty($latestPost))
      <p>Sorry, no posts to show!</p>
    @else
       @foreach ($latestPost as $post)
          <article class="latest-post">
            <div class="entry-title"><a href="{{ route('blog.show',$post->id) }}"> {{ $post->title }}</a> </div>
            <div class="entry-digest"> {{ $post->updated_at }} </div>
          </article>
       @endforeach
    @endif
    <p class="blog-post-meta"><a href="{{ route('list.index') }}">Show All Categories</a></p>

@stop
