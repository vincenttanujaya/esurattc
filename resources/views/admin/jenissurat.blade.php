@extends('layouts.appadmin')

@section('content')
<div class="box-typical box-typical-padding">
    <h4>Tambah Jenis Surat<h4>
    <form action="/tambahjenissurat" method="POST" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <label class="form-label">Jenis Surat</label>
                <fieldset class="form-group">
                    <input type="text" class="form-control" id="exampleInput" placeholder="Nama Surat" name="jenissurat">
                </fieldset>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <label class="form-label">Pejabat</label>
                <select class="form-control" name="pejabat">
                        @foreach ($pejabat as $item)
                            <option value="{{$item->id_pejabat}}">{{$item->nama_pejabat}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-lg-12">
                <label class="form-label">Template Surat</label>
                <div class="summernote-theme-1">
                    <textarea class="summernote" name="template">Hello Summernote</textarea>
                </div>
            </div>
        </div>

        
        <div class="row m-t-lg">
            <div class="col-md-3 col-sm-6"> 
                <label class="form-label">Atribut Yang Dibutuhkan</label>   
                @foreach ($atributsurat as $item) 
                    <div class="checkbox-bird">
                        <input type="checkbox" id="check-bird-{{$item->id_atribut}}" value="{{$item->id_atribut}}" name="checklist[]"/>
                        <label for="check-bird-{{$item->id_atribut}}"> {{$item->nama_atribut}}</label>
                
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <button type="button" onclick="submitForm()" class="btn btn-inline">Tambahkan Jenis Surat</button>
            </div>
        </div>



    </form>
</div>

{{-- <div class="box-typical box-typical-padding">
    <h4>Daftar Atribut<h4>
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
                                <button type="button" class="btn btn-inline btn-warning btn-sm" ><i class="fa fa-edit"></i>
                                <button type="button" class="btn btn-inline btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="font-icon-trash"></i></button>
                            </td>                               
                        </tr>
                    @endforeach    
            </tbody>
        </table>
</div> --}}

@endsection

@section('dtable')
    {{-- <script>
        $(function() {
           $('#atribut').DataTable({
           });
        });
    </script>
    <script>
   </script> --}}
    <script src="js/lib/summernote/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.summernote').summernote();
		});
        
        function submitForm(){
            var markupStr = $('.summernote').summernote('code');
            document.getElementsByClassName("summernote").value = markupStr;
            document.getElementById("myForm").submit();
        }

    </script>
@endsection

