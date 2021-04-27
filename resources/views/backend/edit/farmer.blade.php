@extends('backend.master')
@section('orders')


<form method="post" action="{{route('farmer.update',$farmer->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="modal-body">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input value="{{$farmer->name}}" type="text" class="form-control" name="name" placeholder="Please enter farmer name" >

        </div>
        <div class="mb-3">
          <label  class="form-label"> Address</label>
          <input value="{{$farmer->address}}" type="text" name="address" class="form-control" placeholder="Please enter farmer address">
        </div>
        <div class="mb-3">
            <label  class="form-label"> Contacts</label>
            <input value="{{$farmer->contacts}}" type="number" name="contacts" class="form-control" placeholder="Please enter mobile no">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Land area</label>
            <input value="{{$farmer->landArea}}" type="number" name="landArea" class="form-control" placeholder="Please enter area">
          </div>
          <div class="mb-3">
            <label  class="form-label"> NidNo</label>
            <input value="{{$farmer->nid}}" type="number" name="nid" class="form-control" placeholder="Please enter nid no">
          </div>
          <div class="mb-3">
            <label  class="form-label"> Crops</label>
            <input value="{{$farmer->crop}}" type="text" name="crop" class="form-control" placeholder="Please enter crop name">
          </div>

          {{-- For drop down relation db --}}



          <div class="form-group">
            <label for="exampleInputDescription">Agent Name</label>
            <select name="agent_id" id="" type="text" class="form-control">
                @foreach($agent as $data)
                        <option @if($farmer->agent_id==$data->id) selected @endif value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach

            </select>

        </div>




</div>
<div class="modal-footer">

  <button type="submit" class="btn btn-primary">Submit here</button>

</div>
</form>
@endsection
