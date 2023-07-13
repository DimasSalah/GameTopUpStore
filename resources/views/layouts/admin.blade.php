<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="admin p-3 col fixed text-white ">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white"> Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white"> Admin - Products</a></li>
                <li><a href="{{ route('admin.user.index') }}" class="nav-link text-white"> Admin - Users</a></li>
                
                
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn pencet">Go back to the home page</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

<footer>
    <div class="container pt-3">
      <h5 class="text-center text-white mb-3" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 100 }}">
        Welcome <br />
        To Admin Panel
      </h5>
      <div class="row gap-lg-0 gap-4">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 200 }}">
          <div class="card futeradmin text-white p-3 w-75 ml-5">
            <p class="card-title mb-2 ">Edit Product</p>
            <p class="text-lg text-white-50 mb-0">Manage item <br /> with create or edit your product</p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 300 }}">
          <div class="card futeradmin text-white p-3 w-75 ml-5">
            <p class="card-title mb-2">User Management</p>
            <p class="text-lg text-white-50 mb-0">Manage User <br /> you can change role user or delete </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 400 }}">
          <div class="card futeradmin text-white p-3 w-75 ml-5">
            <p class="card-title mb-2">Become a professional admin</p>
            <p class="text-lg text-white-50 mb-0">Ready to use <br /> full control in your hands</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center pt-4">
      <p class="card-title text-white" > Get in touch </p>
      <a class="mr-2" href="mailto:easytopup.str@gmail.com"><img src="/img/icons-gmail.svg"></a>
      <a href="https://www.instagram.com/easytopup.store/"><img src="/img/icons-instagram.svg"></a>
    </div>
        <div class="col-12 text-center">
        <p class="pt-4 pb-2 text-white">
            © 2023 UDINSTORE - Laravel Project.
        </p>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
</footer>

</html>