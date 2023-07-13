@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')



<div class="promobanner" data-aos="zoom-in" data-aos-delay="{{ $incrementCategory = 150 }}">
        <img src="{{asset('/img/banner2.png')}}" >
    </div>
<div class="content-text">
  <div class="textbox" data-aos="fade-right" data-aos-delay="{{ $incrementCategory = 150 }}">
    <h2 >TOPUP GAME<br>only in <span>UDIN STORE</span></h2>
    <p>Udin Game Store, we provide a cool and exciting game top up experience for game fans around the world.
       With the latest and most popular game top up options, we are your ultimate destination to find a game that meets your needs and desires.</p>
       <a data-aos="fade-right" data-aos-delay="{{ $incrementCategory = 200 }}" href="{{ route('product.index') }}">Buy Now</a>
       
  </div>
  

</div>

@endsection