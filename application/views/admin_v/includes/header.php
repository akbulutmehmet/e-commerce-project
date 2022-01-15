<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(isset($head)) {
        echo  $head;
        } ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/jvectormap/jquery-jvectormap.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>dist/css/skins/_all-skins.min.css">
    <script src="<?php echo base_url("assests/back/js") ?>/html5shiv.min.js"></script>
    <script src="<?php echo base_url("assests/back/js") ?>/respond.min.js"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet"  href="<?php echo base_url("assests/back/css") ?>/switchery.css" type="text/css"/>
    <link rel="stylesheet"  href="<?php echo base_url("assests/back/css") ?>/dropzone.min.css" type="text/css"/>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo  base_url("admin/panel")?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->

            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>MEHMET</b>AKBULUT</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

        </nav>
    </header>
