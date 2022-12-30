@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3" style="">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('images/supermarket.png')}}" class="rounded-start img-fluid m-4" alt="..." width="410px" height="400px">
          </div>
          <div class="col-md-8" style="margin-top: 0px;">
            <div class="card-body">
              <h1 class="card-title fw-bold" style="margin-bottom: 20px;"><u>About Company</u></h1>
              <p class="card-text">PT Kelontong Family Tbk (“The Company”) was established in 2022. The Company started its operations by opening the first supermarket (Ranch Market) in January 2022, which initially with franchise arrangement from Ranch Market Indonesia. Later on, the Company made improvements and adjustments to Ranch Market to suit with the market and lifestyle of customers in Indonesia. In 2010, the Company entered into termination agreement with Ranch Market Indonesia. Furthermore, the Company entered into agreement to obtain license to use Ranch Market brand in Indonesia and separate from Ranch Market Indonesia.</p>
              <p class="card-text"><small class="text-muted">~ Alvin Rama S ~ (CEO supermarket family)</small></p>
            </div>
            <a href="{{url ('https://github.com/Alvinnn-R')}}" class="btn btn-info ms-3 fw-bolder">Learn More</a>
          </div>
        </div>
      </div>
</div>
@endsection