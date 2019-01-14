@extends('layouts.appadmin')

@section('content')
<div class="container">
        <div class="box-typical box-typical-padding" style="overflow: auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>RIWAYAT SURAT</h5>
                        </div>
                        <table id="permintaan" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th >No. Surat</th>
                                    <th style="width:10%;">Tanggal Keluar</th>
                                    <th style="width:15%;">Jenis Surat</th>
                                    <th>Pemohon</th>
                                    <th style="width:10%;">Status Surat</th>
                                    <th>Aksi</th>                    
                                </tr>
                            </thead>
                        </tfoot>
                        <tbody>
                            @foreach($status as $item)                                             
                                <tr>
                                    <td>{{$counter++}}.</td>
                                    <td>{{$item->no_surat}}</td>
                                    <td>{{$item->tgl_ttd_surat}}</td>
                                    <td>{{$item->jenissurat->jenis_surat}}</td>
                                    <td>{{$item->nama_pemohon}}</td>
                                    <td>{{$item->status_surat}}</td> 
                                    <td class="text-center">
                                        @if ($item->status_surat =='SELESAI')
                                        <form action="/lihatsuratselesai/{{$item->id_permintaan_surat}}" method="get">
                                            <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> Lihat Surat</button>
                                        </form>
                                            <!--ini tolong didirectin ke tempat cetak suratnya-->
                                        @else
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailTolak{{$item->id_permintaan_surat}}"><i class="fa fa-search"></i> Lihat Permintaan</button>
                                        @endif
                                    </td>
                                </tr>
                                <!--modal buat detail yg ditolak-->
                                <div class="col-md-12">   
                                    <div class="modal fade" id="detailTolak{{$item->id_permintaan_surat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Detail Permintaan Surat</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <li>{{$item->nama_pemohon}}</li> 
                                                    <li>{{$item->jenissurat->jenis_surat}}</li>
                                                    <li>{{$item->created_at}} </li>   
                                                    <hr>                                                       
                                                    @foreach ($item->detailpermintaansurat as $item2)
                                                            <li>{{$item2->atributsurat->nama_atribut}} : {{$item2->rincian}}</li>
                                                    @endforeach                                                  
                                                </div>                                         
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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