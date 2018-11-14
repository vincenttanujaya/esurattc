<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Surat Informatika ITS</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="css/separate/pages/widgets.min.css">
<link rel="stylesheet" href="css/separate/pages/login.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu control-panel control-panel-compact">
    <div id="app">
            <header class="site-header">
                    <div class="container-fluid">
                        <a href="#" class="site-logo">
                            <img class="hidden-md-down" src="img/logoITSWarna.png" alt="">
                            <img class="hidden-lg-down" src="img/logoITSWarna.png" alt="">
                        </a>
                        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                            <span>toggle menu</span>
                        </button>
                
                        <button class="hamburger hamburger--htla">
                            <span>toggle menu</span>
                        </button>
                        
                        <div class="site-header-content">
                            <div class="site-header-content-in">
                                <div class="site-header-shown">
                                    <div class="dropdown user-menu">
                                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/avatar-2-64.png" alt="">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                            <a class="dropdown-item" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div><!--.site-header-shown-->     
                            </div><!--site-header-content-in-->
                        </div><!--.site-header-content-->
                    </div><!--.container-fluid-->
                </header><!--.site-header-->
                <nav class="side-menu">
                        <ul class="side-menu-list">
                            <li class="red">
                                <a href="#">
                                    <i class="font-icon font-icon-notebook"></i>
                                    <span class="lbl">Permohonan</span>
                                </a>
                            </li>
                            <li class="green">
                                <a href="#">
                                    <i class="font-icon font-icon-zigzag"></i>
                                    <span class="lbl">Riwayat</span>
                                </a>
                            </li>
                            <li class="blue">
                                <a href="#">
                                    <i class="font-icon font-icon-doc"></i>
                                    <span class="lbl">Template</span>
                                </a>
                            </li>
                        </ul>
                    
                        
                    </nav><!--.side-menu-->
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <img src="img/logoits.jpg" height="50">
                <a class="navbar-brand" href="{{ url('/') }}">
                    E-Surat Informatika
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                {{-- </div> --}}
                            {{-- </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <div class="page-content">
                <div class="container-fluid">           
                    @yield('content')
                </div>
        </div>
    </div>
    <script src="js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/lib/popper/popper.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script type="text/javascript" src="js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script>
            $(document).ready(function() {
                $('.panel').each(function () {
                    try {
                        $(this).lobiPanel({
                            sortable: true
                        }).on('dragged.lobiPanel', function(ev, lobiPanel){
                            $('.dahsboard-column').matchHeight();
                        });
                    } catch (err) {}
                });
    
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var dataTable = new google.visualization.DataTable();
                    dataTable.addColumn('string', 'Day');
                    dataTable.addColumn('number', 'Values');
                    // A column for custom tooltip content
                    dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
                    dataTable.addRows([
                        ['MON',  130, ' '],
                        ['TUE',  130, '130'],
                        ['WED',  180, '180'],
                        ['THU',  175, '175'],
                        ['FRI',  200, '200'],
                        ['SAT',  170, '170'],
                        ['SUN',  250, '250'],
                        ['MON',  220, '220'],
                        ['TUE',  220, ' ']
                    ]);
    
                    var options = {
                        height: 314,
                        legend: 'none',
                        areaOpacity: 0.18,
                        axisTitlesPosition: 'out',
                        hAxis: {
                            title: '',
                            textStyle: {
                                color: '#fff',
                                fontName: 'Proxima Nova',
                                fontSize: 11,
                                bold: true,
                                italic: false
                            },
                            textPosition: 'out'
                        },
                        vAxis: {
                            minValue: 0,
                            textPosition: 'out',
                            textStyle: {
                                color: '#fff',
                                fontName: 'Proxima Nova',
                                fontSize: 11,
                                bold: true,
                                italic: false
                            },
                            baselineColor: '#16b4fc',
                            ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
                            gridlines: {
                                color: '#1ba0fc',
                                count: 15
                            }
                        },
                        lineWidth: 2,
                        colors: ['#fff'],
                        curveType: 'function',
                        pointSize: 5,
                        pointShapeType: 'circle',
                        pointFillColor: '#f00',
                        backgroundColor: {
                            fill: '#008ffb',
                            strokeWidth: 0,
                        },
                        chartArea:{
                            left:0,
                            top:0,
                            width:'100%',
                            height:'100%'
                        },
                        fontSize: 11,
                        fontName: 'Proxima Nova',
                        tooltip: {
                            trigger: 'selection',
                            isHtml: true
                        }
                    };
    
                    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                    chart.draw(dataTable, options);
                }
                $(window).resize(function(){
                    drawChart();
                    setTimeout(function(){
                    }, 1000);
                });
            });
        </script>
        
    <script src="js/app.js"></script> 
</body>
</html>
