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
                  <h4 class="page-title">Data Transkrip Mahasiswa</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  
                  <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Data Transkrip Mahasiswa</li>
                  </ol>
              </div>
          </div>  
     <br /><br />  
     <div class="container-fluid">  
          <h3 align="center">Data Transkrip Mahasiswa</h3>  
          <br />  
          <div class="table-responsive">  
            <table id="search_data" class="table table-striped table-bordered" style="text-align: center;">  
              <thead>  
                <tr>  
                  <td>No</td>
                  <td>Kode Mk</td>  
                  <td>Nama Mk</td>  
                  <td>Semester</td>  
                  <td>Tahun</td> 
                  <td>Nisbi</td> 
                </tr>  
              </thead>  
              <tbody>
                <?php 
                  $no=0; 
                ?>
                @foreach($matakuliahs as $matakuliah)
                <?php 
                  $no+=1; 
                ?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$matakuliah->kode_matakuliah}}</td>
                  <td>{{$matakuliah->nama}}</td>
                  <td>{{$matakuliah->semester}}</td>
                  <td>{{$matakuliah->tahun_ajaran}}</td>
                  <td>{{$matakuliah->nisbi}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>  
          </div>  
     </div>  
    </div>
  </div>
</body>
@endsection