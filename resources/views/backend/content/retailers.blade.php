@extends('backend.master')
@section('orders')


<h1>Whole seller</h1>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Retailers list
  </button> --}}

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
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Contacts</th>
        {{-- <th scope="col">Action</th> --}}
      </tr>
    </thead>
    <tbody>



        <tbody>
            @foreach ($retailer as $key=>$data )


          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->contact}}</td>
            <td>
                {{-- <a class="btn btn-primary" href="#">View</a> --}}
                {{-- <a class="btn btn-danger" href={{route('retailer.delete',$data['id'])}}>Delete</a> --}}
                {{-- <a class="btn btn-success" href="{{route('retailer.edit',$data->id)}}">Edit</a> --}}

            </td>
          </tr>
          @endforeach

        </tbody>





  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">retailers</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('retailer.create')}}">
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" required class="form-control" name="name" placeholder="Please enter name">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="string" required class="form-control" name="email" placeholder="Please enter name">

                  </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Address</label>
                  <input type="text" required class="form-control" name="address" placeholder="Please enter address">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contact</label>
                    <input type="number" required class="form-control" name="contacts" placeholder="Please enter contacts">
                </div>




{{--
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit here</button>
        </div> --}}
    </form>
      </div>
    </div>
  </div>
  {{$retailer->links()}}
@endsection
