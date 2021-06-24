@extends('frontend.partials.master')
@section('content')


<div class="album py-5 bg-light">
    <div class="container">

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{route('product.booking')}}" method="post">
            @csrf
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <input type="hidden" value="{{$product->id}}" name="product_id">
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            {{-- <label for="">User Name: {{$user->name}}</label> --}}
            <label for="">Product Name: {{$product->name}}</label>
            <label for="">Price: {{$P_price}} BDT</label>
            <input type="hidden" value="{{$P_price}}" name="price">

            <label for="">Quantity: {{$product->availableStock}}Kg </label>
            <input type="hidden" value="{{$product->availableStock}}" name="a_stock">




            <div class="form-group">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>

        </div>
        </form>
    </div>
</div>


@endsection
