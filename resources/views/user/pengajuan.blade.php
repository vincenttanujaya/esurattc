@extends('layouts.appuser')
@section('style')
<link rel="stylesheet" href="../css/separate/vendor/tags_editor.min.css">
<link rel="stylesheet" href="../css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="../css/separate/vendor/select2.min.css">
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">	
			<form action="{{url('/tambahpermohonan')}}" method="POST">
			@csrf
			<div class="box-typical box-typical-padding">
				<h5 class="m-t-sm with-border">Informasi Pemohon</h5>
				<input type="hidden" name="jenissurat" value="{{$id}}">
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 form-control-label">Nama Pemohon</label>
					<div class="col-sm-10">
						<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Pemohon" name="nama_p">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 form-control-label">NRP Pemohon</label>
					<div class="col-sm-10">
						<input type="Text" class="form-control" id="inputPassword" placeholder="NRP Pemohon" name="nrp_p">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
					<div class="col-sm-10">
						<input class="flatpickr form-control" id="flatpickr" name="tglbutuh" type="text" placeholder="Select Date..">
					</div>
				</div>
			</div>
			<div class="box-typical box-typical-padding">
				<h5 class="m-t-sm with-border">Isi Surat</h5>						
				
					@foreach ($atribut as $item)
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 form-control-label">{{$item->atributsurat->nama_atribut}}</label>
							<div class="col-sm-10">
								<input type="hidden" class="form-control" value="{{$item->id_atribut}}" name="idatr[]">
								<input type="Text" class="form-control" name="valatr[]">
							</div>
						</div>
					@endforeach	
			</div>

			@if ($jenissuratid->komunal=="1")
				<div class="box-typical box-typical-padding">
						<h5 class="m-t-sm ">Peserta</h5>
						<h6 class="m-t-sm with-border">Termasuk Pemohon</h6>						
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-2 form-control-label">Jumlah Peserta</label>
							<div class="col-sm-10">
							  <select onchange="komunal()" class="form-control" id="jumlah">
								@for ($i = 0; $i <= 20; $i++)
							  		<option value="{{$i}}">{{$i}}</option>
								@endfor
							  </select>
							</div>
						</div>
						<div id="peserta">
								
						</div>
								
				</div>
			@endif
				<div class="row text-right">
					<div class="col-md-12">
						<button type="submit" class="btn btn-rounded btn-inline">Ajukan</button>
					</div>
				</div>

			</form>
		</div>
	</div>				
@endsection
@section('script')
	<script src="../js/lib/jquery-tag-editor/jquery.caret.min.js"></script>
	<script src="../js/lib/jquery-tag-editor/jquery.tag-editor.min.js"></script>
	<script src="../js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="../js/lib/select2/select2.full.min.js"></script>

	<script>
		$(function() {
			$('#tags-editor-textarea').tagEditor();
		});
	</script>
	<script>
		function komunal(){
			var jumlahpeserta = document.getElementById('jumlah').value;
			document.getElementById('peserta').innerHTML ="";
			for (var i = 0; i < jumlahpeserta; i++) {
				document.getElementById('peserta').innerHTML  += '<div class="row"><div class="col"><input type="text" class="form-control" placeholder="Nama  ' + (i+1) + '" name="namapeserta[]"></div><div class="col"><input type="text" class="form-control" placeholder="NRP ' + (i+1) + '" name="nrppeserta[]"></div></div>' ;
			}
		}
	</script>
@endsection