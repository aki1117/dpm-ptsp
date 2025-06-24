<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/auth/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/auth/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('styles')
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('assets/website/images/logo.png') }}" alt="logo" style="height: 70px;" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/auth/images/logo-mini.svg') }}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <!-- <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <div class="nav-profile-img">
                <img src="{{ asset('assets/auth/images/faces/face1.jpg') }}" alt="image">
                <span class="availability-status online"></span>
              </div> -->
              <div class="nav-profile-text">
                <p class="mb-1 text-black">{{Auth::user()->name}}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
          </li>



          <li class="nav-item nav-logout d-none d-lg-block">
            <form method="post" id="logout-form" action="{{ route('logout') }}">
              @csrf
              <a id="logout-button" class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </form>

          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.dashboard')}}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Berita</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create')}}">Buat berita</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index')}}">List berita</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Aduan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('aduan.index')}}">Lihat Aduan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('aduan.recap')}}">Rekap Aduan</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#standar-list" aria-expanded="false" aria-controls="#standar-list">
              <span class="menu-title">Standar Prosedur</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="standar-list">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('SP.index')}}">Lihat Standar Prosedur</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('SP.create')}}">Upload Standar Prosedur</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registerlist')}}">
              <span class="menu-title">List admin</span>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">
              <span class="menu-title">Register</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>

      @yield('content')

      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com
            2021</span>
          
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assets/auth/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/auth/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/auth/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/auth/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/auth/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/auth/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{ asset('assets/auth/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/auth/js/todolist.js') }}"></script>
  <!-- End custom js for this page -->
  @yield('scripts')
  <script>
    $(document).ready(function() {
      $('#logout-button').click(function() {
        $('#logout-form').submit();
      })
    })
  </script>

  <script>
    @if(Session::has('success'))
    Swal.fire({
      title: "Good job!",
      text: "{{ Session::get('alert-success') }}",
      icon: "success"
    });
    @endif
    @if(Session::has('alert-update'))
    Swal.fire({
      title: "Update",
      text: "{{ Session::get('alert-update') }}",
      icon: "info"
    });
    @endif
    @if(Session::has('alert-danger'))
    Swal.fire({
      title: "Error",
      text: "{{ Session::get('alert-danger') }}",
      icon: "error"
    });
    @endif
  </script>

  <script>
    $(document).ready(function() {
      $('.DisplayLapor').click(function() {
        e.preventDefault();
        Swal.fire({
          title: "The Internet?",
          text: "That thing is still around?",
          icon: "question"
        });
      })
    })
  </script>

  <script>
    $(document).on('click', 'delete', function(e) {
      e.preventDefault();
      var link = $(this).attr("href");
      Swal.fire({
        title: "The Internet?",
        text: "That thing is still around?",
        icon: "question"
      });
    });
  </script>
</body>

</html>