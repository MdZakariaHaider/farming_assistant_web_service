
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center">

            <strong style="color:blue"> <h2> Farming Assistant Web Service </h2></strong>
          </a>



          @auth()
          <span style="color:white;">{{auth()->user()->name}}</span> <a href="{{route('logout')}}"> Logout</a>
      @else
          <a href="{{route('login.registration.form')}}" style="color: blue" class="fw-bolder">Login/Registration</a>
      @endauth


      </div>
    </div>
  </header>
