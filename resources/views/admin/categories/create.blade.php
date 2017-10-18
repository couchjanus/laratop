@extends('layouts.admin')

@section('content')

    <div class="row">
        <h1 class="page-header">Category</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'POST', 'route' => 'categories.store', 'class' => 'add']) !!}

            <div class="panel panel-default">
                <div class="panel-heading">
                    Create category
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Category Name']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="form-group text-right">
                <a href="{!! url('/categories') !!}" class="btn btn-default raw-left">Cancel</a>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

    {!! Form::close() !!}
        
    </div>
@endsection
