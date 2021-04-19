
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center">

            <strong style="color:blue"><h3>Farming Assistant Web Service </h3></strong>
          </a>



          @auth()
          <span class="fw-bolder" style="color:blue;"> <h1>{{auth()->user()->name}}</h1></span> <a href="{{route('logout')}}"> Logout</a>
      @else
          <a href="{{route('login.registration.form')}}" style="color: blue" class="fw-bolder">Login/Registration</a>
      @endauth


      </div>
    </div>
  </header>
