<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title', 'Backend')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/icons/fontawesome/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/chartist.min.css') }}">

    <script type="text/javascript" src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/chartist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/app.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            // Dashboard Sales Chart
            // ------------------------------------------------------------------

            var dataMain = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                ]
            };

            var optionsMain = {
                seriesBarDistance: 10
            };

            var responsiveOptionsMain = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];
            var chart = new Chartist.Bar('.ct-chart-dashboard', dataMain, optionsMain, responsiveOptionsMain);
        });
    </script>
</head>

<body>
<!-- NAVBAR -->
@include('backend.partials._navbar')

<div class="page-container">
    <div class="page-content">
        <!-- SIDEBAR -->
    @include('backend.partials._sidebar')
    <!-- PAGE CONTENT -->
        <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
</div>
</body>
</html>