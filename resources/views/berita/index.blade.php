@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('berita.create') }}">Add Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Judul</th>
					<th>Tanggal Publikasi</th>
					<th>Deskripsi</th>
					<th>Kategori</th>
					
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($berita as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->foto }} </td>
		<td> {{ $data->judul }} </td>
		<td> {{ $data->tgl_publikasi }} </td>
		<td> {{ $data->deskripsi }} </td>
		<td> {{ $data->kategori_id }} </td>
		
	<td>
		<a class="btn btn-primary" href=" {{ route('berita.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('berita.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('berita.destroy',$data->id) }}">
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