@extends('backend.master')
@section('orders')

<form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="modal-body">

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category</label>
      <input value="{{$category->category}}" type="string"  class="form-control" name="category" placeholder=" Please enter category">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input value="{{$category->description}}" type="string" class="form-control" name="description" placeholder="Please enter Description">
    </div>





</div>

<div class="modal-footer">

<button type="submit" class="btn btn-primary">Submit here</button>
</div>
</form>

@endsection
