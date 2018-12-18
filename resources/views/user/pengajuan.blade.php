@extends('layouts.appuser')
@section('style')
<link rel="stylesheet" href="css/separate/vendor/tags_editor.min.css">
<link rel="stylesheet" href="css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">	
			<div class="box-typical box-typical-padding">
                <h5 class="m-t-sm with-border">Informasi Pemohon</h5>					
				<form>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Nama Pemohon</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="Nama Pemohon">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">NRP Pemohon</label>
						<div class="col-sm-10">
							<input type="Text" class="form-control" id="inputPassword" placeholder="NRP Pemohon">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Tanggal Dibutuhkannya Surat</label>
						<div class="col-sm-10">
							<input class="flatpickr form-control" id="flatpickr" type="text" placeholder="Select Date.." >
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Jenis Surat</label>
						<div class="col-sm-10">
							<select class="form-control">
								@foreach ($jenissurat as $item)
									<option value="{{$item->id_jenis_surat}}">{{$item->jenis_surat}}</option>
								@endforeach
									<option>Lain-lain</option>
							</select>
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
@section('script')
	<script src="js/lib/jquery-tag-editor/jquery.caret.min.js"></script>
	<script src="js/lib/jquery-tag-editor/jquery.tag-editor.min.js"></script>
	<script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="js/lib/select2/select2.full.min.js"></script>

	<script>
		$(function() {
			$('#tags-editor-textarea').tagEditor();
		});
	</script>
@endsection