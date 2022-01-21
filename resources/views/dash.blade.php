@extends('dashboard.lol')
@section('title', 'Book')

@section('con')

<table class="table table-striped">
  <tr>
      <th>No</th>
      <th>Judul</th>
    
      <th>Action</th>
    </tr>
    @foreach ($daftar as $buku)
        
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $buku->judul }}</td>
       
        <td>
            {{-- <a href="/edit/{{ $buku->id }}" class="badge bg-primary">Edit</a> --}}
            <a href="/dasss/{{ $buku->id }}" class="badge bg-info">Detail</a>
        </td>
    </tr>
    @endforeach
</table>
@section('lol')
    
<a href="/dasss/create" class="btn btn-primary mt-100">Tambah Data</a>
@endsection

@endsection

    