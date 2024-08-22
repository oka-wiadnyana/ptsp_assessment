<?php
use App\Models\Officer;
use function Laravel\Folio\name;
use Illuminate\View\View;

use function Laravel\Folio\render;

name('/');

render(function (View $view, Officer $officers) {
    return $view->with('officers', $officers->where('active', 'true')->get());
});

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Ekaplus</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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

<body class=""
    style="height: 100vh;background-image: url({{ asset('img') }}/login-bg.png);background-size: cover">

    <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100%;">
        <div class="p-3 col-md-8 mx-2 mx-md-0"style=" background-color: white; border-radius: 1rem">
            <div class="col justify-content-center">

                <div class="col text-center">
                    <img src="https://www.pn-denpasar.go.id/assets/img/logo/pt-denpasar.png" alt=""
                        class="" width="80rem">

                </div>
                <div class="col text-center">

                    <h4 style="font-size: 3rem; font-weight: bold; font-family: 'Poppins';">Aplikasi EkaPlus
                    </h4>

                </div>


            </div>
            <div class="col d-md-flex mt-5">
                <div class="col text-center">
                    <a href="{{ url('ptsp') }}">
                        <img src="{{ asset('img') }}/evaluation.png" alt="" class="img-fluid"
                            style="width: 10rem;height: 10rem">
                        <p style="font-family: 'Poppins'; font-size: 1rem; font-weight: bold">Reviu
                            Petugas PTSP</p>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{ url('satpam') }}">

                        <img src="{{ asset('img') }}/security-audit.png" alt="" class="img-fluid"
                            style="width: 10rem;height: 10rem">
                        <p style="font-family: 'Poppins'; font-size: 1rem; font-weight: bold">Reviu
                            Petugas keamanan</p>
                    </a>
                </div>
            </div>
        </div>
    </div>









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
