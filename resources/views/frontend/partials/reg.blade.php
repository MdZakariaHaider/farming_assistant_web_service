
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>



@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif


<div class="row d-flex align-items-center">
    <h1  class ="text-center" style="; color:rgb(16, 165, 28); padding-top:15px">Farming Assistant Web Service <br> User Login</h1>
    <div class="col-md-5 ">
        <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZmFybXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" class="img-fluid w-100 mx-5" alt="">
    </div>
    <div class="col-md-7">



        <form action="{{route('registration')}}"  method="POST" class="container w-50 p-5 border shadow p-3 mb-5 rounded-3" style="background: linear-gradient(to right, #25df0c 0%, #8ae28f 100%); margin-top:100px">


            @csrf


            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" >

              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input name="address" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your  Address">
                <div id="emailHelp" class="form-text">We'll never share your address with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact</label>
                <input name="contact" required type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter Your Contact">
                <div id="emailHelp" class="form-text">We'll never share your contact with anyone else.</div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" required type="password" class="form-control" id="exampleInputPassword1"placeholder="Enter Your Password">
            </div>

          <div class="text-right">
                                    <a class="forgot-link" href="{{route('login.registration.form')}} ">Already have an account?</a>
                                </div>
            <button class="btn btn-primary fs-5"><b>Sign-up</b></button>

          </form>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>



</div>





