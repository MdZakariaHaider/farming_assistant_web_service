@extends('backend.master')
@section('orders')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Crops List
  </button>

   {{-- for successfull masage --}}
   @if(session()->has('success'))
   <div class="alert alert-success">
       {{session()->get('success')}}
   </div>
   @endif


  <table class="table">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Quantity</th>
        <th scope="col">Availability</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
            @foreach ($crops as $key=>$data )


          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->availability}}</td>
            <td>
                <a class="btn btn-primary" href="#">View</a>
                <a class="btn btn-danger" href={{route('crop.delete',$data['id'])}}>Delete</a>
                <a class="btn btn-success" href="{{route('crop.edit',$data->id)}}">Edit</a>
            </td>
          </tr>
          @endforeach



    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crop</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('crop.create')}}">
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" required class="form-control" name="name" placeholder="Please enter name">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <input type="text" required class="form-control" name="description" placeholder="Please enter details">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quantity</label>
                    <input type="number" required class="form-control" name="quantity" placeholder="Please enter quantity">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Availability</label>
                    <input type="date" required class="form-control" name="availability" placeholder="give details">
                  </div>



        </div>

        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit here</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  {{$crops->links()}}
@endsection
