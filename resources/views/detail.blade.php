
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>E-Surat Informatika ITS</title>

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
<link rel="stylesheet" href="css/separate/pages/login.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body style="background-color:#023880">
    <nav class="navbar fixed-top navbar-light" style="background-color:#023880">
        <a class="navbar-brand" href="#">
            <img src="/img/logoITSPutih.png" height="35" class="d-inline-block align-top" alt="">
        </a>
        <a class="nav-link" href="/carisurat" style="color:white;"><b>Daftar Permohonan</b></a>
    </nav>
    <div class="page-center" >
        <div class="page-center-in" >
            <div class="container-fluid" >
                <form  class="sign-box" action="/tambahpermohonan" method="post" style="background-color:#023880;border: 0;">
                    @csrf
                    <br><br>
                    <div class="text-center">
                        <img src="img/logo-surat.png" style="width: 50%">
                    </div>
                    <br>
                    <h6 class="m-t-sm with-border" style="color:white"><b>Informasi Pemohon</b></h6>
				    <input type="hidden" name="jenissurat" value="{{$jenissurat->id_jenis_surat}}">
                    <div class="form-group">
                        <small style="color:white">Tanggal Butuh Surat</small>
                    <input type="date"class="flatpickr form-control" id="flatpickr" placeholder="Tanggal Butuh Surat" name="tglbutuh" value="{{$tanggalbutuh}}" required/>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Pemohon" name="nama_p" value="{{$nama}}" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NRP Pemohon" name="nrp_p" value="{{$nrp}}" required/>
                    </div>
                    <h6 class="m-t-sm with-border" style="color:white"><b>Detail Surat</b></h6>
                    @foreach ($atribut as $item)
						<div class="form-group">
								<input type="hidden" class="form-control" value="{{$item->id_atribut}}" name="idatr[]">
								<input type="Text" class="form-control" name="valatr[]" placeholder="{{$item->atributsurat->nama_atribut}}" required>
						</div>
                    @endforeach
                    <h6 class="m-t-sm with-border" style="color:white"><b>Informasi Tambahan</b></h6>    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Catatan" name="catatan"/>
                    </div>
                    <button type="submit" class="btn btn-rounded" style="background-color:#f9bc0c; color: #423204;">Lanjutkan</button>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->

<script src="js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="js/lib/popper/popper.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
    <script type="text/javascript" src="js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="js/app.js"></script>
</body>
</html>