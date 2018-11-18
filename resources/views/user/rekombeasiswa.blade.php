@extends('layouts.appuser')

@section('content')
	<header class="section-header">
		<div class="tbl">
			<div class="tbl-row">
				<div class="tbl-cell">
					<h3>Surat Rekomendasi Beasiswa</h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><a href="/">E-Surat | IF</a></li>
						<li class="active">Surat Rekomendasi Beasiswa</li>
					</ol>
				</div>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-md-12">	
			<div class="box-typical box-typical-padding">					
				<form>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Nama</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Mahasiswa">
						</div>
					</div>
	
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">NRP</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="NRP">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Jenis Beasiswa</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Jenis Beasiswa">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Catatan*</label>
						<div class="col-sm-10">
							<textarea type="Text" class="form-control" id="inputPassword" placeholder="Catatan"></textarea>
							<small>Tambahkan apabila ada keterangan yang harus disertakan dalam surat rekomendasi.</small>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
						<div class="col-sm-10">
							<input class="flatpickr form-control" id="flatpickr" type="text" placeholder="Pilih Tanggal"  data-date-format="d-m-Y">
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-rounded btn-inline">Ajukan</button>
					</div>
				</form>
			</div>
		</div>
	</div>				
@endsection