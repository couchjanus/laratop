@extends('layouts.blog')
@section('content')
    <h1>Categories</h1>

    @if ($categories->isEmpty())
      <p>Sorry, no categories to show!</p>
    @else
      <ul>
      @foreach ($categories as $category)
        <li>
          <strong>{{ $category->name }}</strong>
          <span>latest post:</span>
          <article class="latest-post">
            <div class="entry-title"><a href="{{ route('blog.show',$category->latestPost->id) }}"> {{ $category->latestPost->title }} </a></div>
            <div class="entry-digest"> {{ $category->latestPost->updated_at }} </div>
          </article>
        </li>
      @endforeach
      </ul>
    @endif

@stop
