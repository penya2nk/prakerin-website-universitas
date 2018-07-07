@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>B e r i t a</h1></center>
			  <div class="panel-heading"> 
			  	<div class="panel-title pull-right"><a href="{{ route('berita.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('berita.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		 <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="foto" type="file" required>
                            </div>
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>
							<div class="form-group {{ $errors->has('tgl_publikasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Publikasi</label>	
			  			<input type="date" name="tgl_publikasi" class="form-control"  required>
			  			@if ($errors->has('tgl_publikasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_publikasi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Add</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection