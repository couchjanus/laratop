<!-- Stored in resources/views/messages/index.blade.php -->

@extends('layouts.app')

@section('title', 'Page Messages')

@section('content')
    <p>This is Messages content.</p>

    @forelse($results as $post)
        <li>{{ $post->title }}</li>
    @empty
        <p>Нет posts</p>
    @endforelse

@endsection
