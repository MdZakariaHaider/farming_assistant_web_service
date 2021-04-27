@extends('backend.master')
@section('orders')


<form method="post" action="{{route('retailer.update',$retailer->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="modal-body">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input value="{{$retailer->name}}" type="name"  class="form-control" name="name" placeholder="Please enter name">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input value="{{$retailer->address}}" type="text"  class="form-control" name="address" placeholder="Please enter address">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contacts</label>
            <input value="{{$retailer->contacts}}" type="number"  class="form-control" name="contacts" placeholder="Please enter contacts">
        </div>





<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Submit here</button>
</div>
</form>

@endsection
