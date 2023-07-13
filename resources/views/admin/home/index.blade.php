@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

<div class="row">
<div class="col-xl-3 col-sm-6 col-12 row">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">{{ $users }}</h3>
                  <span>Total Clients</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
        <div class="col-xl-3 col-sm-6 col-12 row">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="success">{{ $product }}</h3>
                  <span>Total Product</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        

      </div>

<div class="bg-white ">
  <div class="container ">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Admin product</h2>
        <p class="font-italic text-muted mb-4">if you want to introduce fresh items or make adjustments to your current offerings, managing your shop's product catalog is just click this button.</p><a href="{{ route('admin.product.index') }}" class="pencet btn px-5 rounded-pill shadow-sm">Edit Product</a>
      </div>
      <div class="col-lg-4 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Go back to the home page</h2>
        <p class="font-italic text-muted mb-4">This will redirect you to the main page where you can continue managing your products or perform other tasks related to your online store.</p><a href="{{ route('home.index') }}" class="pencet btn px-5 rounded-pill shadow-sm">Go Back</a>
      </div>
    </div>
  </div>
</div>
@endsection