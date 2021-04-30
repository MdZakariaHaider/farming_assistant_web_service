@extends('backend.master')
@section('orders')

<form method="post" action="{{route('investment.update',$investment->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="modal-body">

    <div class="form-group">
        <label for="exampleInputDescription">Category</label>
        <select name="farmer_id" id="" type="text" class="form-control">
            @foreach($farmer as $data)
                    <option @if($investment->farmer_id==$data->id) selected @endif value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

        </select>

    </div>
        <div class="mb-3">
            <label  class="form-label"> land Area</label>
            <input value="{{$investment->land}}"  type="number"  name="land" class="form-control" placeholder="Please enter mobile no">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Product</label>
            <input value="{{$investment->product}}"  type="text"  name="product" class="form-control" placeholder="Please enter area">
          </div>
          <div class="mb-3">
            <label  class="form-label">Investment Need</label>
            <input value="{{$investment->investment}}"  type="text"  name="investment" class="form-control" placeholder="Please enter area">
          </div>
          <div class="mb-3">
            <label  class="form-label">Rate/kg</label>
            <input value="{{$investment->c_rate}}" type="text"  name="c_rate" class="form-control" placeholder="Please enter Rate">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Recieved Crop</label>
            <input  value="{{$investment->r_crop}}" type="number"  name="r_crop" class="form-control" placeholder="">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Delivery Date</label>
            <input  value="{{$investment->d_date}}"   type="date"  name="d_date" class="form-control" placeholder="">
          </div>




</div>
<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Submit here</button>

</div>
</form>


@endsection
