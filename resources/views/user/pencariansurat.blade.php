@extends('layouts.appuser')

@section('content')
	<header class="section-header">
		<div class="tbl">
			<div class="tbl-row">
				<div class="tbl-cell">
					<h3>Pencarian Surat</h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><a href="/">E-Surat | IF</a></li>
						<li class="active">Pencarian Surat</li>
					</ol>
				</div>
			</div>
		</div>
	</header>
	<div class="box-typical box-typical-padding">
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display table table-striped table-bordered" 	cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>ID Surat</th>
						<th>Tanggal Pengajuan Surat</th>
						<th>Nama Pengaju</th>
						<th>Status</th>
						
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>ID Surat</th>
						<th>Tanggal Pengajuan Surat</th>
						<th>Nama Pengaju</th>
						<th>Status</th>
						
					</tr>
					</tfoot>
					<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
					</tr>
					<tr>
						<td>Garrett Winters</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>63</td>
					</tr>
					<tr>
						<td>Ashton Cox</td>
						<td>Junior Technical Author</td>
						<td>San Francisco</td>
						<td>66</td>
					</tr>
					<tr>
						<td>Cedric Kelly</td>
						<td>Senior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>22</td>
					</tr>
					
					</tbody>
				</table>			
			</div>
		</div>
	</div>
@endsection