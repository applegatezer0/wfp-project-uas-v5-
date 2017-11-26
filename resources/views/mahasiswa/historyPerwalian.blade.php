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
                  <h4 class="page-title">History Perwalian</h4> </div>
              <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  
                  <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">History Perwalian</li>
                  </ol>
              </div>
          </div>  
     <div class="container-fluid">  
          <h3 align="center">History Perwalian</h3>  
          <br />  
          <div class="table-responsive">  
              <label>NRP: {{ Auth::user()->email }} </label><br>
              <label>Nama: {{ Auth::user()->name }} </label><br>
              <label>Jumlah SKS Maksimum yang dapat diambil: </label><br>
              <label>Jumlah SKS Terpakai: </label><br>
              <label>Jumlah SKS Sisa: </label><br>
               <table id="search_data" class="table table-striped table-bordered">  
                    <thead>  
                         <tr>  
                              <td colspan="5">FPP I</td> 
                         </tr>
                         <tr>
                             <td>Kode MK</td>  
                              <td>Nama MK</td>  
                              <td>KP</td>  
                              <td>SKS</td> 
                              <td>Status</td> 
                         </tr>  
                    </thead>  
               </table> 
               <br>
               <br>
               <table id="search_data2" class="table table-striped table-bordered">  
                    <thead>  
                         <tr>  
                              <td colspan="5">FPP II</td> 
                         </tr>
                         <tr>
                             <td>Kode MK</td>  
                              <td>Nama MK</td>  
                              <td>KP</td>  
                              <td>SKS</td> 
                              <td>Status</td> 
                         </tr>  
                    </thead> 
               </table>
               <br>
               <br>
               <table id="search_data3" class="table table-striped table-bordered">  
                    <thead>  
                         <tr>  
                              <td colspan="5">Kasus Khusus</td> 
                         </tr>
                         <tr>
                             <td>Kode MK</td>  
                              <td>Nama MK</td>  
                              <td>KP</td>  
                              <td>SKS</td> 
                              <td>Status</td> 
                         </tr>  
                    </thead> 
               </table> 
          </div>  
     </div>
      </div>
  </div>
<script>  
  $(document).ready(function(){  
      $('#search_data2').DataTable();  
  });  
</script>
<script>  
  $(document).ready(function(){  
      $('#search_data3').DataTable();  
  });  
</script>
</body>

@endsection