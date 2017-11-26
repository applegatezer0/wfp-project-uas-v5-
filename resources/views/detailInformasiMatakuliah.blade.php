@extends('layouts.app')
@section('linkScript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@endsection
@section('content')
<body class="fix-header"> 
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Detail Informasi Matakuliah</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('informasiMatkul') }}">Informasi Matakuliah</a></li>
                    <li class="active">Detail Informasi Matakuliah</li>
                </ol>
            </div>
        </div>
        <br /><br />  
        <div class="container-fluid">  
          @foreach($array[0] as $kode)
          <h3 align="center">Detail Informasi Matakuliah</h3> 
          <h4 align="center">Kode Matakuliah: {{$kode->kode_matakuliah}}</h4>
          <h4 align="center">Nama Matakuliah: {{$kode->nama}}</h4>
          @endforeach
          <br />  
          <div class="table-responsive"> 
            <table id="search_data" class="table table-striped table-bordered" style="text-align: center;">  
              <thead>  
                <tr>  
                  <td>KP</td>
                  <td>Kapasitas</td>  
                  <!-- <td>Jumlah Pendaftar</td> -->
               </tr>  
              </thead>  
              <tbody>
                @foreach($array[1] as $matakuliah)
                  <tr>
                    <td><a href="#">{{$matakuliah->KP}}</a></td>
                    <td>{{$matakuliah->kapasitas}}</td>
                  </tr>
                @endforeach
              </tbody>  
            </table>
          </div>  
       </div> 
  </div>
</div>
<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</body>
@endsection
