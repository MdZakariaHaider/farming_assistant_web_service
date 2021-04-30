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
                    <input type="number" required name="land" class="form-control" placeholder="Please enter land Area">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Product</label>
                    <input type="text" required name="product" class="form-control" placeholder="Please enter Product name">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Investment Amount</label>
                    <input type="text" required name="investment" class="form-control" placeholder="Please enter Investment Amount">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Rate/kg</label>
                    <input type="text" required name="c_rate" class="form-control" placeholder="Please enter Rate">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Crop Quantity</label>
                    <input type="number"  name="c_quantity" class="form-control" placeholder="It will generate automatically">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Recieved Crop</label>
                    <input type="number"  name="r_crop" class="form-control" placeholder="Admin will fill this">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Due</label>
                    <input type="number"  name="dew" class="form-control" placeholder="It will generate automatically">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label"> Delivery Date</label>
                    <input type="date" required name="d_date" class="form-control" placeholder="Please enter Delivery Date">
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
        <th scope="col">Investment Amount</th>
        <th scope="col">Rate/kg</th>
        <th scope="col"> Crop Quantity</th>
        <th scope="col">Recieved Crop</th>
        <th scope="col">Due</th>
        <th scope="col">Delivery Date</th>
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
        <td>{{$data->c_rate}}</td>
        <td>{{$data->investment/$data->c_rate}}</td>
        <td>{{$data->r_crop}}</td>
        <td>{{$data->c_quantity-$data->r_crop}}</td>
        <td>{{$data->d_date}}</td>

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
