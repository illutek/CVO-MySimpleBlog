@extends('layouts.admin')

@section('title', 'Index')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>All Posts</h1>
            <ul>
                @foreach($posts as $post)
                    <li><a href="#">{{ $post->title }}</a></li>

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