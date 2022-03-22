<nav class="sidebar sidebar-offcanvas " id="sidebar" >

    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center  fixed-top">
      <a class=" brand-log text-decoration-none text-success" href="#"><h1>ADMIN</h1></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>

    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
     

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> More </a></li> -->
            <li class="nav-item"> <a class="nav-link" href="{{ url('createBreakfast') }}"> Create Breakfast </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('createLunch') }}"> Create Lunch </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('createDinner') }}"> Create Dinner</a></li>
            <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li> -->
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/admins') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Admin</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('viewBreakfast') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Breakfast Menu</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('viewLunch') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Lunch Menu</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('viewDinner') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Dinner Menu</span>
        </a>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('foodmenu') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Food Special</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('/') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Client Home</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        {{-- <a class="nav-link" href="pages/charts/chartjs.html"> --}}
          <a class="nav-link" href="{{ url('/reservation') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Reservation</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        {{-- <a class="nav-link" href="pages/charts/chartjs.html"> --}}
          <a class="nav-link" href="{{ url('/orders') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('createchef') }}">
          <span class="menu-icon">
            {{-- <i class="mdi mdi-table-large"></i> --}}
             <img src="/assets/images/Chef.png" width="20" height="20" style="border-radius: 100%">
          </span>
          <span class="menu-title">Chefs</span>
        </a>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/users')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>

          <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li> -->
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  

  