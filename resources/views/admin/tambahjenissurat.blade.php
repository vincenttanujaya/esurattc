@extends('layouts.appadmin')

@section('cssekstra')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

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
        <label class="form-label">Pejabat</label>
        <div class="row">            
            <div class="col-lg-4">                
                <select class="form-control" name="pejabat">
                        @foreach ($pejabat as $item)
                            <option value="{{$item->id_pejabat}}">{{$item->nama_pejabat}}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-inline btn-secondary" data-toggle="modal" data-target="#tambahPejabatModal">Tambah Pejabat <small> *Jika Perlu </small></button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <label class="form-label">Template Surat</label>
                <textarea id="templatesurat" name="template"></textarea>
            </div>
        </div>        
        <div class="row m-t-lg">
            <div class="col-md-6"> 
                <label class="form-label">Atribut Yang Dibutuhkan</label>   
                @foreach ($atributsurat as $item) 
                    <div class="checkbox-bird">
                        <input type="checkbox" id="check-bird-{{$item->id_atribut}}" value="{{$item->id_atribut}}" name="checklist[]"/>
                        <label for="check-bird-{{$item->id_atribut}}"> {{$item->nama_atribut}}</label>
                    </div>
                @endforeach
                <button type="button" onclick="submitForm()" name="action" value="add" class="btn btn-inline">Tambahkan Jenis Surat</button>
            </div>
            </form>
            <div class="col-md-6">
                <h5> Tambah Atribut <small> *Jika Diperlukan </small></h5>
                <form action="/tambahatribut2" method="POST">
                    @csrf                
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="exampleInput" placeholder="Tambah Atribut" name="atribut" required>
                    </fieldset>
                    <button type="submit" class="btn btn-inline btn-secondary">Tambahkan Atribut</button>
                </form>
            </div>            
        </div>          
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

<div class="col-md-12">   
    <div class="modal fade" id="tambahPejabatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Ubah Atribut</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/tambahpejabat2')}}" method="POST")> 
                        @csrf
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label" for="nip">Nama Pejabat</label>
                                    <input type="text" name="nama" class="form-control" id="nip" placeholder="Nama Pejabat"  required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="form-label" for="nip">NIP</label>
                                    <input type="text" name="nip" class="form-control" id="nip" placeholder="NIP"  required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="form-label" for="nip">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="nip" placeholder="Jabatan"  required>
                                </fieldset>
                            </div>
                        </div>                                           
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dtable')
    <script src="js/lib/summernote/summernote.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('#templatesurat').froalaEditor() }); </script>
    <script>
            function submitForm(){
                // document.getElementById("myForm").setAttribute("target", " "); 
                $('#templatesurat').froalaEditor('codeView.toggle');
                document.getElementById("myForm").submit();
                $('#templatesurat').froalaEditor('codeView.toggle');
            }

            function lihatForm(){ 
                $('#templatesurat').froalaEditor('codeView.toggle');
                var hehe = document.getElementById("sembunyi"); 
                hehe.value = document.getElementById("templatesurat").value;
                // alert(hehe.value);
                document.getElementById("myForm2").submit();
                $('#templatesurat').froalaEditor('codeView.toggle');
            }
    
    </script>
@endsection

