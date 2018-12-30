@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="box-typical box-typical-padding" style="overflow: auto;">
		<div class="row">
            <div class="col-md-8">
                    <h5>Daftar Template Surat</h5>
            </div>
            <div class="col-md-4 text-right">
                <button type="button"  class="btn btn-inline btn-success btn-sm" onclick="window.location.href='../jenissurat'"><i class="font-icon-plus"></i> Tambah Jenis Surat</button>
            </div>
			<div class="col-md-12">               
				<table id="atribut" class="display table table-striped table-bordered"  cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Surat</th>
                            <th>Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jenissurat as $item)
                        <tr id>
                            <td>{{$counter++}}</td>                            
                            <td>
                                {{$item->jenis_surat}}
                            </td> 
                            <td>
                                <button type="button" class="btn btn-inline  btn-sm"data-toggle="modal" data-target="#deleteModal"><i class="fa fa-search"></i> Lihat</button>
                                <button type="button" class="btn btn-inline btn-warning btn-sm"data-toggle="modal" data-target="#deleteModal"><i class="fa fa-edit"></i> Edit</button>
                                <button type="button" class="btn btn-inline btn-danger btn-sm"data-toggle="modal" data-target="#deleteModal"><i class="font-icon-trash"></i> Hapus</button>
                            </td>                                                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>	
			</div>
		</div>
	</div>
</div>

@endsection

@section('dtable')
    <script>
        $(function() {
           $('#atribut').DataTable({
           });
        });
    </script>
    <script>
   </script>
@endsection

