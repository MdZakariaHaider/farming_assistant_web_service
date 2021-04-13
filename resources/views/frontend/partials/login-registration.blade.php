@extends('frontend.partials.master')
@section('content')


<div class="row" style="padding: 115px">
      {{-- suucess masage --}}

      @if(session()->has('success'))
      <div class="alert alert-success">
          {{session()->get('success')}}
      </div>
      @endif



      {{-- error massage --}}
      @if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{$error}}</div>
      @endforeach
      @endif

    <div class="col-md-6">

        <h1>login here</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <div class="col-md-6">

        <h1>registration here</h1>
       

        <form action="{{route('registration')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" >

              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
</div>

@endsection
