<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('linkScript')
    <!-- SCRIPT UNTUK SEARCH -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Perwalian Fakultas Teknik</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

   <!--  Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />            
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
</head>
<body class="fix-header">
   

    <!-- Scripts -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                        Perwalian Fakultas Teknik
                    </a>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" onmouseover="this.style.color='orange';" onmouseout="this.style='hidden';">Login</a></li>
                            <li style="margin-right: 10px;"><a href="{{ route('register') }}" onmouseover="this.style.color='orange';" onmouseout="this.style='hidden';">Register</a></li>
                        @else
                            <li class="dropdown" style="margin-right: 10px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" onmouseover="this.style.color='orange';" onmouseout="this.style='hidden';">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
         <div class="container">
        

        @yield('content')
    </div>

    @if(Auth::user())
    <?php
        $id = Auth::user()->id;
    ?>
    
    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <!-- <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div> -->
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{ url('home') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ url('profilMah') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('daftarKelasMah') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Daftar Kelas Matakuliah</a>
                    </li>
                    <li>
                        <a href="{{ url('inputMatkulBaru') }}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Input Matakuliah Baru</a>
                    </li>
                    <li>
                        <a href="{{ url('informasiMatkul') }}" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Informasi Matakuliah</a>
                    </li>
                    <li>
                        <a href="{{ url('jadwalMatkulMah') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Jadwal Matakuliah</a>
                    </li>
                    <li>
                        <a href="{{ url('transkripMah/1')}}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Transkrip</a>
                    </li>
                    <li>
                        <a href="{{ url('historyPerwalian') }}" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>History Perwalian</a>
                    </li>

                </ul>
            </div>
            
        </div>
        @endif

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!-- Script Datatable -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>  
        $(document).ready(function(){  
            $('#search_data').DataTable();  
        });  
    </script>
</body>
</html>
