@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
	    <div class="col-md-12"><br>
		    <div class="panel panel-primary">
			    <div class="panel-heading"><b>EDIT DATA CAREER</b>
			    <br>
			    <br>
			    <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			    </div>
			    </div>
			    <div class="panel-body">
			  	    <form action="{{ route('career.update',$careers->id) }}" method="post" enctype="multipart/form-data">
			  		    <input name="_method" type="hidden" value="PATCH">
        			    @csrf

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $careers->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $careers->email }}"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('no_tel') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_tel" class="form-control" value="{{ $careers->no_tel }}"  required>
			  			@if ($errors->has('no_tel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_tel') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                    	<label class="cc-payment" class="control-label mb-1">CV</label>
			  			@if (isset ($careers) && $careers->cv)
			  			<p>
			  			    <br>
			  				<img src="{{ asset('assetss/files/' .$careers->cv)}}"  alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="cv" value="{{ $careers->cv }}">
                    </div>

                    <div class="form-group {{ $errors->has('subyek') ? ' has-error' : '' }}">
			  			<label class="control-label">Subyek</label>	
			  			<input type="text" name="subyek" class="form-control" value="{{ $careers->subyek }}"  required>
			  			@if ($errors->has('subyek'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subyek') }}</strong>
                            </span>
                        @endif
                    </div>

			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required>{{ $careers->deskripsi }}</textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection