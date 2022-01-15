<!DOCTYPE html>
<html lang="tr">
<head>
    <title><?php echo $config->title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url($config->icon); ?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assests/front/"); ?>css/main.css">
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body class="">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <?php if($config->facebook) { ?>
                    <a href="<?php echo $config->facebook; ?>" class="topbar-social-item fa fa-facebook"></a>

                <?php } ?>
                <?php if($config->instagram) { ?>
                    <a href="<?php echo $config->instagram; ?>" class="topbar-social-item fa fa-instagram"></a>

                <?php } ?>
                <?php if($config->twitter) { ?>
                    <a href="<?php echo $config->twitter; ?>" class="topbar-social-item fa fa-twitter"></a>

                <?php } ?>
                <?php if($config->youtube) { ?>
                    <a href="<?php echo $config->youtube; ?>" class="topbar-social-item fa fa-youtube-play"></a>
                <?php } ?>
            </div>

            <span class="topbar-child1">
					<?php echo $config->info; ?>
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
                        <a href="mailto:<?php echo $config->mail; ?>" ><?php echo $config->mail; ?></a>

					</span>

            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="<?php echo base_url(); ?>" class="logo">
                <img src="<?php echo base_url($config->logo); ?>" alt="<?php echo $config->title ?>">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <?php foreach ($supercategory as $cat) { ?>
                        <li>
                            <a href="<?php echo base_url("urun-kategori/".$cat->slug); ?>"><?php echo $cat->name; ?></a>
                            <ul class="sub_menu">
                                <?php foreach ($category as $subcat) {
                                    if($subcat->supercategory_id == $cat->id)  {
                                    ?>
                                <li>
                                    <a href="<?php echo base_url("urun-kategori/".$subcat->slug);    ?>">
                                        <?php echo $subcat->name; ?>
                                    </a>
                                </li>
                                <?php } else ;} ?>
                            </ul>
                        </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <?php if($this->session->userdata("userlogin"))  {?>
                        <ul class="main_menu">
                           <li>
                               <a href="<?php echo  base_url("hesap-detaylari");?>" class="header-wrapicon1 dis-block">
                                   <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">

                               </a>
                               <ul class="sub_menu">
                                   <li class="p-b-9">
                                       <a href="<?php echo  base_url("hesap-detaylari");?>" class="s-text7">
                                           HESAP DETAYLARI
                                       </a>
                                   </li>

                                   <li class="p-b-9">
                                       <a href="<?php echo base_url("siparislerim");?>" class="s-text7">
                                           SİPARİŞLERİM
                                       </a>
                                   </li>
                                   <li class="p-b-9">
                                       <a href="<?php echo base_url("adres-bilgilerim")?>" class="s-text7">
                                           ADRES BİLGİLERİM
                                       </a>
                                   </li>
                                   <li class="p-b-9">
                                       <a href="<?php echo  base_url("logout");?>" class="s-text7">
                                           ÇIKIŞ YAP
                                       </a>
                                   </li>
                               </ul>
                           </li>

                        </ul>


                <?php } else  { ?>
                <a href="<?php echo base_url("giris"); ?>" class="header-wrapicon1 dis-block">
                    <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
                <?php  }?>
                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php echo sizeof($this->cart->contents()); ?></span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <?php  foreach ($this->cart->contents() as  $content) {?>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="<?php echo base_url(getProductimage(array(
                                                'product_id' => $content['id'],
                                                'isCover' =>1
                                        ))->path); ?>" alt="<?php echo $content['name'];?>">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="<?php echo base_url("urun/".$content['slug']); ?>" class="header-cart-item-name">
                                            <?php echo $content['name']; ?>
                                        </a>

                                        <span class="header-cart-item-info">
											<?php echo $content['qty']; ?> x <?php echo $content['price']." TL"; ?>
										</span>
                                    </div>
                                </li>
                            <?php }   ?>
                        </ul>

                        <div class="header-cart-total">
                            Toplam Tutar : <?php echo $this->cart->total() ." TL"; ?>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <?php if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) { ?>
                                <a href="<?php echo base_url("sepet"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    SİPARİŞ VER
                                </a>
                                <?php } else { ?>

                                    <a href="<?php echo base_url("giris"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        GİRİŞ YAP
                                    </a>
                                <?php }?>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <button onclick="destroycart()"  class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    SEPETİ BOŞALT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="<?php echo base_url(); ?>" class="logo-mobile">
            <img src="<?php echo base_url($config->logo); ?>" alt="<?php echo $config->title ?>">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <?php if($this->session->userdata("userlogin"))  {?>
                    <ul class="main_menu">
                        <li>
                            <a href="<?php echo  base_url("hesap-detaylari");?>" class="header-wrapicon1 dis-block">
                                <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">

                            </a>
                            <ul class="sub_menu">
                                <li class="p-b-9">
                                    <a href="<?php echo  base_url("hesap-detaylari");?>" class="s-text7">
                                        HESAP DETAYLARI
                                    </a>
                                </li>

                                <li class="p-b-9">
                                    <a href="<?php echo base_url("siparislerim");?>" class="s-text7">
                                        SİPARİŞLERİM
                                    </a>
                                </li>
                                <li class="p-b-9">
                                    <a href="<?php echo base_url("adres-bilgilerim")?>" class="s-text7">
                                        ADRES BİLGİLERİM
                                    </a>
                                </li>
                                <li class="p-b-9">
                                    <a href="<?php echo  base_url("logout");?>" class="s-text7">
                                        ÇIKIŞ YAP
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>


                <?php } else  { ?>
                    <a href="<?php echo base_url("giris"); ?>" class="header-wrapicon1 dis-block">
                        <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                <?php  }?>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="<?php echo base_url("assests/front/"); ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php echo sizeof($this->cart->contents()); ?></span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <?php  foreach ($this->cart->contents() as  $content) {?>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="<?php echo base_url(getProductimage(array(
                                            'product_id' => $content['id'],
                                            'isCover' =>1
                                        ))->path); ?>" alt="<?php echo $content['name'];?>">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="<?php echo base_url("urun/".$content['slug']); ?>" class="header-cart-item-name">
                                            <?php echo $content['name']; ?>
                                        </a>

                                        <span class="header-cart-item-info">
											<?php echo $content['qty']; ?> x <?php echo $content['price']." TL"; ?>
										</span>
                                    </div>
                                </li>
                            <?php }   ?>
                        </ul>

                        <div class="header-cart-total">
                            Toplam Tutar : <?php echo $this->cart->total() ." TL"; ?>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <?php if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) { ?>
                                    <a href="<?php echo base_url("sepet"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        SİPARİŞ VER
                                    </a>
                                <?php } else { ?>

                                    <a href="<?php echo base_url("giris"); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        GİRİŞ YAP
                                    </a>
                                <?php }?>
                            </div>

                            <div class="header-cart-wrapbtn">

                                <!-- Button -->
                                <button onclick="destroycart()"  class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    SEPETİ BOŞALT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <?php foreach ($supercategory as $cat) { ?>
                    <li class="item-menu-mobile">
                        <a href="<?php echo base_url("urun-kategori/".$cat->slug); ?>"><?php echo $cat->name; ?></a>
                        <ul class="sub-menu">
                            <?php foreach ($category as $subcat) {
                                if($subcat->supercategory_id == $cat->id)  {
                                    ?>
                                    <li>
                                        <a href="<?php echo base_url("urun-kategori/".$subcat->slug);    ?>">
                                            <?php echo $subcat->name; ?>
                                        </a>
                                    </li>

                                <?php } else ;} ?>
                        </ul>
                        <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                    </li>
                <?php } ?>

        </nav>
    </div>
</header>