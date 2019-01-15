
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
<link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
<link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
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
        <a class="nav-link" href="/" style="color:white;"><b>Ajukan Permohonan</b></a>
    </nav>
    <br><br><br>
    <div class="box-typical box-typical-padding" style="overflow: auto; background-color:#023880; border:0; color:white">
            <div class="row">
                <div class="col-md-12">
                    <table id="example" class="display table table-striped table-bordered" 	cellspacing="0" width="100%" style="color:black;">
                        <thead>
                        <tr>
                            <th>Jenis Surat</th>
                            <th>Nama Pemohon</th>
                            <th>NRP Pemohon</th>
                            <th>Status</th>
                            <th>Tanggal Pemohonan Surat</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID Surat</th>
                            <th>Nama Pemohon</th>
                            <th>NRP Pemohon</th>						
                            <th>Status</th>
                            <th>Tanggal Pemohonan Surat</th>
                            
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($permintaansurat as $item)
                            <tr>
                                <td>{{$item->jenissurat->jenis_surat}}</td>
                                <td>{{$item->nama_pemohon}}</td>
                                <td>{{$item->nrp_pemohon}}</td>
                                <td>{{$item->status_surat}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach										
                        </tbody>
                    </table>			
                </div>
            </div>
        </div>

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
<script src="js/lib/datatables-net/datatables.min.js"></script>
<script>
		$(function() {
			$('#example').DataTable({
				responsive: true,
                "order": [[ 2, "desc" ]]
			});
		});
</script>
</body>
</html>