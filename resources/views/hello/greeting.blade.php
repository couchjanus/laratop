<!-- Stored in resources/views/blog/index.blade.php -->

@extends('layouts.front')

@section('content')
    <p>This is my body content.</p>

    @component('components.alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent    

@endsection
