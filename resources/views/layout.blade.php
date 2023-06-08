<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Lotus Team</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid " >
          <a class="navbar-brand" href="#" ><span class="text-dark">Lotus</span>  <span style="color:#ee7724">Team</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <form action="/" class="d-flex">
                    <input type="text" name="search" class="form-control p-1" placeholder="Search">
                    <button class="btn  " style="background:#ee7724 ; color:white ">Search</button>
                    </form>
              </li>
            </ul>
            @auth
            <div>
                <span style="font-family: Arial, Helvetica, sans-serif; font-weight:700;">Welcome {{auth()->user()->name}}</span>
            </div>

             <div class="d-flex">

              <a href="/listings/manage" class="btn btn-success mx-2" type="submit">Manage Listings</a>
            </div>
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <form class="inline" action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Log Out</button>
                        </form>
                   </li>

            </ul>


            @else
            <div class="d-flex">

                <a href="/register"  class="btn btn-primary btn-block fa-lg gradient-custom-2  "  type="submit">Register</a>
                <a href="/login" class="btn btn-outline-danger ms-2  " type="submit">Signin</a>
              </div>
            @endauth

          </div>

        </div>
      </nav>
      <x-flash-message/>
    {{-- view output--}}
<!-- As a link -->


@yield('content')

<!-- As a heading -->
<div class="">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a href="/listings/create" class="btn btn-primary btn-block fa-lg gradient-custom-2">Create</a>
      </div>
    </nav>
  </div>

</body>
</html>


