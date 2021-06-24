
@extends('frontend.partials.master')
@section('content')
<div class="" >
	<div class="row">
	<div style="background-color:rgb(87, 81, 81)" class=" alert-warning   alert-dismissible" role="alert" >
  <button  type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" style="background-color: silver"  class="close btn btn-warning" data-dismiss="alert">Not Interested</button>
  <strong><i class="fa fa-warning"></i> </strong>
  <marquee>
  <h4 style="color: rgb(222, 226, 11)">Welcome to Farming Assistant Web Service.We are here to provide you the best service</h4>
  </marquee>
</div>



@include('frontend.content.homeCarosol')






<section style="background-color: " class="bg">
    <div class=" text-center container bg-clear">
      <div class="row ">
        <div class="col-lg-6 col-md-8 mx-auto">
{{--
          <p>
            <a href="#" class="btn btn-dark my-2">You can orders from here</a>
          </p> --}}
        </div>
      </div>
    </div>

    <div class="album py-5 bg-clear">
      <div class="container ">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


            @foreach ($products as $data )
            <div class="col  " >
                <div class="card cardDesign">
                  <img src="{{url('files/photo/'.$data->image)}}" alt="Product Image" style=" height:220px">
                  <div class="card-body">
                    <p class="card-text fs-5 fw-bolder text-dark">{{$data->name}}</p>
                    <p class="text-muted fw-bolder"> Available  {{$data->availableStock}}Kg </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            {{-- <button type="button" class="btn btn-sm btn-primary">Add to cart</button> --}}
                            <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a>
                            <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-dark">Add to cart</a>

                        </div>
                      <small class="text-muted fw-bolder">{{$data->price}} BDT</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach



        </div>
        </div>
    </div>
</section>
@include('frontend.partials.footerdesign');
@endsection
