@extends('frontend.partials.master')
@section('content')

<section class=" text-center container bg-clear">
    <div class="row ">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-bolder text-dark">All Products</h1>
        <p>
          <a href="#" class="btn btn-primary my-2">You can orders from here</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-clear">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          @foreach ($products as $data )
          <div class="col " >
              <div class="card shadow-sm" >
                <img src="{{url('files/photo/'.$data->image)}}" alt="Product Image" style=" height:220px">
                <div class="card-body">
                  <p class="card-text fs-5 fw-bolder text-dark">{{$data->name}}</p>
                  <p class="text-muted fw-bolder"> Available  {{$data->availableStock}}Kg </p>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">

                          <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-warning">View</a>
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


@endsection
