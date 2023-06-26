<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('b_auth') }}/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('b_auth') }}/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('b_auth') }}/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('b_auth') }}/template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
          @yield('content')
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('b_auth') }}/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('b_auth') }}/template/assets/js/off-canvas.js"></script>
    <script src="{{ asset('b_auth') }}/template/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('b_auth') }}/template/assets/js/misc.js"></script>
    <script src="{{ asset('b_auth') }}/template/assets/js/settings.js"></script>
    <script src="{{ asset('b_auth') }}/template/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>