@extends('layout.main')
@section('con')

<div class="row justify-content-center">
  <div class="col-lg-5 ">

    <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
    <main class="form-regis">
      <form method="POST" action="/register">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required placeholder="Name..." value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="ussername" class="form-control @error('ussername') is-invalid @enderror" id="ussername" required placeholder="Ussername.." value="{{ old('ussername') }}">
          <label for="ussername">Ussername</label>
          @error('ussername')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required placeholder="Email..." value="{{ old('email') }}">
          <label for="email" >Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" required placeholder="Password...">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
        </div>
        
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    
      </form>
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
    
   
@endsection