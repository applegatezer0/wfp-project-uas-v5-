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
                      <form method="post" action="{{url('/simpanMatkulBaru')}}">
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
                            <td><input type="text" name="sks" size="2"></td>
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
                              <select name='hari1'>
                                <option value="senin">Senin</option>
                                <option value="senin">Selasa</option>
                                <option value="senin">Rabu</option>
                                <option value="senin">Kamis</option>
                                <option value="senin">Jumat</option>
                                <option value="senin">Sabtu</option>
                              </select>
                            </td>
                            <td align="right">
                              <b>Hari 2: 
                            </td>
                            <td>
                              <select name='hari2'>
                                <option value="senin">Senin</option>
                                <option value="senin">Selasa</option>
                                <option value="senin">Rabu</option>
                                <option value="senin">Kamis</option>
                                <option value="senin">Jumat</option>
                                <option value="senin">Sabtu</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td align="right"><b>Jam Mulai Hari 1: </td>
                            <td><input type="text" name="mulai1" size="6"></td>
                            <td align="right"><b>Jam Mulai Hari 2: </td>
                            <td><input type="text" name="mulai2" size="6"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Jam Selesai Hari 1: </td>
                            <td><input type="text" name="selesai1" size="6"></td>
                            <td align="right"><b>Jam Selesai Hari 2: </td>
                            <td><input type="text" name="selesai2" size="6"></td>
                          </tr>
                          <tr>
                            <td align="right"><b>Ruangan 1:</td>
                            <td><input type="text" name="ruangan1" size="6"></td>
                            <td align="right"><b>Ruangan 2:</td>
                            <td><input type="text" name="ruangan2" size="6"></td>
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