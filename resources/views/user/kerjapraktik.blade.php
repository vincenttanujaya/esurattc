
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>E-Surat | IF</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<link rel="stylesheet" href="css/lib/lobipanel/lobipanel.min.css">
	<link rel="stylesheet" href="css/separate/vendor/lobipanel.min.css">
	<link rel="stylesheet" href="css/lib/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="css/separate/pages/widgets.min.css">

	<link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
	<link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="horizontal-navigation">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-down" src="img/logo-2-mob.png" alt="">
	        </a>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">                                     	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                    	<style type="text/css">
	                    		.dropdown a{
	                    			color: black;
	                    			margin-right: 10px;
	                    		}
	                    		
	                    	</style>
	                        <div class="dropdown dropdown-typical">
	                             <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                             	<span class="font-icon font-icon-plus"></span>
	                                <span>Buat Surat</span>
	                            </a>
	                            <div class="dropdown-menu">
	                                <a class="dropdown-item" href="keteranganaktif">Surat Keterangan Mahasiswa Aktif</a>
	                                <a class="dropdown-item" href="#">Surat Rekomendasi Mengikuti Lomba</a>
	                                <a class="dropdown-item" href="#">Surat Rekomendasi Mendaftar Beasiswa</a>
	                                <a class="dropdown-item" href="#">Surat Permohonan Kerja Praktik</a>
	                                <a class="dropdown-item" href="#">Surat Permohonan Bantuan Dana Lomba/Kegiatan</a>
	                                <a class="dropdown-item" href="#">Surat Permohonan Bantuan Data Untuk Tugas Kuliah</a>
	                                <a class="dropdown-item" href="#">Lain-lain</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                             <a class="dropdown-toggle no-arr" id="dd-header-marketing" data-target="#" href="http://google.com" >
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
	<div class="page-content" >
	    <div class="container-fluid">  
	    	<div class="box-typical box-typical-padding">      
				<div class="row">
					<div class="col-md-12">
						<h3> Surat Permohonan Kerja Praktik </h3>
						<form>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Nama Pengaju</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Pengaju">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">NRP Pengaju</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="NRP Pengaju">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="inputPassword">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Pihak Ditujukannya Surat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputPassword" placeholder="Pihak Ditujukannya Surat">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Instansi</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="Instansi">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Mulai Kerja Praktik</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="Tanggal Mulai Kerja Praktik">
								</div>
							</div>
						</form>
					</div>
				</div>				
			</div>  
			<div class="box-typical box-typical-padding">      
				<div class="row">
					<div class="col-md-12">
						<h4> Nama Mahasiswa </h4>
						
						<form>
							<div class="col-md-4">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">Nama Pengaju</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Pengaju">
								</div>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 form-control-label">NRP Pengaju</label>
								<div class="col-sm-10">
									<input type="Text" class="form-control" id="inputPassword" placeholder="NRP Pengaju">
								</div>
							</div>
							</div>						
							<div class="form-group">
								<button type="button" class="btn btn-rounded btn-inline" style="float: right;">Ajukan</button>
							</div>
						</form>
					</div>
				</div>				
			</div>              
	    </div><!--.container-fluid-->
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
	<script src="js/lib/datatables-net/datatables.min.js"></script>
	<script>
		$(function() {
			$('#example').DataTable();
		});
	</script>


<script src="js/app.js"></script>
</body>
</html>