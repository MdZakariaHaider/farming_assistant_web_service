@extends('backend.master')
@section('orders')




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create investment List
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Investment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{route('investment.create')}}" >
            @csrf
        <div class="modal-body">

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Farmer Name</label>
                  <select name="farmer_id" id="" class="form-control">
                      @foreach ($farmers as $data)


                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  </select>

                </div>
                <div class="mb-3">
                    <label  class="form-label"> land Area</label>
                    <input type="number" required name="land" class="form-control" placeholder="Please enter mobile no">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Product</label>
                    <input type="text" required name="product" class="form-control" placeholder="Please enter area">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Investment Need</label>
                    <input type="text" required name="investment" class="form-control" placeholder="Please enter area">
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
      <tr class="fw-bolder" style="color:black">
        <th scope="col">#</th>
        <th scope="col">Farmer Name</th>
        <th scope="col">Land Area</th>
        <th scope="col">Product</th>
        <th scope="col">Investment Need</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($investment as $key=>$data )
      <tr class='fw-bolder style="color:black'>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->farmer->name}}</td>
        <td>{{$data->land}}</td>
        <td>{{$data->product}}</td>
        <td>{{$data->investment}}</td>
        <td>
            <a class="btn btn-success" href="#">Pending</a>
            <a class="btn btn-danger" href={{route('farmer.delete',$data['id'])}}>Delete</a>
            <a class="btn btn-success" href="{{route('investment.edit',$data->id)}}">Edit</a>
        </td>

      </tr>
      @endforeach


    </tbody>
  </table>



@endsection
