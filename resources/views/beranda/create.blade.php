@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Add Data 
			  	<div class="panel-title pull-right"><a href="{{ route('beranda.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('beranda.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control"  required>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('visi') ? ' has-error' : '' }}">
			  			<label class="control-label">Visi</label>	
			  			<input type="text" name="visi" class="form-control"  required>
			  			@if ($errors->has('visi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('visi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('misi') ? ' has-error' : '' }}">
			  			<label class="control-label">Misi</label>	
			  			<input type="text" name="misi" class="form-control"  required>
			  			@if ($errors->has('misi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('misi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tujuan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tujuan</label>	
			  			<input type="text" name="tujuan" class="form-control"  required>
			  			@if ($errors->has('tujuan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tujuan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_telepon" class="form-control"  required>
			  			@if ($errors->has('no_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telepon') }}</strong>
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