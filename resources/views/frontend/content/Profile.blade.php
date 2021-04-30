@extends('frontend.partials.master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="container">
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">

                        <h2>Name:
                        @if (auth()) {{auth()->user()->name}}

                        @else
                        <h2> not found</h1>
                        @endif

                        </h2>
                        </div>
                            <hr>
                          <ul class="container details">
                            {{-- <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> </p></li> --}}
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>@if (auth()) {{auth()->user()->email}} @endif</p></li>
                            {{-- <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.example.com</p></a> --}}
                          </ul>
                          <h2>Address:
                            @if (auth()) {{auth()->user()->address}}

                            @else
                            <h1> not found</h1>
                            @endif
                            <h2>Contacts:
                                @if (auth()) {{auth()->user()->contact}}

                                @else
                                <h1> not found</h1>
                                @endif

                          <table class="table">
                          <thead>
                            <tr class="fw-bolder" style="color:black">
                              <th scope="col">#</th>

                              <th scope="col">Product Name</th>
                              <th scope="col">Product price</th>
                              <th scope="col">Quantity</th>


                            </tr>
                          </thead>
                          @foreach ($booking as $key=>$data )

                          <tbody>
                          <tr class='fw-bolder style="color:black'>
                            <th scope="row">{{$key+1}}</th>


                            <td>{{$data->product_name}}</td>
                            <td>{{$data->product_price}}</td>
                            <td>{{$data->availableStock}}</td>



                          </tr>
                          </tbody>

                          @endforeach
                        </table>
                      </div>

                  </div>

                </div>


@endsection
