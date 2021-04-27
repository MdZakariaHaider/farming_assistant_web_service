@extends('backend.master')
@section('orders')

<form method="post" action="{{route('crop.update',$crop->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="modal-body">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input value="{{$crop->name}}" type="name"  class="form-control" name="name" placeholder="Please enter name">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input value="{{$crop->description}}" type="text" class="form-control" name="description" placeholder="Please enter details">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <input value="{{$crop->quantity}}" type="number"  class="form-control" name="quantity" placeholder="Please enter quantity">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Availability</label>
                <input value="{{$crop->availability}}" type="date" class="form-control" name="availability" placeholder="give details">
              </div>



    </div>

    <div class="modal-footer">

      <button type="submit" class="btn btn-primary">Submit here</button>
    </div>
</form>
@endsection
