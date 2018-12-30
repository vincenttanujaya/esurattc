@extends('layouts.appadmin')

@section('content')
<div class="box-typical box-typical-padding">
    <h4>Proses Permohonan Surat<h4>
    <form action="/cetaksurat" method="POST" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <label class="form-label">Nomor Surat</label>
                <fieldset class="form-group">
                    <input type="text" class="form-control" id="exampleInput" placeholder="Nomor Surat" name="nomorsurat" required>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <label class="form-label">Tanggal TTD Surat</label>
                <fieldset class="form-group">
                    <input type="text" class="form-control" id="exampleInput" placeholder="Tanggal Tanda Tangan" name="tglttd" required>
                </fieldset>
            </div>
        </div>
        @for ($i = 0; $i < $count; $i++)
            <div class="row">
                <div class="col-lg-4">
                    <label class="form-label">{{$detailsurat->atributsurat[$i]->nama_atribut}}</label>
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="exampleInput" placeholder="Nama Surat" name="isi[]" value="{{$detailsurat->detailpermintaansurat[$i]->rincian}}">
                        <input name="idattr[]" type="hidden" value="{{$detailsurat->detailpermintaansurat[$i]->id_dps}}">
                        <input name="slugg[]" type="hidden" value="!{{$detailsurat->atributsurat[$i]->slug}}">
                    </fieldset>
                </div>
            </div>
        @endfor
        
        <div class="row">
            <div class="col-lg-4">
                <button type="submit" name="id_permintaan" value="{{$detailsurat->id_permintaan_surat}}" class="btn btn-inline">Cetak Surat</button>
            </div>
        </div>
    </form>
    <form action="/lihatjenissurat" method="POST" id="myForm2" target="_blank">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <input id="sembunyi" name="template2" type="hidden" value="">
                <button type="button" onclick="lihatForm()" name="templ" value="" class="btn btn-inline" id="tombolcek">Lihat PDF</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('dtable')
@endsection

