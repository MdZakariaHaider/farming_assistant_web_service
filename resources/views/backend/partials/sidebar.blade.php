<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-4">
      <ul class="nav flex-column">
        <li class="nav-item p-3">
         <a class="nav-link active text-white" aria-current="page" href="{{ route('dashboard')}}">
            <span data-feather="home"></span>
           Dashboard
          </a>
             </li>
        {{-- <li class="nav-item p-2">
         <a class="nav-link active text-white"  href={{route('admin')}}>
            <span data-feather="at-sign"></span>
            Admin
          </a>
        </li> --}}
           <li class="nav-item p-2">
         <a class="nav-link active text-white" href={{route('Report')}}>
            <span data-feather="truck"></span>
           Report
          </a>
        </li>


        <li class="nav-item p-2">
         <a class="nav-link active text-white" href={{route('agent')}}>
            <span data-feather="users"></span>
            Agent
          </a>
        </li>
        <li class="nav-item p-2">
           <a class="nav-link active text-white" href={{route('farmer')}}>
              <span data-feather="meh"></span>
              Farmer
            </a>
          </li>
        <li class="nav-item p-2">
         <a class="nav-link active text-white" href={{route('crop')}}>
            <span data-feather="truck"></span>
            Crops
          </a>
        </li>
        <li class="nav-item p-2">
            <a class="nav-link active text-white" href={{route('category')}}>
               <span data-feather="users"></span>
              categories
             </a>
           </li>
        <li class="nav-item p-2">
           <a class="nav-link active text-white" href={{route('retailer')}}>
              <span data-feather="users"></span>
              Whole seller
            </a>
          </li>
          <li class="nav-item p-2">
           <a class="nav-link active text-white" href={{route('product')}}>
              <span data-feather="truck"></span>
              Products
            </a>
          </li>
          <li class="nav-item p-2">
           <a class="nav-link active text-white" href={{route('investment')}}>
              <span data-feather="dollar-sign"></span>
             Investment
            </a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active text-white" href={{route('order')}}>
               <span data-feather="gift"></span>
              orders
             </a>
           </li>



      </ul>








    </div>
  </nav>
