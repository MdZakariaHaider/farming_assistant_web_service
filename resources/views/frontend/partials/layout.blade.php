
@extends('frontend.partials.master')
@section('content')

</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="w-100 slider-height" src="https://cdn.sanity.io/images/0vv8moc6/drugtopics/fa0ef299d4b5d2e7b19394eebe5f53476e426f84-1000x500.png?auto=format" class="d-block w-100" alt="influenza">
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <h2>IT IS THE RIGHT OF A CHILD TO BE IMMUNIZED IN FULL</h2>
    </div>
  </div>

  <div class="carousel-item">
    <img class="w-100 slider-height" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/14F41/production/_109352858_polio.jpg" class="d-block w-100" alt="Polio">
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>Some representative placeholder content for the second slide.</p>
    </div>
  </div>
  
  <div class="carousel-item">
    <img class="w-100 slider-height" src="https://thebetterindia-english.sgp1.digitaloceanspaces.com/uploads/2015/03/8437.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Third slide label</h5>
      <p>Some representative placeholder content for the third slide.</p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
</div>


{{-- baby tika link
<img src=""https://pedimedicine.com/wp-content/uploads/2018/09/EPI-Vaccination-Schedule-in-Bangladesh-2018-1.jpg>
https://image.slidesharecdn.com/practiceteachingtopicno-160706172028/95/immunization-schedule-11-638.jpg?cb=1467825847

teenage --}}

<section class="bg">
    <div class=" text-center container bg-clear">
      <div class="row ">
        <div class="col-lg-6 col-md-8 mx-auto">

          <p>
            <a href="#" class="btn btn-primary my-2">You can orders from here</a>
          </p>
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
@endsection
