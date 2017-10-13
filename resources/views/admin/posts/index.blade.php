@extends('layouts.admin')

@section('content')

 
    <div class="row">
        <h1 class="page-header">Blog</h1>
        <a class="btn btn-primary pull-right" href="{!! route('posts.create') !!}">Add New</a>
        
    </div>

    <div class="row">

        @if($posts->count() === 0)
            <div class="well text-center">No blogs found.</div>
        @else
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th width="200px" class="text-right">Actions</th>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        <td><a href="{!! route('posts.edit', [$post->id]) !!}">{!! $post->id !!}</a></td>
                        <td class="raw-m-hide">{!! $post->title !!}</td>
                        <td class="raw-m-hide">{!! $post->created_at !!}</td>
                        <td class="text-right">
                            <form method="post" action="{!! url('admin/posts/'.$post->id) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button class="delete-btn btn btn-xs btn-danger pull-right" type="submit"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                            <a class="btn btn-xs btn-default pull-right raw-margin-right-8" href="{!! route('posts.edit', [$post->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
