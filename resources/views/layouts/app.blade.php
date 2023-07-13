<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a href="{{ route('home.index') }}" class="logo"><img src="{{asset('/img/logo1.png')}}"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Cart</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                    @else
                    <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a>

                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <hr>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

<footer>
    <div class="container pt-3">
      <h5 class="text-center mb-3" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 100 }}">
        It's Really That <br />
        Easy to Win the Game
      </h5>
      <div class="row gap-lg-0 gap-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 200 }}">
          <div class="card kotakfuter p-3 w-75 ml-5">
            <p class="card-title mb-2">1. Start</p>
            <p class="text-lg text-black-50 mb-0">Choose a game <br /> that you want to top-up</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 300 }}">
          <div class="card kotakfuter p-3 w-75 ml-5">
            <p class="card-title mb-2">2. Fill Up</p>
            <p class="text-lg text-black-50 mb-0">Top-up according <br /> to available products </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 400 }}">
          <div class="card kotakfuter p-3 w-75 ml-5">
            <p class="card-title mb-2">3. Be a Winner</p>
            <p class="text-lg text-black-50 mb-0">Ready to use <br /> to improve your game</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center pt-4">
      <p class="card-title"> Get in touch </p>
      <a class="mr-2" href="mailto:easytopup.str@gmail.com"><img src="/img/icons-gmail.svg"></a>
      <a href="https://www.instagram.com/easytopup.store/"><img src="/img/icons-instagram.svg"></a>
    </div>
        <div class="col-12 text-center">
        <p class="pt-4 pb-2">
            © 2023 UDINSTORE - Laravel Project.
        </p>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
</footer>


</html>