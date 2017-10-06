<!-- Stored in resources/views/blog/index.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    
    @if (count($records) === 1)
        Здесь есть одна запись!
    @elseif (count($records) > 1)
        Здесь есть много записей!
    @else
        Здесь нет записей!
    @endif

    @unless (count($records))
        Здесь нет ни одной записи!
    @endunless

    @for ($i = 0; $i < 10; $i++)
        Текущее значение: {{ $i }}
    @endfor
    
    @foreach ($posts as $post)
        <p>Это публикация {{ $post->id }}</p>
    @endforeach

    @forelse($posts as $post)
    <li>{{ $post->title }}</li>
    @empty
    <p>Нет posts</p>
    @endforelse

    @foreach ($posts as $post)
    @if ($loop->first)
        This is the first iteration.
    @endif

    @if ($loop->last)
        This is the last iteration.
    @endif

    <p>This is post {{ $post->id }}</p>
    @endforeach
    

    @foreach ($posts as $post)
    @if ($post->id == 1)
        @continue
    @endif

    <li>{{ $post->title }}</li>

    @if ($post->id == 5)
        @break
    @endif
    @endforeach

    @foreach ($posts as $post)
        @continue($post->id == 1)

        <li>{{ $post->title }}</li>

        @break($post->id == 5)
    @endforeach
   

@endsection


@section('javascript')
    @parent
    <script src="/js/my.js"></script>
@endsection


@push("custom_scripts")
    <script>
    // dummy javascript as example
    let name = "Hello";
    </script>
@endpush
