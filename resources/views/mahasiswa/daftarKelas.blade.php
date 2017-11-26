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
                        <h4 class="page-title">Proses Perwalian (Isi dengan batch berapa dan periode)</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Daftar Kelas Matakuliah</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>   
           <div class="container-fluid">
                <label>{{ Auth::user()->name }} - {{ Auth::user()->email }}</label><br>  
                <h3 align="center">Input Matakuliah</h3>  
                <br />  
                <div class="table-responsive">  
                    
                    <div align="center">
                      <table border="0">
                        <tr>
                          <td><b>Kode Matakuliah:</td>
                          <td><input type="text" name="kode"></td>
                        </tr>
                        <tr>
                          <td><b>Nama Matakuliah: </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><b>KP:</td>
                          <td><input type="text" name="kp"></td>
                        </tr>
                        
                    </table>
                    <br>
                    <input type="submit" value="simpan" name="simpan" >
                    <input type="submit" value="reset" name="reset" >
                    </div>
                    <br><br>
                    
                    <table id="search_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td colspan="5">FPP I</td> 
                               </tr>
                               <tr>
                                    <td>No</td>
                                    <td>Kode MK</td>  
                                    <td>Nama MK</td>  
                                    <td>KP</td>  
                                    <td>SKS</td> 
                                    <td>Hapus</td> 
                               </tr>  
                          </thead>
                          <tbody>
                            <!--- ISI HASIL INPUTAN MATAKULIAH ---->
                          </tbody>  
                    </table> 
                    <br>
                    <br>
                    <label>Jumlah SKS yang akan diambil: </label><br>
                    <label>Total SKS Bebas (KP atau Tugas Akhir): </label><br>
                    <label>SKS Maksimum + SKS Tambahan: </label><br>
                    <label>SKS Sisa: </label><br>
              
                </div>  
           </div>  
            </div>
        </div>
</body>
@endsection