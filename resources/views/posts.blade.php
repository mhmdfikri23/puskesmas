@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">

      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
      <button class="btn btn-danger" type="submit">Search</button>
    </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}

    @if ($posts[0]->image)               
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid rounded mx-auto d-block" width="1200px" height="400px">
    @else 
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
    @endif
      
    <div class="card-body">
      <h3 class="card-title"><a class="text-decoration-none text-light" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
      <p>
      <small>
          <h5>By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h5>
      </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}...</p>
      <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Baca Selengkapnya</a>
    </div>
  </div>


<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
          <a class="text-decoration-none text-light" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>

        @if ($post->image)               
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid rounded mx-auto d-block" width="500px" height="400px">
        @else 
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        @endif
        
        {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
        <div class="card-body">
          <h5 class="card-title"><a class="text-decoration-none text-light" href="/posts/{{ $post->slug }}">{{ $post->title  }}</a></h5>
          <p>
          <small>
              By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
             <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
          </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}.</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
     @endforeach
  </div>
</div>

    {{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom">
        <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title  }}</a></h2>
        <h5>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category=/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {{ $post->excerpt }}... <a class="text-decoration-none" href="/posts/{{ $post->slug }}">lanjutkan membaca</a>
        
    </article>
    @endforeach --}}

    @else
  <p class="text-center fs-4">Post Not Found.</p>    
@endif

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
@endsection
