@extends('backend.master')
@section('orders')


<h1>Orders</h1>
<table class="table">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Product Id</th>
        <th scope="col">User Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product price</th>
        <th scope="col">Quantity</th>

      </tr>
    </thead>
    <tbody>
            @foreach ($booking as $key=>$data )


          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>

            <td>{{$data->product_id}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->product_price}}</td>

            <td>{{$data->quantity}}</td>



          </tr>
          @endforeach



    </tbody>
  </table>




@endsection
