
@extends('backend.master')
@section('orders')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Agent List
  </button>
  <table class="table">
    <thead >
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile Number</th>
      </tr>
    </thead>
    <tbody>


            @foreach ($agents as $data )
          <tr>
            <th scope="row">1</th>
            <td>{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->mobileNo}}</td>
          </tr>
          @endforeach



    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form method="post" action="{{route('agent.create')}}">
                @csrf

        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="name" class="form-control" name="name" placeholder="write name">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Address</label>
                  <input type="string" class="form-control" name="address" placeholder="give address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile No</label>
                    <input type="string" class="form-control" name="mobileNo" placeholder="give mobile no">
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
