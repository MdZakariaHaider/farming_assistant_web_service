<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard')}}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('admin')}}>
            <span data-feather="at-sign"></span>
            Admin
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href={{route('agent')}}>
            <span data-feather="users"></span>
            Agent
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('farmer')}}>
              <span data-feather="meh"></span>
              Farmer
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('crop')}}>
            <span data-feather="truck"></span>
            Crops
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{route('retailer')}}>
              <span data-feather="users"></span>
              Retailers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{route('product')}}>
              <span data-feather="truck"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{route('investment')}}>
              <span data-feather="dollar-sign"></span>
             Investment
            </a>
          </li>


      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">


      </h6>
      <ul class="nav flex-column mb-2">




      </ul>
    </div>
  </nav>
