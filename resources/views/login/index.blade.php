@extends('layouts.main')

@section('container')

<form action="/login" method="POST">
  @csrf
  @if (session('loginError'))
  <div class="alert alert-danger" role="alert">
    {{ session('loginError') }}
  </div>    
  @endif
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>    
  @endif
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
    @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <small>Belum punya akun? <a href="/register">Register sekarang!</a></small>
</form>

@endsection