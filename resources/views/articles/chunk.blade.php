<!-- Stored in resources/views/articles/chunk.blade.php -->

@extends('layouts.app')

@section('title', 'Atricles Page')

@section('content')
    <p>This is Atricles chunk page.</p>

    @forelse($results[1] as $post)
        <li>{{ $post->title }}</li>
    @empty
        <p>Нет posts</p>
    @endforelse

@endsection
