@extends('layouts.appuser')

@section('content')
	<header class="section-header">
		<div class="tbl">
			<div class="tbl-row">
				<div class="tbl-cell">
					<h3>Surat Keterangan Aktif Mahasiswa</h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><a href="/">E-Surat | IF</a></li>
						<li class="active">Surat Keterangan AKtif Mahasiswa</li>
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
							<input type="Text" class="form-control" id="inputPassword" placeholder="NRP Mahasiswa">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Tempat, Tanggal Lahir</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword" placeholder="Tempat, Tanggal Lahir">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Alamat</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Alamat">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Nama Orang Tua/Wali</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Orang Tua/Wali">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Pekerjaan</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Pekerjaan">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Alamat Orang Tua/Wali</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Alamat Orang Tua/Wali">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Keperluan</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Keperluan">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
						<div class="col-sm-10">
							<input class="flatpickr form-control" id="flatpickr" type="text" placeholder="Select Date.."  data-date-format="d-m-Y">
						</div>
					</div>
					<div class="row text-right">
						<div class="col-md-12">
							<button type="button" class="btn btn-rounded btn-inline">Ajukan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>				
@endsection