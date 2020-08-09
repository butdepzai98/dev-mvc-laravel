<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gleam Admin</title>

  <base href="{{'/public/' }}">

  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>
<body class="sidebar-mini">
  <div class="container-scroller">
    <!-- Header -->
    @include('admin/layout/header')
    <!-- End Header -->

    <div class="container-fluid page-body-wrapper">
      <!-- Settings Bar -->
      @include('admin/layout/settingbar')
      <!-- End Settings -->

      <!-- Sidebar -->
      @include('admin/layout/sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="content-wrapper">
          {{-- Header Content --}}
          @yield('header-content')
          {{-- Header Content --}}

          <div class="row">
            {{-- Content --}}
            @yield('content')
            {{-- Content --}}
          </div>
        </div>

        <!-- footer -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/misc.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/js/dashboard.js"></script>
  <script src="admin/js/ajax.js"></script>
  <script src="admin/js/modal-demo.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
