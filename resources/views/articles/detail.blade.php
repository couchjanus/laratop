<!-- Stored in resources/views/articles/detail.blade.php -->

@extends('layouts.app')

@section('title', 'Atricles Page')

@section('content')
    <p>This is Atricle page.</p>

    
    <h2>{{ $result->title }}</h2>
    <p>
    {{ $result->body }}
    </p>
    <a href="{{ url('/list') }}">Go to list</a>
    
@endsection
