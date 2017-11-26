
@extends('layouts.app')

@section('content')
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
           <br /><br />  
           <div class="container-fluid">  
                <h3 align="center">Jadwal Matakuliah</h3>  
                <br /> 
                <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>  
                               <tr>  
                                    <td rowspan="2">Hari</td>
                                    <td colspan="2">Jam</td>  
                                    <td rowspan="2">Kode Mk</td>  
                                    <td rowspan="2">Nama Mk</td>  
                                    <td rowspan="2">Kp</td>
                                    <td rowspan="2">Dosen Pengajar</td> 
                                    <td rowspan="2">Setting</td>
                                    <td rowspan="2">Kapasitas</td>
                                    <td rowspan="2">Ruang</td>
                                    <td rowspan="2">Sisa</td>
                                   
                                     
                               </tr>  
                               <tr>
                                   <td>Mulai</td>
                                   <td>Selesai</td>
                               </tr>
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["hari"].'</td> 
                                    <td>'.$row["jam-mulai"].'</td>  
                                    <td>'.$row["jam-selesai"].'</td>  
                                    <td>'.$row["kode-matakuliah"].'</td>  
                                    <td>'.$row["nama"].'</td>  
                                    <td>'.$row["KP"].'</td>
                                    <td>'.$row["nama"].'</td>
                                    <td>'.$row[""].'</td>
                                    <td>'.$row["kapasitas"].'</td>
                                    <td>'.$row["nama"].'</td>
                                    <td>'.$row[""].'</td> 
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
      $('#example').DataTable();  
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