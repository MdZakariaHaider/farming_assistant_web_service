@extends('backend.master')
@section('orders')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Agent List
  </button>


<table class="table">
    <thead >
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>


            @foreach ($category as $key=>$data )
          <tr class='fw-bolder style="color:black'>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->category}}</td>
            <td>{{$data->description}}</td>


            <td>
                <a class="btn btn-primary" href="#">View</a>
                <a class="btn btn-danger" href={{route('category.delete',$data['id'])}}>Delete</a>
                <a class="btn btn-warning" href="#">Edit</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form method="post" action="{{route('category.create')}}">
                @csrf

        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Category</label>
                  <input type="string" required class="form-control" name="category" placeholder=" Please enter category">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <input type="string" required class="form-control" name="description" placeholder="Please enter Description">
                </div>





        </div>

        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit here</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endsection
