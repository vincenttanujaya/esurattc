@extends('layouts.appadmin')

@section('content')
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID Surat</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Jenis Surat</th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Vincent Marcello Dwi Tanujaya</td>
        <td>Surat keterangan beasiswa</td>
        <td><button type="button" class="btn btn-success btn-sm">Rincian</button>
            <button type="button" class="btn btn-danger btn-sm mx-2">Tolak</button> </td>
      </tr>
      
    </tbody>
  </table>
</div>
@endsection
