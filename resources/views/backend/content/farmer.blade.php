@extends('backend.master')
@section('orders')


<h1>Farmers</h1>
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
        <form method="post" action="{{route('farmer.create')}}" >
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" required class="form-control" name="name" placeholder="Please enter farmer name" >

                </div>
                <div class="mb-3">
                  <label  class="form-label"> Address</label>
                  <input type="text" required name="address" class="form-control" placeholder="Please enter farmer address">
                </div>
                <div class="mb-3">
                    <label  class="form-label"> Contacts</label>
                    <input type="number" required name="contacts" class="form-control" placeholder="Please enter mobile no">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Land area</label>
                    <input type="number" required name="landArea" class="form-control" placeholder="Please enter area">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> NidNo</label>
                    <input type="number" required name="nid" class="form-control" placeholder="Please enter nid no">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Crops</label>
                    <input type="text" required name="crop" class="form-control" placeholder="Please enter crop name">
                  </div>

                  {{-- For drop down relation db --}}



                  <div class="form-group">
                    <label for="exampleInputDescription">Agent Name</label>
                    <select name="agent_id" id="" type="text" class="form-control">
                        @foreach ($agent as $data)

                        <option value="{{$data->id}}"> {{$data->name}} </option>

                        @endforeach

                    </select>

                </div>




        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Submit here</button>

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


  <table class="table">
    <thead>
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Contacts</th>
        <th scope="col">Land Area</th>
        <th scope="col">Nid No</th>
        <th scope="col">Crops</th>
        <th scope="col">Agent Name</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($farmer as $key=>$data )
      <tr class='fw-bolder style="color:black'>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name }}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->contacts}}</td>
        <td>{{$data->landArea}}</td>
        <td>{{$data->nid}}</td>
        <td>{{$data->crop}}</td>
        <td>{{$data->farmer_agent->name}}</td>

        <td>
            {{-- <a class="btn btn-primary" href="#">View</a> --}}
            <a class="btn btn-danger" href={{route('farmer.delete',$data['id'])}}>Delete</a>
            <a class="btn btn-success" href="{{route('farmer.edit',$data->id)}}">Edit</a>
        </td>

      </tr>
      @endforeach


    </tbody>
  </table>
  {{$farmer->links()}}
@endsection

