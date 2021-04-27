@extends('backend.master')
@section('orders')

<form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="modal-body">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input value="{{$product->name}}" type="text"  class="form-control" name="name" placeholder="Please enter products name" >

        </div>
        <div class="mb-3">
          <label  class="form-label"> Available stock</label>
          <input value="{{$product->availableStock}}" type="number"  name="availableStock" class="form-control" placeholder="Please enter available stock">
        </div>
        <div class="mb-3">
            <label  class="form-label"> Price</label>
            <input value="{{$product->price}}" type="number"  name="price" class="form-control" placeholder="Please enter price">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Description</label>
            <input value="{{$product->descfription}}" type="text"  name="description" class="form-control" placeholder="Please enter description">
          </div>


          <div class="form-group">
            <label for="exampleInputDescription">Category</label>
            <select name="category_id" id="" type="text" class="form-control">
                @foreach($category as $data)
                        <option @if($product->category_id==$data->id) selected @endif value="{{$data->id}}">{{$data->category}}</option>
                        @endforeach

            </select>

        </div>

          <div class="mb-3">
            <label  class="form-label"> Image</label>
            <input  type="file"  name="image" class="form-control">
          </div>





</div>
<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Submit Here</button>

</div>
</form>
@endsection
