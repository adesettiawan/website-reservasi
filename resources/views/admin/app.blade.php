<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin - Dijou Coffeebar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  @yield('style')

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="https://d1sag4ddilekf6.azureedge.net/compressed/merchants/6-C2XYG4NHTYTXVX/hero/bf27cc9b009b407daf70b6e4ede3612e_1629547798731923560.jpg"
          class="simple-text logo-mini">

        </a>
        <a href="/admin/dashboard" class="simple-text logo-normal">
          {{ auth()->user()->name }}
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('admin/dashboard')? " active" : "" }}">
            <a href="/admin/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/datapesan')? " active" : "" }}">
            <a href="/admin/datapesan">
              <i class="now-ui-icons users_single-02"></i>
              <p>Data Pesanan</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/datameja')? " active" : "" }}">
            <a href="/admin/datameja">
              <i class="fas fa-border-all"></i>
              <p>Data Meja</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/datamenu')? " active" : "" }}">
            <a href="/admin/datamenu">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Data menu</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/datakategori')? " active" : "" }}">
            <a href="/admin/datakategori">
              <i class="now-ui-icons education_atom"></i>

              <p>Data Kategori</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Admin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>

                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <form method="POST" action="/logout">
                    @csrf
                    <button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>

                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')

      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.instagram.com/dijou.coffee/?hl=id">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>. Dijou Caffe
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  @yield('script')
  @include('sweetalert::alert')

</body>

</html>