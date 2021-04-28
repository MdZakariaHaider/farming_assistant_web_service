
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center">

            <strong style="color:blue"><h3>Farming Assistant Web Service </h3></strong>
          </a>


          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Select Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                @foreach ($categories as $category)

              <a class="dropdown-item" href="{{route('products.under.category',$category->id)}}">{{$category->category}}</a>

              @endforeach

            </div>
          </div>
          @auth()
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ucfirst(auth()->user()->name)}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('profile.show')}}">Profile</a>
             <a class="dropdown-item" href="{{route('logout')}}"> Logout</a>


            </div>
          </li>

          @else
          <a href="{{route('login.registration.form')}}" style="color: blue" class="fw-bolder">Login/Registration</a>
      @endauth


      </div>
    </div>
  </header>
