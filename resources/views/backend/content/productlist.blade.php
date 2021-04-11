@extends('backend.master')
@section('orders')



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Product List
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('product.create')}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="give products name" >

                </div>
                <div class="mb-3">
                  <label  class="form-label"> Available stock</label>
                  <input type="number" name="availableStock" class="form-control" placeholder="give available stock">
                </div>
                <div class="mb-3">
                    <label  class="form-label"> Price</label>
                    <input type="number" name="price" class="form-control" placeholder="give price">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Description</label>
                    <input type="text" name="description" class="form-control" placeholder="give details">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Image</label>
                    <input  type="file"name="image" class="form-control">
                  </div>



        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit Here</button>

        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- for successfull masage --}}
  @if(session()->has('success'))
  <div class="alert alert-success">
      {{session()->get('success')}}
  </div>
  @endif



  <table class="table ">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Available stock</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Product as $key=>$data )
      <tr class='fw-bolder style="color:black'>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name }}</td>
        <td>{{$data->availableStock}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->description}}</td>
        <td>
            <img style="width:120px;" src="{{url('files/photo/'.$data->image)}}"alt="">
        </td>
        <td>
            <a class="btn btn-primary" href="#">View</a>
            <a class="btn btn-danger" href={{route('product.delete',$data['id'])}}>Delete</a>
            <a class="btn btn-warning" href="#">Edit</a>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
  {{$Product->links()}}
@endsection

