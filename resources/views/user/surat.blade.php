@extends('layouts.appuser')

@section('content')
	<header class="section-header">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h3>Pengajuan Surat</h3>
						<ol class="breadcrumb breadcrumb-simple">
							<li><a href="/">E-Surat | IF</a></li>
							<li class="active">Pengajuan Surat</li>
						</ol>
					</div>
				</div>
			</div>
	</header>
	<div class="box-typical box-typical-padding">      
		<div class="row">
			<div class="col-md-12">
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
						<label for="exampleSelect" class="col-sm-2 form-control-label">Jenis Surat</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
						<div class="col-sm-10">
							<input class="flatpickr form-control" id="flatpickr" type="text" placeholder="Masukkan Tanggal"  data-date-format="d-m-Y">
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
		<div  data-role="dynamic-fields">      
			<div class="row ">
				<div class="col-lg-4">
					<fieldset class="form-group">
						<label class="form-label" for="exampleInput">Nama Mahasiswa </label> 
						<input type="text" class="form-control" id="exampleInput" placeholder="Nama Mahasiswa 	">
					</fieldset>
				</div>
				<div class="col-lg-4">
					<fieldset class="form-group">
						<label class="form-label" for="exampleInputEmail1">NRP</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</fieldset>
				</div>
				<div class="col-lg-4">
					<fieldset class="form-group">
						<label class="form-label" for="exampleInputEmail1">Tambah/Hapus Mahasiswa</label>
						<button type="button" class="btn btn-success"  data-role="add">	Tambah
								</button>
						<button type="button" class="btn btn-danger" id="removebutton"  data-role="remove"	>	Hapus
								</button>
					</fieldset>
				</div>	
			</div><!--.row-->		
		</div>
		<div class="row text-right">
			<div class="col-md-12">
				<button type="button" class="btn btn-rounded btn-inline">Ajukan</button>
			</div>
		</div>  
	</div>          
@endsection
@section('script')
<script type="text/javascript">
	var counter =1;
	$(document).on(
		'click',
		'[data-role="dynamic-fields"] > .row [data-role="remove"]',
		function(e){
			if (counter>1){
				e.preventDefault();
				$(this).closest('.row').remove();
				counter--;
			}		
		}
	);
	$(document).on(
		'click',
		'[data-role="dynamic-fields"] > .row [data-role="add"]',
		function(e){
			e.preventDefault();
			var container = $(this).closest('[data-role="dynamic-fields"]');
			new_field_group = container.children().filter('.row:first-child').clone();
			new_field_group.find('input').each(function(){
				$(this).val('');

			});
			counter++;	
			container.append(new_field_group);		
		}
	);
</script>
@endsection