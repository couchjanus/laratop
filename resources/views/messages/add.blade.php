<!-- Stored in resources/views/messages/add.blade.php -->

@extends('layouts.app')

@section('title', 'Add Messages')

@section('content')
    <p>Add New Messages.</p>
    <form method="POST" action="{{ action('MessagesController@insert') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="submit">
    </form>

@endsection
