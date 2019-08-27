@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    <br>
                    <br>
                    <br>
                   <center><b style="letter-spacing: 3px; line-height: 500%;
                    padding-left: 250px; list-style-position: inside;
                    font-size: 20px;"> You are logged in!!!</b>   </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
