@extends('layouts.frontend')
@section('content')
<main>
    <div class="halo-title">
      <div class="slidingVertical">
        <h3>IT Consultant</h3>
        <h3>Software Development</h3>
        <h3>Data Warehouse</h3>
        <h3>Web Development</h3>
        <h3>Business Intelligence</h3>
        <h3>Mobile Application</h3>
      </div>
    </div>
    
    
    @php
    $indexss = DB::table('indexs')
      ->where('id','1')
      ->orderBy('deskripsi', 'desc')
      ->get();
    @endphp

    <div class="isi-desk">
      @foreach($indexss as $data)
        <div class="home-deskripsi1">
          {!!($data->deskripsi)!!}
        </div>
      @endforeach

      @php
      $indexss2 = DB::table('indexs')
        ->where('id','2')
        ->orderBy('deskripsi', 'desc')
        ->get();
      @endphp

      @foreach($indexss2 as $data)
        <div class="home-deskripsi2">
          {!!($data->deskripsi)!!}
          <br>
          <a href="{{route ('product')}}" class="margin-left-53">...read more</a>
        </div>
      @endforeach

      @php
      $indexss3 = DB::table('indexs')
        ->where('id','3')
        ->orderBy('deskripsi', 'desc')
        ->get();
      @endphp

      @foreach($indexss3 as $data)
        <div class="home-deskripsi3">
          {!!($data->deskripsi)!!}
          <br>
          <a href="{{route ('contact')}}" class="margin-left-53">...read more</a>
        </div>
      @endforeach 
    </div>    
</main>
@endsection