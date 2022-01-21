{{-- @extends('layout.main')
@section('con') --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">

<div class="row justify-content-center">
  <div class="col-lg-5 ">

    <h1 class="h3 mb-3 fw-normal text-center">Edit Book</h1>
    <main class="form-regis">
      <form method="post" action="/dasss/lol">
       {{-- @method('patch') --}}
        @csrf
        <div class="form-floating">
            <input type="text" name="Judul" class="form-control rounded-top @error ('judul') is invalid @enderror"
             required id="Judul"value="{{ $daftar->judul }}">
            <label for="judul">Judul</label>
          </div>
          
          <div class="form-floating">
            <input type="text" name="jumlah" class="form-control rounded-top" required id="jumlah"
            value="{{ $daftar->jumlah }}">
            <label for="jumlah">jumlah</label>
          </div>
          <div class="form-floating">
            <input type="text" name="penulis" class="form-control rounded-top" required id="penulis"
            value="{{ $daftar->penulis }}">
            <label for="penulis">penulis</label>
       
          </div>
        
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Edit</button>
    
      </form>
  </div>
</div>
    
   
{{-- @endsection --}}