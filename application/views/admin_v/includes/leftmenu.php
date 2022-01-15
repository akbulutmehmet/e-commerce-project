<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url("assests/uploads/config/")  ?>mehmet.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Mehmet Akbulut</p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="<?php active('panel'); ?>">
                <a href="<?php echo base_url("admin/panel"); ?>">
                    <i class="fa fa-home"></i> <span>ANASAYFA</span>

                </a>
            </li>
            <li class="<?php active('kullanicilar'); ?>">
                <a href="<?php echo base_url("admin/kullanicilar"); ?>">
                    <i class="fa fa-user"></i> <span>KULLANICILAR</span>
                </a>
            </li>
            <li class="<?php active('siparisler'); ?>">
                <a href="<?php echo base_url("admin/siparisler"); ?>">
                    <i class="fa fa-shopping-cart"></i> <span>SİPARİŞLER</span>
                </a>
            </li>
            <li class="<?php active('urunler'); ?>">
                <a href="<?php echo base_url("admin/urunler"); ?>">
                    <i class="fa fa-shopping-bag"></i> <span>ÜRÜNLER</span>

                </a>
            </li>
            <li class="<?php active('ustkategoriler'); ?>">
                <a href="<?php echo base_url("admin/ustkategoriler"); ?>">
                    <i class="fa fa-book"></i></i> <span>ÜST KATEGORİLER</span>
                </a>
            </li>
            <li class="<?php active('kategoriler'); ?>">
                <a href="<?php echo base_url("admin/kategoriler"); ?>">
                    <i class="fa  fa-book"></i> <span>ÜRÜN KATEGORİLERİ</span>
                </a>
            </li>
            <li class="<?php active('ayarlar'); ?>">
                <a href="<?php echo base_url("admin/ayarlar"); ?>">
                    <i class="fa fa-cog"></i> <span>AYARLAR</span>

                </a>
            </li>
            <li class="">
                <a href="<?php echo base_url("admin/logout"); ?>">
                    <i class="fa fa-sign-out"></i> <span>OTURUMU SONLANDIR</span>

                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php if(isset($head)) {
                echo  $head;
            } ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url("admin/panel")?>"><i class="fa fa-dashboard"></i> ANASAYFA</a></li>
            <li class="active"><a href="<?php echo  base_url("admin/{$head}")?>"> <?php if(isset($head)) {
                    echo  $head;
                } ?>
                </a>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

<?php
    flashRead();
?>