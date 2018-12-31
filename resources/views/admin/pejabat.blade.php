@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="box-typical box-typical-padding" style="overflow: auto;">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-left">
                        <h5>TAMBAH PEJABAT</h5>
                    </div>
                    <form action="{{url('/tambahpejabat')}}" method="POST")>
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="nama">Nama Pejabat</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pejabat" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nip">NIP</label>
                                    <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan" required>
                                </fieldset>
                            </div>  
                        </div><!--.row-->		
                        <div class="row text-right">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-rounded btn-inline">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="box-typical box-typical-padding" style="overflow: auto;">
		<div class="row">
			<div class="col-md-12">
                <div class="text-left">
                    <h5>DAFTAR PEJABAT</h5>
                </div>
				<table id="pejabat" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
					<thead>
					    <tr>
                            <th>No.</th>
					    	<th>Nama Pejabat</th>
					    	<th>NIP</th>
					    	<th>Jabatan</th>
					    	<th>Keterangan</th>                        
					    </tr>
					</thead>
					<tfoot>
					    <tr>
                            <th>No.</th>
					    	<th>Nama Pejabat</th>
					    	<th>NIP</th>
					    	<th>Jabatan</th>
					    	<th>Keterangan</th>                        
					    </tr>
					</tfoot>
					<tbody>
                        @foreach($pejabat as $item)                                             
					        <tr>
                                <td>{{$counter++}}.</td>
					        	<td>{{$item->nama_pejabat}}</td>
					        	<td>{{$item->nip_pejabat}}</td>
                                <td>{{$item->jabatan}}</td> 
                                <td>
                                    <button type="button" class="btn btn-inline btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{$item->id_pejabat}}"><i class="fa fa-edit"></i>
                                    <button type="submit" class="btn btn-inline btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$item->id_pejabat}}"><i class="font-icon-trash"></i></button>                                 
                                </td>                               
                            </tr>
                        <!--modal buat edit-->
                        <div class="col-md-12">   
                            <div class="modal fade" id="editModal{{$item->id_pejabat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Ubah Pejabat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{url('/editpejabat/'.$item->id_pejabat)}}" method="POST")> 
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="col-lg-12">
                                                        <fieldset class="form-group">
                                                            <label class="form-label" for="nip">Nama Pejabat</label>
                                                            <input type="text" name="nama" class="form-control" id="nip" placeholder="Nama Pejabat" value="{{$item->nama_pejabat}}" required>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12">
                                                       <fieldset class="form-group">
                                                           <label class="form-label" for="nip">NIP Pejabat</label>
                                                           <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP" value="{{$item->nip_pejabat}}" required>
                                                       </fieldset>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <fieldset class="form-group">
                                                            <label class="form-label" for="nip">Jabatan</label>
                                                            <input type="text" name="jabatan" class="form-control" id="nip" placeholder="Jabatan" value="{{$item->jabatan}}" required>
                                                        </fieldset>
                                                    </div>
                                                </div>                                           
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </div>
                                            </form> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--modal buat delete-->
                        <div class="col-md-12">   
                            <div class="modal fade" id="deleteModal{{$item->id_pejabat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Hapus Pejabat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p> Apakah anda yakin ingin menghapus data? </p>
                                            </div>
                                            <form action="{{url('/deletepejabat/'.$item->id_pejabat)}}" method="POST")> 
                                                @csrf                                           
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div> 
                                            </form>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
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
            $('#pejabat').DataTable({
            });
        });
    </script>
@endsection

