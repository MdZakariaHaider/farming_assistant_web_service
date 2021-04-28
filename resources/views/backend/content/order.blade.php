@extends('backend.master')
@section('orders')


<table class="table">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Product Id</th>
        <th scope="col">User Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Status</th>
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
            <td>{{$data->availableStock}}</td>
            <td>
                <button type="button" class="btn btn-outline-success">Approve</button>
                <button type="button" class="btn btn-outline-danger">Reject</button>

            </td>

          </tr>
          @endforeach



    </tbody>
  </table>




@endsection
