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
                <h4 class="page-title">Jadwal Matakuliah</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Jadwal Matakuliah</li>
                </ol>
            </div>
        </div>
        <br /><br />  
        <div class="container-fluid">  
          <h3 align="center">Informasi Matakuliah</h3>  
          <br />  
          <div class="table-responsive"> 
            <table id="search_data" class="table table-striped table-bordered" style="text-align: center;" cellspacing="0" width="100%">  
              <thead>  
                <tr>  
                  <td rowspan="2">Hari</td>
                  <td colspan="2">Jam</td>  
                  <td rowspan="2">Kode Mk</td>  
                  <td rowspan="2">Nama Mk</td>  
                  <td rowspan="2">Kelas Paralel</td>
                  <td rowspan="2">Dosen Pengajar</td> 
                  <td rowspan="2">Kapasitas</td>
                  <td rowspan="2">Ruang</td>
               </tr>  
               <tr>
                 <td>Mulai</td>
                 <td>Selesai</td>
               </tr>  
              </thead>  
              <tbody>
              
                @foreach($matakuliahs as $matakuliah)
                <tr>
                    <td>{{$matakuliah->hari}}</td>
                    <td>{{$matakuliah->jam_mulai}}</td>
                    <td>{{$matakuliah->jam_selesai}}</td>
                    <td>{{$matakuliah->kode_matakuliah}}</td>
                    <td>{{$matakuliah->nama_matakuliah}}</td>
                    <td>{{$matakuliah->kp}}</td>
                    <td>BUDI</td>
                    <td>{{$matakuliah->kapasitas}}</td>
                    <td>{{$matakuliah->nama_ruangan}}</td>

                  </tr>
                @endforeach
                <!---- ISINYA JADWAL ---->
              </tbody>  
            </table>
          </div>  
       </div> 
  </div>
</div>
</body>
@endsection
