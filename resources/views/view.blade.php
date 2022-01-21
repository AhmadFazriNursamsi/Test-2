@extends('layout.main')
@section('con')
<h1>Halaman View</h1>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $post->judul }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $post->title }}</h6>
      <p class="card-text">{{ $post->body }}</p>
      <a href="/post" class="card-link">Kembali</a>

    </div>
  </div>   
@endsection