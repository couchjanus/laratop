@extends('layouts.admin')

@section('content')

    <div class="row">
        <h1 class="page-header">Blog</h1>
    </div>

    <div class="row">
        <div class="">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'patch', 'class' => 'edit']) !!}
        
                 <div class="col-md-8">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

                    {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
                    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control select2']) !!}

                    {!! Form::label('tag_list', 'Tags:') !!}
                    {!! Form::select('tag_list[]', $tags, $post->tags, ['id' => 'tag_list', 'class' => 'form-control', 'multiple', 'style' => 'width: 100%']) !!}

                    {{ Form::label('content', "Content:", ['class' => 'form-spacing-top']) }}
                    {{ Form::textarea('content', null, ['class' => 'form-control']) }}

                    <div class="form-group text-right">
                    <a href="{!! url('/posts') !!}" class="btn btn-default raw-left">Cancel</a>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                 
                    </div>

            {!! Form::close() !!}
                
        </div>
        
            <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Show', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>
        
        
    </div>

@stop

