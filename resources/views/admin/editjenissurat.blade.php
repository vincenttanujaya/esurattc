@extends('layouts.appadmin')

@section('cssekstra')
    <link rel="stylesheet" href="css/lib/summernote/summernote.css"/>
    <link rel="stylesheet" href="css/separate/pages/editor.min.css">
@endsection

@section('content')
<div class="box-typical box-typical-padding">
    <h4>Tambah Jenis Surat<h4>
    <form action="/ubahjenissurat" method="POST" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <label class="form-label">Jenis Surat</label>
                <fieldset class="form-group">
                <input type="text" class="form-control" id="exampleInput" placeholder="Nama Surat" name="jenissurat" value="{{$jenissurat->jenis_surat}}" required>
                </fieldset>
            </div>
        </div>
        <label class="form-label">Pejabat</label>
        <div class="row">            
            <div class="col-lg-4">                
                <select class="form-control" name="pejabat">
                        @foreach ($pejabat as $item)
                            @if ($item->id_pejabat==$jenissurat->pejabat->id_pejabat)
                                <option value="{{$item->id_pejabat}}" selected="selected">{{$item->nama_pejabat}}</option>
                            @else
                                <option value="{{$item->id_pejabat}}">{{$item->nama_pejabat}}</option>      
                            @endif
                        @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-inline btn-secondary" data-toggle="modal" data-target="#tambahPejabatModal">Tambah Pejabat <small> *Jika Perlu </small></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label class="form-label">Upload File</label>            
                <div class="btn-sm">
                    <input type="file" id="input-file">
                    <textarea id="content-target" style="display:none;" class="form-control-file" name="template"></textarea>
                </div>
            </div>
        </div>
        <br>
    <button type="submit"  name="id_jenis_surat" value="{{$jenissurat->id_jenis_surat}}" class="btn btn-inline">Ubah Template Surat</button>
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
   <script>
        document.getElementById('input-file').addEventListener('change', getFile)
        function getFile(event) {
            const input = event.target
            if ('files' in input && input.files.length > 0) {
                placeFileContent(
                document.getElementById('content-target'),
                input.files[0])
            }
        }
        function placeFileContent(target, file) {
            readFileContent(file).then(content => {
                target.value = content
            }).catch(error => console.log(error))
        }
        function readFileContent(file) {
            const reader = new FileReader()
            return new Promise((resolve, reject) => {
                reader.onload = event => resolve(event.target.result)
                reader.onerror = error => reject(error)
                reader.readAsText(file)
            })
        }
        function lihatForm(){
            var heheg = document.getElementById('content-target').value;
            document.getElementById('sembunyi').value = heheg;
            // alert(document.getElementsByName('template2').value);
            document.getElementById('myForm2').submit();
        }
    </script>
@endsection

