@extends('backend.master')
@section('orders')



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Farmer List
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Farmer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('farmer.create')}}">
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="give farmer name" >

                </div>
                <div class="mb-3">
                  <label  class="form-label"> Address</label>
                  <input type="text" name="address" class="form-control" placeholder="give farmer address">
                </div>
                <div class="mb-3">
                    <label  class="form-label"> Contacts</label>
                    <input type="number" name="contacts" class="form-control" placeholder="give mobile no">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Land area</label>
                    <input type="number" name="landArea" class="form-control" placeholder="give area">
                  </div>




        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit here</button>

        </div>
    </form>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Contacts</th>
        <th scope="col">Land Area</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($farmer as $data )
      <tr>
        <th scope="row">1</th>
        <td>{{$data->name }}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->contacts}}</td>
        <td>{{$data->landArea}}</td>

      </tr>
      @endforeach


    </tbody>
  </table>
@endsection

