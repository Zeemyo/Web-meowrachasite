@extends('sb-admin/app')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Heading -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

        <link rel="stylesheet" href="{{ asset('AdminLTE.css') }}">
        <link rel="stylesheet" href="{{ asset('AdminLTE.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                  <![endif]-->
    </head>

    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="card bg-success">
                <div class="inner">
                    <h3 style="color: #ffffff; text-align: center">
                        <?php
                        $count = DB::table('adopsi')->count();
                        echo $count;
                        ?>
                    </h3>

                    <p style="color: #ffffff; text-align: center">Adopsi</p>
                </div>

                <a href="adopsi" class="small-box-footer" style="color: #ffffff; text-align: center">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="card bg-danger">
                <div class="inner">
                    <h3 style="color: #ffffff; text-align: center">
                        <?php
                        $count = DB::table('konsultasi')->count();
                        echo $count;
                        ?>
                    </h3>

                    <p style="color: #ffffff; text-align: center">Konsultasi</p>
                </div>
                <a href="artikel/konsultasi" class="small-box-footer" style="color: #ffffff; text-align: center">More info
                    <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="card bg-info">
                <div class="inner">
                    <h3 style="color: #ffffff; text-align: center">
                        <?php
                        $count = DB::table('penitipan')->count();
                        echo $count;
                        ?>
                    </h3>

                    <p style="color: #ffffff; text-align: center">Penitipan</p>
                </div>
                <a href="penitipan" class="small-box-footer" style="color: #ffffff; text-align: center">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="card bg-warning">
                <div class="inner">
                    <h3 style="color: #ffffff; text-align: center">
                        <?php
                        $count = DB::table('post')->count();
                        echo $count;
                        ?>
                    </h3>

                    <p style="color: #ffffff; text-align: center">Artikel</p>
                </div>
                <a href="/#article" class="small-box-footer" style="color: #ffffff; text-align: center">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
