@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
    @if($posts->count())
        @foreach($posts as $post)
            <article>
                <h2><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h2>
                <p class="created_at">Created at:{{ $post->created_at->format("d-m-Y") }}, Posted
                    by {{ $post->user->name }}</p>
                <p>{{ str_limit($post->body) }}</p>
                <p><a href="{{ route('blog.show', $post->id) }}">Read more</a></p>
            </article>
        @endforeach
    @else
        <p>There are no blog posts</p>
    @endif
    <div class="text-center">
        {!! $posts->links() !!}
    </div>

@endsection