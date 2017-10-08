<!-- Stored in resources/views/articles/index.blade.php -->

@extends('layouts.app')

@section('title', 'Atricles Page')

@section('content')
    <p>This is Atricles list page.</p>

    @forelse($results as $post)
        <li>{{ $post->title }}</li>
    @empty
        <p>Нет posts</p>
    @endforelse

@endsection
