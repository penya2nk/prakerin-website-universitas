@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			<center><h1>B e r a n d a</h1></center>		
		<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('beranda.create') }}">Add Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Sejarah</th>
					<th>Visi</th>
					<th>Misi</th>
					<th>Tujuan</th>
					<th>Alamat</th>
					<th>No Telepon</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($beranda as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->sejarah }} </td>
		<td> {{ $data->visi }} </td>
		<td> {{ $data->misi }} </td>
		<td> {{ $data->tujuan }} </td>
		<td> {{ $data->alamat }} </td>
		<td> {{ $data->no_telepon}} </td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('beranda.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('beranda.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('beranda.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
								
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection