@extends('frontend.partials.master')
@section('content')

<div class="container" style="padding: 200px">
<div class="card">
    <div class="container-fliud"  >
        <div class="wrapper row">

            <div class="preview col-md-6">


                <ul class="preview-thumbnail nav nav-tabs">
                    <li class="active"><img src="{{url('files/photo/'.$product->image)}}" ></a></li>

                </ul>

            </div>

            <div class="details col-md-6">
                <h3 class="product-title">{{$product->name}}</h3>

                <p class="product-description">{{$product->description}}</p>
                <h4 class="price"> Price:{{$product->price}}</h4>


                <div >
                    <a href="{{route('show.product',$product->id)}}" class="btn btn-sm btn-warning">Buy Now</a>

                </div>
            </div>

    </div>

</div>
</div>
</div>



@endsection

