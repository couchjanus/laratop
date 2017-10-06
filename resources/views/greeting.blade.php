<!-- Stored in resources/views/greeting.blade.php -->

@extends('layouts.front')

@section('content')
    <p>This is my body content.</p>

    @component('components.alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent 


    <!-- Alert with error -->
  @component('components.mess') 

      @slot('class')
          alert-danger
      @endslot

      @slot('title')
          Something is wrong
      @endslot

      My components with errors
  @endcomponent

  <!-- Alert with success -->
  @component('components.mess') 

      @slot('class')
          alert-success
      @endslot

      @slot('title')
          Success
      @endslot

      My components with successful response
  @endcomponent
   

@endsection
