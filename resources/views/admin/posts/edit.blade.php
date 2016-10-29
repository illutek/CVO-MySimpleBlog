@extends('layouts.admin')

@section('title', 'Edit Blog Post')

@section('content')
    <a href="{{ route('admin.posts.index') }}">Back to list</a>
    <h1>Edit post</h1>

    {!! Form::model($post, ['route' =>['admin.posts.update', $post->id], 'method'=>'put']) !!}
    @include('admin.posts.form', ['btnText'=>'Update'])
    {!! Form::close() !!}
@endsection