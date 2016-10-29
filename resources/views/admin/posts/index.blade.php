@extends('layouts.admin')

@section('title', 'Index')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>All Posts</h1>
            <ul>
                @foreach($posts as $post)
                    <li><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->title }}</a>
                        {!! Form::open([
                        'route'=>['admin.posts.destroy', $post->id],
                        'method'=>'delete',
                        'class'=>'destroy'
                        ]) !!}
                        {!! Form::submit('Delete') !!}
                        {!! Form::close() !!}
                    </li>
                @endforeach
            </ul>
            <div class="text-center">{!! $posts->links() !!}</div>
        </div>
        <div class="col-md-6">
            <h1>Create new Post</h1>
            {!! Form::open(['route'=>'admin.posts.store']) !!}
            @include('admin.posts.form', ['btnText'=>'Create Post'])
            {!! Form::close() !!}
        </div>
    </div>


@endsection