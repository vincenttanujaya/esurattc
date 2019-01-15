@extends('layouts.appuser')

@section('content')
	<header class="section-header">
		<div class="tbl">
			<div class="tbl-row">
				<div class="tbl-cell">
					<h3>Pencarian Surat</h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><a href="/">E-Surat | IF</a></li>
						<li class="active">Pencarian Surat</li>
					</ol>
				</div>
			</div>
		</div>
	</header>
	<div class="box-typical box-typical-padding" style="overflow: auto;">
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>ID Surat</th>
						<th>Tanggal Pemohonan Surat</th>
						<th>Nama Pemohon</th>
						<th>NRP Pemohon</th>
						<th>Status</th>
						
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>ID Surat</th>
						<th>Tanggal Pemohonan Surat</th>
						<th>Nama Pemohon</th>
						<th>NRP Pemohon</th>						
						<th>Status</th>
						
					</tr>
					</tfoot>
					<tbody>
					@foreach ($permintaansurat as $item)
						<tr>
							<td>{{$item->id_permintaan_surat}}</td>
							<td>{{$item->created_at}}</td>
							<td>{{$item->nama_pemohon}}</td>
							<td>{{$item->nrp_pemohon}}</td>
							<td>{{$item->status_surat}}</td>
						</tr>
					@endforeach										
					</tbody>
				</table>			
			</div>
		</div>
	</div>
@endsection
@section('style')
<link rel="stylesheet" href="css/lib/datatables-net/datatables.min.css">
<link rel="stylesheet" href="css/separate/vendor/datatables-net.min.css">
@endsection
@section('script')
<script src="js/lib/datatables-net/datatables.min.js"></script>
<script>
	$(function() {
		$('#example').DataTable({
			"order": [[ 3, "desc" ]]
		});
	});
</script>
<script>
		$(function() {
			$('#example').DataTable({
				responsive: true
			});
		});
	</script>
@endsection