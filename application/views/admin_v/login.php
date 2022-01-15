<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kitap Proje Admin Girişi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assests/back/") ?>plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo  base_url("admin/")?>">Kitap Proje Admin Paneli</a>
    </div>
    <div class="login-box-body">

        <p class="login-box-msg">Yönetici Girişi</p>
        <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
        <form action="<?php echo base_url("admin/login"); ?>" method="post" autocomplete="off">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Şifre" name="password" required >
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-12   ">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>

</div>
<script src="<?php echo base_url("assests/back/")  ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url("assests/back/")  ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url("assests/back/")  ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url("assests/back/js") ?>/html5shiv.min.js"></script>
<script src="<?php echo base_url("assests/back/js") ?>/respond.min.js"></script>
</body>
</html>
