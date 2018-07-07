@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>K a t e g o r i</h1></center>
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}"  readonly>
			  		</div>

			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection