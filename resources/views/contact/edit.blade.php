@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
	<br>
	<br>
	    <div class="col-md-12">
		    <div class="panel panel-primary">
			    <div class="panel-heading"><b>EDIT DATA CONTACT</b>
			    <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			    </div>
			    </div>
			    <div class="panel-body">
			  	    <form action="{{ route('contact.update',$kontak->id) }}" method="post" enctype="multipart/form-data">
			  		    <input name="_method" type="hidden" value="PATCH">
        			    @csrf

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $kontak->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('no_tel') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_tel" class="form-control" value="{{ $kontak->no_tel }}"  required>
			  			@if ($errors->has('no_tel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_tel') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $kontak->email }}"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

					<div class="form-group">
                            <label class="cc-payment" class="control-label mb-1">Gambar</label>
                            @if (isset ($kontak) && $kontak->gambar)
                            <p>
                                <img src="{{ asset('assets/img/gambar/' .$kontak->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
                            </p>
                            @endif
                            <input type="file" name="gambar" value="{{ $kontak->gambar }}">
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