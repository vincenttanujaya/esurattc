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
                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> Lihat Surat</button>
                                            <!--ini tolong didirectin ke tempat cetak suratnya-->
                                        @else
                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-search"></i> Lihat Permintaan</button>
                                        @endif
                                    </td>
                                </tr>
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