@extends('layouts.appadmin')

@section('content')
<div class="container">
        <div class="box-typical box-typical-padding" style="overflow: auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>PERMINTAAN SURAT</h5>
                        </div>
                        <table id="permintaan" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width:15%;">Jenis Surat</th>
                                    <th>Pemohon</th>
                                    <th>Status Surat</th>
                                    <th>Dibutuhkan</th>
                                    <th>Keterangan</th>                      
                                </tr>
                            </thead>
                        </tfoot>
                        <tbody>
                            @foreach($status as $item)                                             
                                <tr>
                                    <td>{{$counter++}}.</td>
                                    <td>{{$item->jenissurat->jenis_surat}}</td>
                                    <td>{{$item->nama_pemohon}}</td>
                                    <td>{{$item->status_surat}}</td> 
                                    <td>{{$item->tgl_butuh_surat}}</td>
                                    <td>
                                        <button type="button" onclick="window.location.href='../prosessurat/{{$item->id_permintaan_surat}}'" class="btn btn-success btn-sm">Proses</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolakModal{{$item->id_permintaan_surat}}">Tolak</button>
                                        <button type="button" onclick="window.location.href='../suratselesai/{{$item->id_permintaan_surat}}'" class="btn btn-primary btn-sm">Selesai</button>
                                    </td>
                                </tr>
                                <!--modal buat delete-->
                                <div class="col-md-12">   
                                    <div class="modal fade" id="tolakModal{{$item->id_permintaan_surat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Tolak Permohonan Surat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p> Apakah anda yakin ingin menolak permohonan surat ini? </p>
                                                    </div>
                                                    <form action="{{url('/tolaksurat/'.$item->id_permintaan_surat)}}" method="POST")> 
                                                        @csrf                                           
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                                        </div> 
                                                    </form>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            @endforeach
                        </tbody>
                        </div>
                    </div>
                </div>
        </div>

</div>
    
@endsection
@section('dtable')
<script>
        $(function() {
           $('#permintaan').DataTable({
           });
        });
    </script>
@endsection