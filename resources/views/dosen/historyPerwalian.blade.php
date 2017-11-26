
@extends('layouts.app')

@section('content')
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
                    <!-- /.col-lg-12 -->
                </div>
                <?php  
 $connect = mysqli_connect("localhost", "root", "", "wfp_project_uas");  
 $query ="SELECT * FROM mata_kuliahs";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Informasi Matakuliah</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
      </head>  
      <body class="fix-header">   
           <div class="container-fluid">  
                <h3 align="center">History Perwalian</h3>  
                <br />  
                <div class="table-responsive">  
                    <label>NRP: </label><br>
                    <label>Nama: </label><br>
                    <label>Jumlah SKS Maksimum yang dapat diambil: </label><br>
                    <label>Jumlah SKS Terpakai: </label><br>
                    <label>Jumlah SKS Sisa: </label><br>
                     <table id="employee_data" class="table table-striped table-bordered">  
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
                          
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["kode-matakuliah"].'</td>  
                                    <td>'.$row["nama"].'</td>  
                                    <td>'.$row["KP"].'</td>  
                                    <td>'.$row["sks"].'</td>  
                                    <td>'.$row["status"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table> 
                     <br>
                     <br>
                     <table id="employee_data1" class="table table-striped table-bordered">  
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
                          
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["kode-matakuliah"].'</td>  
                                    <td>'.$row["nama"].'</td>  
                                    <td>'.$row["KP"].'</td>  
                                    <td>'.$row["sks"].'</td>  
                                    <td>'.$row["status"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                     <br>
                     <br>
                     <table id="employee_data2" class="table table-striped table-bordered">  
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
                          
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>   
                                    <td>'.$row["kode-matakuliah"].'</td>  
                                    <td>'.$row["nama"].'</td>  
                                    <td>'.$row["KP"].'</td>  
                                    <td>'.$row["sks"].'</td>  
                                    <td>'.$row["status"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table> 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 }); 
 $(document).ready(function(){  
      $('#employee_data1').DataTable();  
 });  
 $(document).ready(function(){  
      $('#employee_data2').DataTable();  
 });   
 </script>  
            
                <!-- /.row -->
            </div>
         
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>

@endsection