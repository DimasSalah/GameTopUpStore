@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
      <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="card profile-card-5 "data-aos="fade-up" data-aos-delay="{{ $incrementCategory = 100 }}">
        <div class="card-img-block">
          <img class="card-img-top img-fluid" src="{{ asset('/storage/'.$product->getImage()) }}" alt="Card image cap">
        </div>
        <div class="card-body pt-0">
          <h5 class="card-title text-center">{{ $product->getName() }}</h5>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection
