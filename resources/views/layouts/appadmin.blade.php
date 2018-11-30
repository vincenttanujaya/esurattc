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
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="css/separate/vendor/sweet-alert-animations.min.css">
    >

    </head>
    <body class="with-side-menu wet-aspalt-theme">
    
        <header class="site-header">
            <div class="container-fluid">
                <a href="#" class="site-logo">
                    <img class="hidden-md-down" src="img/logoITSPutih.png" alt="">
                    <img class="hidden-lg-down" src="img/IF.gif" alt="">
                </a>
                <button class="hamburger hamburger--htla">
                    <span>toggle menu</span>
                </button>
                <div class="site-header-content">
                    <div class="site-header-content-in text-center">
                        <div class="site-header-shown">
                            
                            <div class="dropdown user-menu">
                                <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/avatar-2-64.png" alt="">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                    <a class="dropdown-item"><span class="font-icon glyphicon glyphicon-user"></span>{{ Auth::user()->name }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div><!--.site-header-shown-->
                        <h5 class="text-center" style="color:white">E-SURAT INFORMATIKA ITS</h5>
                    </div><!--site-header-content-in-->
                </div><!--.site-header-content-->
            </div><!--.container-fluid-->
        </header><!--.site-header-->
    
        <div class="mobile-menu-left-overlay"></div>
        <nav class="side-menu">
            <ul class="side-menu-list">
                <li class="grey">
                    <a href="#">
                        <i class="font-icon font-icon-notebook"></i>
                        <span class="lbl">Permohonan</span>
                    </a>
                </li>
                <li class="grey">
                    <a href="#">
                        <i class="font-icon font-icon-zigzag"></i>
                        <span class="lbl">Riwayat</span>
                    </a>
                </li>
                <li class="grey">
                    <a href="#">
                        <i class="font-icon font-icon-doc"></i>
                        <span class="lbl">Template</span>
                    </a>
                </li>
                <li class="grey">
                    <a href="#">
                        <i class="font-icon font-icon-user"></i>
                        <span class="lbl">Pejabat</span>
                    </a>
                </li>
                <li class="grey">
                    <a href="#">
                        <i class="font-icon font-icon-edit"></i>
                        <span class="lbl">Atribut Surat</span>
                    </a>
                </li>
            </ul>
        </nav><!--.side-menu-->
    
        <div class="page-content">
                <div class="container-fluid">           
                    @yield('content')
                </div>
        </div><!--.page-content-->
    
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
                try {
                    $('.panel').lobiPanel({
                        sortable: true
                    }).on('dragged.lobiPanel', function(ev, lobiPanel){
                        $('.dahsboard-column').matchHeight();
                    });
                } catch (err) {}
    
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
                            },
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
    <script src="js/lib/datatables-net/datatables.min.js"></script>
    @yield('dtable');

    </body>
    </html>