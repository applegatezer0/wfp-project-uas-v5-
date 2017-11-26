@extends('layouts.app')

@section('content')
<body class="fix-header">
<div class="container-fluid">
    <div class="row bg-title" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perwalian Fakultas Teknik</div>

                <div class="panel-body">
                    Welcome, {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
    

</div>
</body>
@endsection
