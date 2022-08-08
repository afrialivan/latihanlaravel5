@extends('layouts.main')

@section('container')

<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
    
<a href="/">Back</a>
@endsection