@extends('layouts.appadmin')

@section('content')
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

<div class="box-typical box-typical-padding">
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
                        <td>
                            {{$item->nama_atribut}}
                        </td> 
                        <td>
                            <button type="button" class="btn btn-inline btn-warning btn-sm"><i class="fa fa-edit"></i>
                            <button type="button" class="btn btn-inline btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="font-icon-trash"></i></button>
                        </td>                               
                    </tr>
                    @endforeach    
            </tbody>
        </table>
</div>

@endsection

@section('dtable')
    <script>
        $(function() {
           $('#atribut').DataTable({
           });
       });
   </script>    
@endsection

