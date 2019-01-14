
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
<style> 
    input[type=text], input[type=date]{
        margin-left: 30%;
        width: 35%;
    }
    img{
        margin-left: 37%;
    }
    #tombol1{
        margin-left: 45%;
        width: 10%;
    }
    #tombol2{
        margin-left: 45%;
        margin-top: -5px;
        width: 10%;
        color: #423204;
    }
</style>
<body style="background-color: #023880; height: 400px;">

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form>
                    <div class="container">
                        <img src="img/logo-surat.png" style="width: 20%">
                        <br>
                        <div class="form-group">
                            <input id="form1" type="date" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Butuh Surat">
                        </div>
                        <div class="form-group">
                            <input id="fomr2" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Pemohon">
                        </div>
                        <div class="form-group">
                            <input id="fomr3" type="text" class="form-control" id="formGroupExampleInput2" placeholder="NRP Pemohont">
                        </div>
                        <div class="form-group">
                            <input id="fomr4" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Catatan">
                        </div>
                    </div>
                    <div class="dropdown show">
                            <a id="tombol1" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#0150b4; color: #ffffff;">
                            Jenis Surat
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                    </div>
                    <br>
                    <button id="tombol2" type="button" class="btn btn-dark" style="background-color:#f9bc0c;">Lanjutkan</button>
                    </form>
                    {{-- <div class="dropdown show">
                            <a id="tombol1" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#0150b4; color: #ffffff;">
                            Jenis Surat
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                    </div>
                    <br>
                    <button id="tombol2" type="button" class="btn btn-dark" style="background-color:#f9bc0c;">Lanjutkan</button> --}}
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