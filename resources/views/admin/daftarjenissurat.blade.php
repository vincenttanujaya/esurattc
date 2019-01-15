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
                            <th>Status Jenis Surat</th>     
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
                                @if ( $item->tampil == '1' )
                                    Aktif
                                @else
                                    Tidak Aktif
                                @endif
                            </td>     
                            <td>
                                <form action="/lihatform/{{$item->id_jenis_surat}}" method="get">
                                    <button type="submit" class="btn btn-inline btn-sm"><i class="fa fa-search"></i> Lihat</button>
                                </form>
                                <form action="/editjenissurat/{{$item->id_jenis_surat}}" method="get">
                                    <button type="submit" class="btn btn-inline btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                </form>
                                <form action="/ubahkeaktifan/{{$item->id_jenis_surat}}" method="get">
                                    @if ( $item->tampil == '1' )
                                        <button type="submit" class="btn btn-inline btn-danger btn-sm"data-toggle="modal" data-target="#deleteModal"></i>Non-Aktifkan</button>
                                    @else
                                        <button type="submit" class="btn btn-inline btn-success btn-sm"data-toggle="modal" data-target="#deleteModal"></i>Aktifkan</button>
                                    @endif
                                </form>
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

