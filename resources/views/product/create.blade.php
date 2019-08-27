@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
    <br>
    <br>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><b>TAMBAH DATA PRODUCT<b>
                    <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                    </div>
                </div>

                <div class="panel-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label class="control-label">Judul</label>	
                            <input type="text" name="judul" class="form-control"  required>
                            <label for="cc-payment" class="control-label mb-1">gambar</label>
                            <input type="file" name="gambar" class="form-control" required>
                            @if ($errors->has('judul'))
                            <span class="help-block">
                            <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label class="control-label">Deskripsi</label>	
                            <textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"  required></textarea>
                            @if ($errors->has('deskripsi'))
                            <span class="help-block">
                            <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Tambah</button>
                        </div>

                    </form>
                </div>	
            </div>
        </div>
<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection