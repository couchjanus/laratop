@extends('layouts.admin')

@section('content')

    <div class="row">
        <h1 class="page-header">Category</h1>
    </div>

        <div class="row">
         {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch', 'class' => 'edit']) !!}

            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit category
                </div>

                <div class="panel-body">
                    <div class="col-md-8 form-group">
                    <div class="row">
                    
                        <div class="col-md-8 form-group">
                            {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
                    
                    <div class="row">
                    <div class="col-md-12">
                        
                    <div class="form-group text-left">
                        <a href="{!! url('/categories') !!}" class="btn btn-default raw-left">Cancel</a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                    </div>
                    </div>
                    
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="well">

                        <dl class="dl-horizontal">
                            <label>Created At:</label>
                            <p>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Last Updated:</label>
                            <p>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</p>
                        </dl>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('categories.show', 'Show', array($category->id), array('class' => 'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                {{ Html::linkRoute('categories.index', '<< See All Categories', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>        
    </div>

@endsection
