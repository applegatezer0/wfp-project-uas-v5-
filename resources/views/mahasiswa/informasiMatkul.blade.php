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
                <h4 class="page-title">Informasi Matakuliah</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li class="active">Informasi Matakuliah</li>
                </ol>
            </div>
        </div>
        <br /><br />  
        <div class="container-fluid">  
          <h3 align="center">Informasi Matakuliah</h3>  
          <br />  
          <div class="table-responsive"> 
            <table id="search_data" class="table table-striped table-bordered" style="text-align: center;">  
              <thead>  
                <tr>  
                  <td>No</td>
                  <td>Kode Matakuliah</td>  
                  <td>Nama</td>
                  <td>SKS</td>
                  <td>Status Buka</td>
                  <td>Jumlah Kelas</td>
                  <!-- <td>Semester</td>  
                  <td>Status Buka</td> 
                  <td>Jumlah Kelas</td> -->
               </tr>  
              </thead>  
              <tbody>
                <?php 
                  $no = 0; 
                ?>
                @foreach($matakuliahs as $matakuliah)
                  <tr>
                    <?php
                      $no +=1;
                    ?>
                    <td>{{$no}}</td>
                    <td>{{$matakuliah->kode_matakuliah}}</td>
                    <td><a href="{{ url('detailInformasiMatakuliah/'.$matakuliah->kode_matakuliah) }}">{{$matakuliah->nama}}</a></td>
                    <td>{{$matakuliah->sks}}</td>
                    <td>{{$matakuliah->status}}</td>
                    <td>{{$matakuliah->jumlah_kelas}}</td>

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
