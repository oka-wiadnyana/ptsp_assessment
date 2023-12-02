
<?php
use function Laravel\Folio\name;
name('login');

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Meta-Information -->
  <title>Fuzen Admin Panel</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Vendor: Bootstrap 4 Stylesheets  -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" type="text/css">

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/icons.min.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css" type="text/css">

  <!-- Color Scheme -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/color-schemes/color.css" type="text/css" title="color3">
  <link rel="alternate stylesheet" href="{{ asset('assets') }}/css/color-schemes/color1.css" title="color1">
  <link rel="alternate stylesheet" href="{{ asset('assets') }}/css/color-schemes/color2.css" title="color2">
  <link rel="alternate stylesheet" href="{{ asset('assets') }}/css/color-schemes/color4.css" title="color4">
  <link rel="alternate stylesheet" href="{{ asset('assets') }}/css/color-schemes/color5.css" title="color5">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="expand-data panel-data">
  <div class="topbar">
    <div class="logo">
      <h1>
        <a href="#" title="">
          <img src="{{ asset('assets') }}/images/logo1.png" alt="" />
        </a>
      </h1>
    </div>
 
  <div class="panel-content">
    <div class="lgn-wrp grysh">
      <div class="bg-img" style="background-image: url({{ asset('img') }}/login-bg.png);"></div>
      <div class="lgn-innr">
        <div class="widget lgn-frm">
          <div class="frm-tl">
            <img src="https://www.pn-denpasar.go.id/assets/img/logo/pt-denpasar.png" alt="" class="" width="80rem"><h4>PTSP Assessment</h4>
          
          </div>
          <form action="{{ route('auth.attempt_login') }}" method="POST" >
            @csrf
            <div class="row mrg10">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="text" placeholder="User Name" name="username"/>
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="password" placeholder="Password" name="password"/>
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <span class="chbx">
                  <input type="checkbox" id="chk1" name="remember_me"/>
                  <label for="chk1">Remember Me</label>
                </span>
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <button class="green-bg brd-rd5" type="submit">Login Now</button>
              </div>
             
            </div>
          </form>
        </div>
      </div>
      {{-- <footer>
        <span>Developed by {{ env('SATKER') }}</span>
      </footer> --}}
    </div>
    <!-- Login Wrapper -->
  </div>
  <!-- Panel Content -->
 


  <!-- Vendor: Javascripts -->
  <script src="{{ asset('assets') }}/js/jquery.min.js" type="text/javascript"></script>
  <!-- Vendor: Followed by our custom Javascripts -->
  <script src="{{ asset('assets') }}/js/bootstrap.min.js" type="text/javascript"></script>
  {{-- <script src="{{ asset('assets') }}/js/select2.min.js" type="text/javascript"></script> --}}
  <script src="{{ asset('assets') }}/js/slick.min.js" type="text/javascript"></script>

  <!-- Our Website Javascripts -->
  <script src="{{ asset('assets') }}/js/isotope.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/isotope-int.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.counterup.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/waypoints.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/highcharts.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/exporting.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/highcharts-more.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/moment.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.circliful.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/fullcalendar.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.downCount.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.formtowizard.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/form-validator.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/form-validator-lang-en.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/cropbox-min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/ion.rangeSlider.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/jquery.poptrox.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/styleswitcher.js" type="text/javascript"></script>
  <script src="{{ asset('assets') }}/js/main.js" type="text/javascript"></script>
  @include('sweetalert::alert')
</body>

</html>