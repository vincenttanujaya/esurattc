@extends('layouts.appadmin')

@section('content')
<div class="container">
        <div class="box-typical box-typical-padding" style="overflow: auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <h5>PERMINTAAN SURAT</h5>
                        </div>
                        <table id="" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Surat</th>
                                    <th>Pemohon</th>
                                    <th>Status Surat</th>
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
                                <td><button type="button" onclick="window.location.href='../prosessurat/{{$item->id_permintaan_surat}}'" class="btn btn-success btn-sm">Proses</button>
                                        <button type="button" class="btn btn-danger btn-sm mx-2">Tolak</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </div>
                    </div>
                </div>
        </div>

</div>
    
@endsection