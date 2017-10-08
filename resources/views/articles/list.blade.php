<!-- Stored in resources/views/articles/list.blade.php -->

@extends('layouts.app')

@section('title', 'Atricles Page')

@section('content')
    <p>This is Atricles list page.</p>

    @forelse($results as $article)
    <li><a href="{{ route('article.detail', ['id'=>$article->id]) }}">{{ $article->title }}</a></li>
    @empty
        <p>Нет posts</p>
    @endforelse

@endsection
