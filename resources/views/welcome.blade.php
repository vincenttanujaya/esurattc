
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

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
    <div class="page-center" >
        <div class="page-center-in" >
            <div class="container-fluid" >
                <form class="sign-box" style="background-color:#023880;border: 0;">
                    <div class="text-center">
                        <img src="img/logo-surat.png" style="width: 50%">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Tanggal Butuh Surat"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Pemohon"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NRP Pemohon"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Catatan"/>
                     </div>
                     <div class="dropdown show">
                            <a id="tombol1" class="btn btn-rounded dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#0150b4; color: #ffffff;">
                            Jenis Surat
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
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