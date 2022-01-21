<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Halaman | {{ $title }}!</title>
  </head>
  <body>
    <ul class="nav nav-tabs container">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Fazri Web</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : "" }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : "" }}" href="/about">About</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === 'Blog') ? 'active' : "" }}" href="/post">Post</a>
        </li> --}}

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Wellcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/dash"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
         <li><hr class="dropdown-divider"></li>
         <form action="/logout" method="POST">
          @csrf
           <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
         </form>
           
          </ul>
        </li>
            @else
           <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : "" }}" href="/login"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
           </li>
            </ul>
            @endauth
          </ul>
    <div class="container">
        <div class="row">
            <div class="col-10">
                @yield('con')
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>