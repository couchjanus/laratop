@extends('layouts.front')

@section('content')

    <div class="row">
        <h1 class="page-header">Send A Message</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'POST', 'route' => 'send', 'class' => 'add']) !!}

            <div class="panel panel-default">
                <div class="panel-heading">
                    Send A Message
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('title', 'title*', ['class' => 'control-label']) !!}
                            {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter title']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('title'))
                                <p class="help-block">
                                    {{ $errors->first('title') }}
                                </p>
                            @endif
                        </div>
                        <div class="col-xs-12 form-group">
                            {!! Form::label('content', 'content*', ['class' => 'control-label']) !!}
                            {!! Form::text('content', old('content'), ['class' => 'form-control', 'placeholder' => 'Enter content']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('content'))
                                <p class="help-block">
                                    {{ $errors->first('content') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="form-group text-right">
                <a href="{!! url('/') !!}" class="btn btn-default raw-left">Cancel</a>
                {!! Form::submit('Sand', ['class' => 'btn btn-primary']) !!}
            </div>

    {!! Form::close() !!}
        
    </div>
@endsection
