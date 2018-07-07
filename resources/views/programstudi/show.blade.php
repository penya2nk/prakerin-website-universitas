@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>P r o g r a m  S t u d i</h1></center>
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('programstudi.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $programstudi->nama }}"  readonly>
			  		</div>
					<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $programstudi->judul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $programstudi->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kategori</label>	
			  			<input type="text" name="kategori_id" class="form-control" value="{{ $programstudi->kategori_id }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection