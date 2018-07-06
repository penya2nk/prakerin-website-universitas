@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('berita.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Foto</label>	
			  			<input type="text" name="foto" class="form-control" value="{{ $berita->foto }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $berita->judul }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tanggal Publikasi</label>	
			  			<input type="date" name="tgl_publikasi" class="form-control" value="{{ $berita->tgl_publikasi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="date" name="deskripsi" class="form-control" value="{{ $berita->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kategori</label>	
			  			<input type="text" name="kategori_id" class="form-control" value="{{ $berita->kategori_id }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection