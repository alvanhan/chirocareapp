<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Chiro Care Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('template/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('template/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="main-wrapper">

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        @include('BackEnd.layout.navbar')

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('BackEnd.layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <!-- row -->
            <div class="container-fluid">
                @if (Session::has('error'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: '{{ Session::get('error') }}',
                            });
                        });
                    </script>
                @endif
                @if (Session::has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ Session::get('success') }}',
                            });
                        });
                    </script>
                @endif
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Chiro Care {{ date('Y') }}</p>
            </div>
        </div>
    </div>
    <!-- Required vendors -->
    <script src="{{ asset('template/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('template/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('template/js/custom.min.js') }}"></script>
    <!-- Vectormap -->
    <script src="{{ asset('template/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template/vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('template/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('template/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/gaugeJS/dist/gauge.min.js') }}"></script>
    <!--  flot-chart js -->
    <script src="{{ asset('template/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/vendor/flot/jquery.flot.resize.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('template/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('template/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('template/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('template/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/dashboard/dashboard-1.js') }}"></script>
    @yield('scripts')
</body>

</html>
