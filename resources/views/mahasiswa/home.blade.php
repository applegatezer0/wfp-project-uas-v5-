@extends('layouts.app')

@section('content')
<body class="fix-header">
    <div class="container">
  @if(\Session::has('error'))
    <div class="alert alert-danger">
      {{\Session::get('error')}}
    </div>
  @endif
   <div class="row bg-title" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Home
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>

@endsection