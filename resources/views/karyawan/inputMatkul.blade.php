@extends('layouts.app')
@section('content')
<body class="fix-header">  
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Input Matakuliah Baru</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Input Matakuliah Baru</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           <style type="text/css">
             td {
              padding-bottom: 4px;
             }
           </style> 
       
           <div class="container-fluid">  
                <h3 align="center">Input Matakuliah</h3>  
                <br />  
                <div class="table-responsive">  
                    
                    <div class="form" align="center">
                      <form method="post" action="{{url('/matakuliah')}}">
                        @foreach ($errors->all() as $error) 
                          <div style="background-color: red; color: white; margin-bottom: 1px">
                          {{ $error }}
                          </div>
                        @endforeach
                        @if (session('status'))
                          <div style="background-color: green; color: white">
                            {{ session('status') }}
                          </div>
                        @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <table border="0">
                          <tr>
                            <td align="right"><b>Kode Matakuliah:</td>
                            <td><input type="text" name="kode"></td>
                          </tr>

                          <tr>
                            <td align="right"><b>Nama Matakuliah: </td>
                            <td><input type="text" name="nama"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>SKS: </td>
                            <td><input type="number" name="sks" size="2" min="1" max="10"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Jurusan</b></td>
                            <td><select name="jurusan">
                              @foreach($arrayData[2] as $jurusan)
                              <option value="{{$jurusan->id}}">
                                {{$jurusan->nama}}
                              </option>
                              @endforeach
                            </select></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Semester</b></td>
                            <td><input type="number" name="semester" min="1" max="8"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Jumlah Kelas</b></td>
                            <td><input type="number" name="jumlahKelas" min="1" max="10"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Status</b></td>
                            <td>
                                <select name="status">
                                  <option value="buka">
                                    Buka
                                  </option>
                                  <option value="tutup">
                                    Tutup
                                  </option>
                                </select>
                            </td>
                          </tr>
                          <tr>
                            <td align="right"><b>Kapasitas</b></td>
                            <td><input type="number" name="kapasitas" min="1" max="100"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>KP:</td>
                            <td><input type="text" name="kp" size="2"></td>
                          </tr>
                          <tr>
                            <td align="right">
                              <b>Jadwal 1: 
                            </td>
                            <td>

                              <select name='jadwal1'>
                                 @foreach($arrayData[0] as $jadwal)
                                <option value="{{$jadwal->id}}">{{$jadwal->hari}}, {{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</option>
                                @endforeach
                              </select>
                            </td>
                            <!-- <td align="right">
                              <b>Jadwal 2: 
                            </td>
                            <td>
                              <select name='jadwal2'>
                                @foreach($arrayData[0] as $jadwal)
                                <option value="{{$jadwal->id}}">{{$jadwal->hari}}, {{$jadwal->jam_mulai}} - {{$jadwal->jam_selesai}}</option>
                                @endforeach
                              </select>
                            </td> -->
                          </tr>
                          <tr>
                            <td align="right"><b>Ruangan 1:</td>
                            <td><select name="ruangan1">
                                @foreach($arrayData[1] as $ruangan)
                                <option value="{{$ruangan->id}}">{{$ruangan->nama}}</option>
                                @endforeach
                            </select>
                            </td>
                           <!--  <td align="right"><b>Ruangan 2:</td>
                            <td><select name="ruangan2">
                              @foreach($arrayData[1] as $ruangan)
                                <option value="{{$ruangan->id}}">{{$ruangan->nama}}</option>
                                @endforeach
                            </select>
                          </td> -->
                          </tr>

                        
                        </table>
                        <br>
                        <input type="submit" value="simpan" name="simpan" >
                        <input type="button" value="reset" name="reset" >
                      </form>
                      
                    
                    </div>
                    <br><br>
                </div>  
           </div>
            </div>
        </div>
</body>
@endsection