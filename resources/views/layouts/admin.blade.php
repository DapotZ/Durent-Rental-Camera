<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>@yield('title')</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap.min.css') }}">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-social.css') }}">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.css') }}">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="{{ asset('admin/css/fileinput.min.css') }}">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="{{ asset('admin/css/awesome-bootstrap-checkbox.css') }}">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <script type="text/javascript" src="{{ asset('admin/nicEdit.js') }}"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>
</head>

<body>
    @include('admin/includes/header')
    <div class="ts-main-content">
        @include('admin/includes/leftbar')

        @yield('content')


    </div>
    </div>
    </div>

    <!-- Loading Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput.js') }}"></script>
    <script src="{{ asset('admin/js/chartData.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <script>
        window.onload = function() {

                // Line chart from swirlData for dashReport
                var ctx = document.getElementById("dashReport").getContext("2d");
                window.myLine = new Chart(ctx).Line(swirlData, {
                    responsive: true,
                    scaleShowVerticalLines: false,
                    scaleBeginAtZero: true,
                    multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
                });

                // Pie Chart from doughutData
                var doctx = document.getElementById("chart-area3").getContext("2d");
                window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
                    responsive: true
                });

                // Dougnut Chart from doughnutData
                var doctx = document.getElementById("chart-area4").getContext("2d");
                window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
                    responsive: true
                });

            } <
            /body> <
            /html>
