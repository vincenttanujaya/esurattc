
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>E-SURAT | IF</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@yield('style')
	<link rel="stylesheet" href="../css/lib/datatables-net/datatables.min.css">
	<link rel="stylesheet" href="../css/separate/vendor/datatables-net.min.css">
	<link rel="stylesheet" href="../css/lib/flatpickr/flatpickr.min.css">
	<link rel="stylesheet" href="../css/separate/vendor/flatpickr.min.css">
    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../css/main.css">
	
</head>
<body class="with-top-menu wet-aspalt-theme">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="../img/logoITSPutih.png" alt="">
                <img class="hidden-lg-down" src="../img/IF.gif" alt="">
                
	        </a>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-typical">
	                   		<span style="color: white;">E-SURAT | IF</span>	                        
	                    </div>
	                    <button type="button" class="burger-right" style="margin-left: 20px;">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
							<div class="dropdown dropdown-typical">
								<a class="dropdown-toggle no-arr" id="dd-header-marketing" data-toggle="dropdown" aria-haspopup="true" >
									<span class="font-icon font-icon-plus"></span>
								   	<span>Ajukan Surat</span>                                
							   </a>
							   <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
								   @foreach ($jenissurat as $item)
								   		<a class="dropdown-item" href="../permohonan/{{$item->id_jenis_surat}}">{{$item->jenis_surat}}</a>
								   @endforeach									
	                                
							   </div>
						   </div> 
	                        <div class="dropdown dropdown-typical">
	                             <a class="dropdown-toggle no-arr" id="dd-header-marketing" data-target="#" href="../carisurat" >
	                             	<span class="font-icon font-icon-search"></span>
	                                <span>Pencarian Surat</span>                                
	                            </a>
	                        </div> 
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>

	<div class="page-content">
	    <div class="container-fluid">
	       @yield('content')
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>

	<script type="text/javascript" src="../js/lib/moment/moment-with-locales.min.js"></script>
	<script type="text/javascript" src="../js/lib/flatpickr/flatpickr.min.js"></script>
	<script src="../js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
	<script src="../js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
	<script src="../js/lib/daterangepicker/daterangepicker.js"></script>
	<script src="../js/lib/prism/prism.js"></script>



	<script>
		$(function() {
			function cb(start, end) {
				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			cb(moment().subtract(29, 'days'), moment());

			$('#daterange').daterangepicker({
				"timePicker": true,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"linkedCalendars": false,
				"autoUpdateInput": false,
				"alwaysShowCalendars": true,
				"showWeekNumbers": true,
				"showDropdowns": true,
				"showISOWeekNumbers": true
			});

			$('#daterange2').daterangepicker();

			$('#daterange3').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});

			$('#daterange').on('show.daterangepicker', function(ev, picker) {
				/*$('.daterangepicker select').selectpicker({
					size: 10
				});*/
			});

			/* ==========================================================================
			 Datepicker
			 ========================================================================== */

			$('.flatpickr').flatpickr();
			$("#flatpickr-disable-range").flatpickr({
				disable: [
					{
						from: "2016-08-16",
						to: "2016-08-19"
					},
					"2016-08-24",
					new Date().fp_incr(30) // 30 days from now
				]
			});
		});
	</script>


<script src="js/app.js"></script>
@yield('script')
</body>
</html>