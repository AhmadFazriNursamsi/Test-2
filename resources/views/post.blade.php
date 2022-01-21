@extends('layout.main')
@section('con')
<h1>Halaman Blog</h1> 
@foreach ($base as $bas)
<h1 class="mt-5">{{ $bas->judul }}</h1>
<h3><a href="/post/{{ $bas->id }}">{{ $bas->title }}</h3></a>

@endforeach 
@endsection