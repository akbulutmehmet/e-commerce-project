<?php $this->load->view("front_v/includes/header.php"); ?>
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo  base_url("assests/front/images/heading-pages-01.jpg");?>);">
        <h2 class="l-text2 t-center">
            <?php echo  $cat->name;?>
        </h2>
        <p class="m-text13 t-center">
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            KATEGORİLER
                        </h4>

                        <ul class="p-b-54">
                            <?php foreach ($supercategory as $super) { ?>
                            <li class="p-t-4">
                                <a href="<?php echo  base_url("urun-kategori/".$super->slug);?>" class="s-text13">
                                    <?php echo  $super->name;?>
                                </a>
                            </li>
                           <?php  } ?>
                        </ul>

                        <!--  -->

                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->


                    <!-- Product -->
                    <div class="row">
                        <?php foreach ($products as $product) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">

                                    <img src="<?php echo base_url(getProductimage(array('product_id' => $product->id,'isCover' => 1))->path); ?>" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">


                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                           <!-- <a href="<?php echo  base_url("sepete-ekle/{$product->id}"); ?>">  </a> -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="addCartitem('<?php echo $product->id; ?>')">
                                                SEPETE EKLE
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="<?php echo  base_url("urun/".$product->slug); ?>" class="block2-name dis-block s-text3 p-b-5">
                                        <?php echo  $product->title;?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
										<?php if($product->discount != null) {
                                            echo  "<del>" . $product->price ." TL" . "</del>" . " " . $product->discount ." TL";
                                        }
                                        else {
                                            echo  $product->price;
                                        }
                                        ?>
									</span>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php $this->load->view("front_v/includes/footer.php"); ?>