@extends('layouts.blog')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog Posts</h2>
            </div>
            
        </div>
    </div>

    @foreach ($posts as $post)
        <h2>{{ $post->title}}</h2>
        <p class="blog-post-meta">{{ $post->updated_at }} by <a href="#">Janus</a>. Category: <a href="{{ route('list.single', $post->category_id) }}">{{ $post->category->name }}</a></p>
        
         <a class="btn btn-info" href="{{ route('blog.show',$post->id) }}">Read more</a>
    @endforeach
<hr>
    
@endsection
