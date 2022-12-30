@extends('layouts.app')

@section('content')

{{-- carousel --}}
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ asset('images/2.jpg')}}" class="d-block w-100 rounded" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('images/1.jpg')}}" class="d-block w-100 rounded" alt="...">
		</div>
		<div class="carousel-item">
			<img src="{{ asset('images/1.jpg')}}" class="d-block w-100 rounded" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<hr class="featurette-divider mt-5">

<div class="row featurette mt-5">
  <div class="col-md-7 order-md-2">
    <h1 class="fw-bolder">Welcome to the family grocery store</span></h1>
    <h3 class="">A grocery store that completes your various needs such as staples, fruits, vegetables, and many more</h3>
    <br>
    <a href="{{url ('/company')}}" class="btn btn-success">Company</a>
    <a href="{{url ('/katalog')}}" class="btn btn-primary">Browse Produk</a>
  </div>
  <div class="col-md-4 order-md-1">
    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="360" height="360" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 50x50" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> --}}
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" src="{{ asset('images/beli.jpg')}}" width="360" height="360" alt="">
  </div> 
</div>

<hr class="featurette-divider mt-5">

</div>


@endsection