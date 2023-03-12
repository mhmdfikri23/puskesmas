@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <h5>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a>in <a style="text-decoration:none" href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }} </a></h5>
                 @if ($post->image)               
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid rounded mx-auto d-block" width="500px" height="400px">
                @else 
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}

                {{-- <h5>{{ $post->author}}</h5> --}}
                <article class="my-3 fs-6">
                     {!! $post->body !!}
                </article>
               
                <a href="/posts" class=" d-block mt-4 mb-5">Back Page</a>
        </div>
    </div>
</div>
{{-- <article>
    <h2 class="mb-5">{{ $post->tittle }}</h2>
    <h5>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a>in <a style="text-decoration:none" href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a></h5>
    <h5>{{ $post->author}}</h5>
    {!! $post->body !!}
    </article> --}}

    {{-- <a href="/posts" class="text-decoration-none d-block mt-4">Back Page</a> --}}
@endsection