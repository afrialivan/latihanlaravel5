@extends('layouts.main')

@section('container')
    
  <h1>Home</h1>
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-3 mb-3">
      <div class="card h-100" style="width: 17rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->body }}</p>
          <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
          <a href="/edit/{{ $post->slug }}" class="btn btn-primary">Edit</a>
          <a href="/hapus/{{ $post->slug }}" class="btn btn-primary">Hapus</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection