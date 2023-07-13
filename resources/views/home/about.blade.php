@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="bg-transparent">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6 "data-aos="fade-right" data-aos-delay="{{ $incrementCategory = 50 }}">
        <h1 class="display-4">About us </h1>
        <p class="lead text-muted mb-0">Project laravel Top Up Game.</p>
        <p class="lead text-muted">Create by <a href="https://www.instagram.com/dimassalah_/" class="text-muted"> 
                    <u>Dimas Salahuddin</u></a>
        </p>
      </div>
      <div class="col-lg-5 d-none d-lg-block "data-aos="fade-left" data-aos-delay="{{ $incrementCategory = 100 }}"><img src="{{asset('/img/logo1.png')}}" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>
@endsection