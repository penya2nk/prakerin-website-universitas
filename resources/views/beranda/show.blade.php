@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>B e r a n d a</h1></center>
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('beranda.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control" value="{{ $beranda->sejarah }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Visi</label>	
			  			<input type="text" name="visi" class="form-control" value="{{ $beranda->visi }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Misi</label>	
			  			<input type="text" name="misi" class="form-control" value="{{ $beranda->misi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tujuan</label>	
			  			<input type="text" name="tujuan" class="form-control" value="{{ $beranda->tujuan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $beranda->alamat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_telepon" class="form-control" value="{{ $beranda->no_telepon }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection