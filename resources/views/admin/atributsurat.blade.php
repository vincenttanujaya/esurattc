@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="box-typical box-typical-padding">
        <h4>Tambah Atribut<h4>
        <form action="/tambahatribut" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="exampleInput" placeholder="Nama Atribut" name="atribut">
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-inline">Tambahkan Atribut</button>
                </div>
            </div>
        </form>
    </div>
    <div class="box-typical box-typical-padding" style="overflow: auto;">
		<div class="row">
			<div class="col-md-12">
                <div class="text-left">
                    <h5>DAFTAR PEJABAT</h5>
                </div>
				<table id="atribut" class="display table table-striped table-bordered"  cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Atribut Surat</th>
                            <th>Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($atributsurat as $item)
                                <tr id="attribut{{$item->id_atribut}}">
                                    <td id="kolom1-{{$item->id_atribut}}">
                                        {{$item->nama_atribut}}
                                    </td> 
                                    <td id="kolom2-{{$item->id_atribut}}">
                                        <button type="button" class="btn btn-inline btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{$item->id_atribut}}" ><i class="fa fa-edit"></i>
                                        <button type="button" class="btn btn-inline btn-danger btn-sm"data-toggle="modal" data-target="#deleteModal{{$item->id_atribut}}"><i class="font-icon-trash"></i></button>
                                    </td>                               
                                </tr>
                                <!--modal buat edit-->
                                <div class="col-md-12">   
                                    <div class="modal fade" id="editModal{{$item->id_atribut}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Ubah Atribut</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('/editatribut/'.$item->id_atribut)}}" method="POST")> 
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="col-lg-12">
                                                                <fieldset class="form-group">
                                                                    <label class="form-label" for="nip">Nama Atribut</label>
                                                                    <input type="text" name="nama" class="form-control" id="nip" placeholder="Nama Atribut" value="{{$item->nama_atribut}}" required>
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
                                    <div class="modal fade" id="deleteModal{{$item->id_atribut}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Hapus Atribut</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p> Apakah anda yakin ingin menghapus data? </p>
                                                    </div>
                                                    <form action="{{url('/deleteatribut/'.$item->id_atribut)}}" method="POST")> 
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
           $('#atribut').DataTable({
           });
        });
    </script>
    <script>
   </script>
@endsection

