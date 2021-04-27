@extends('backend.master')
@section('orders')

<form method="post" action="{{route('agent.update',$agent->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="modal-body">

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input value="{{$agent->name}}" type="name" class="form-control" name="name" placeholder=" Please enter name">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input value="{{$agent->address}}" type="string"  class="form-control" name="address" placeholder="Please enter address">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mobile No</label>
        <input value="{{$agent->mobileNo}}" type="string"  class="form-control" name="mobileNo" placeholder="Please enter mobile no">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input value="{{$agent->email}}" type="string" class="form-control" name="email" placeholder="Please enter email">
      </div>



</div>

<div class="modal-footer">

<button type="submit" class="btn btn-primary">Submit here</button>
</div>
</form>

@endsection
