@extends('layouts.appadmin')

@section('content')
<div class="box-typical box-typical-padding">
    <div class="col-md-12">
        <h4 class="text-center">Proses Permohonan Surat<h4>
        <div class="row">            
            <div class="col-md-6">
                <h5> Update Permintaan Surat </h5>
                <form action="/cetaksurat" method="POST" id="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Nomor Surat</label>
                            <fieldset class="form-group">
                                <input type="text" class="form-control" id="exampleInput" placeholder="Nomor Surat" value="{{$detailsurat->no_surat}}" name="nomorsurat" required>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Tanggal TTD Surat</label>
                            <fieldset class="form-group">
                                <input type="text" class="form-control" id="exampleInput" placeholder="Tanggal Tanda Tangan"  value="{{$detailsurat->tgl_ttd_surat}}" name="tglttd" required>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @for ($i = 0; $i < $count; $i++)                        
                                <label class="form-label">{{$detailsurat->atributsurat[$i]->nama_atribut}}</label>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Nama Surat" name="isi[]" value="{{$detailsurat->detailpermintaansurat[$i]->rincian}}">
                                    <input name="idattr[]" type="hidden" value="{{$detailsurat->detailpermintaansurat[$i]->id_dps}}">
                                    <input name="slugg[]" type="hidden" value="{{$detailsurat->atributsurat[$i]->slug}}">
                                </fieldset>                            
                             @endfor
                        </div>
                     </div>               
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" name="id_permintaan" value="{{$detailsurat->id_permintaan_surat}}" class="btn btn-inline">Simpan & Cetak Surat</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h5> Update Status Permintaan Surat </h5>
                <form action="{{url('/updatestatus/'.$detailsurat->id_permintaan_surat)}}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Status Surat</label>
                            <fieldset class="form-group">
                                <select class="form-control" name="status">                                
                                    <option value="{{$detailsurat->status_surat}}">{{$detailsurat->status_surat}}</option> 

                                    <option >DITOLAK</option>
                                    <option >DIPROSES</option> 
                                    <option >MENUNGGU TANDA TANGAN</option> 
                                    <option >SELESAI</option>  
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                    <button type="submit"class="btn btn-inline btn-primary">Update Status</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dtable')
@endsection

