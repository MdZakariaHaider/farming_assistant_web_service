@extends('frontend.partials.master')



@section('content')
<div>
    <h2 style="color: rgb(236, 10, 10)" class="text-center mt-5">Product Cart</h2>
</div>
<form action="{{route('orderConfirm')}}" method="post" >

    @csrf



    <div class="d-flex content-jufity-center mt-5 ">
        <table class="table table-bordered table-striped table-success">
            <thead>
              <tr>
                <th scope="col">Serial</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Remove</th>
                <th scope="col">Total</th>




              </tr>
            </thead>
            {{-- @dd($carts); --}}
            @php
                $total=0;
            @endphp
            @foreach ($carts as $key=>$cart)
            <tbody>


              <tr>
                <th scope="row">{{$key+1}}</th>
                <td><img src="{{url('/files/photo/'.$cart->product->image)}}" style="width:100px;height:100px"></td>
                <td>{{$cart->product->name}}</td>
                <td>{{$cart->product->price}}</td>
                <td>{{$cart->product->availableStock}}</td>

                <td >
                <a class="btn btn-danger" href={{ route('productRemove', $cart['id']) }}>Remove</a>
                </td>
                {{-- <li class="bg-danger"><a class="btn btn-danger" href={{ route('foodItemRemove', $cart['id']) }}>Delete</a></li> --}}

       {{-- </td>  --}}
                <td> {{$cart->product->price * $cart->product->availableStock}}</td>

@php

    $total+=$cart->product->price * $cart->product->availableStock
@endphp
              </tr>
              @endforeach
              <td colspan="7" class="text-center">

                grand-total:
                {{$total}}

                                </td>
            </tbody>

        </table>
    </div>



    <diV>


        <h4><button style="background-color: rgb(70, 194, 13);   type="submit" >Check Out</button></h4>
      </diV>

</form>
{{$carts->links()}}


@endsection
