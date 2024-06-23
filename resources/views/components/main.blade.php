<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img') }}/logo-text.png">
    <title>{{ env("APP_NAME") }}</title>
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
    
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    @livewireStyles
    @stack('link')
    
</head>

<body class="expand-data panel-data">
    <x-topbar />
    <!-- Topbar -->
    <x-aside />
    <!-- Side Header -->


    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                {{ $slot }}
                
            </div>
            <!-- Filter Items -->
        </div>
    </div>
    <!-- Panel Content -->
    <footer>
        <p>Copyright
            <a href="{{ url('/dashboard') }}" title="">Developed by PT Denpasar</span>
    </footer>

    <!-- Vendor: Javascripts -->
  @stack('script')
  
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
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
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';

            

            //===== ToolTip =====//
            if ($.isFunction($.fn.tooltip)) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    </script>
    @include('sweetalert::alert')
    @livewireScripts
</body>

</html>