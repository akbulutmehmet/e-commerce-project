<?php $this->load->view("front_v/includes/header.php"); ?>

<?php $this->load->view("front_v/includes/slider.php"); ?>


    <!-- Banner -->
    <section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-edebiyat.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-edebiyat.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-edebiyat.jpg"alt="Edebiyat" >
                        </picture>
                        

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/edebiyat");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                EDEBİYAT
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-dunya-edebiyat.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-dunya-edebiyat.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-dunya-edebiyat.jpg"alt="Dunya Edebiyat" >
                        </picture>

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/dunya-edebiyati");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                DÜNYA EDEBİYATI
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-roman.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-roman.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-roman.jpg"alt="Dunya Edebiyat" >
                        </picture>

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/roman");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                ROMAN
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                          <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-oyku.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-oyku.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-oyku.jpg"alt="Öykü" >
                        </picture>

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/oyku");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                ÖYKÜ
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                          <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-bilim.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-bilim.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-bilim.jpg"alt="Bilim" >
                        </picture>

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/bilim");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                BİLİM
                            </a>
                        </div>
                    </div>

                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <picture>
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-yapay-zeka.webp" type="image/webp">
                            <source srcset="<?php echo base_url("assests/uploads/"); ?>home/home-yapay-zeka.jpg" type="image/jpeg"> 
                            <img src="<?php echo base_url("assests/uploads/"); ?>home/home-yapay-zeka.jpg"alt="Yapay Zeka" >
                        </picture>

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="<?php echo  base_url("urun-kategori/yapay-zeka");?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                YAPAY ZEKA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    ÖNERİLEN ÜRÜNLER
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php foreach ($products as $product ) { ?>
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                     <picture>
                                    <source srcset="<?php echo  base_url(getProductimage(array('product_id' => $product->id,'isCover' =>1))->path)?>.webp" type="image/webp">
                                    <source srcset="<?php echo  base_url(getProductimage(array('product_id' => $product->id,'isCover' =>1))->path)?>" type="image/jpeg"> 
                                    <img src="<?php echo  base_url(getProductimage(array('product_id' => $product->id,'isCover' =>1))->path)?>"alt="IMG-PRODUCT" >
                        </picture>
                                    

                                    <div class="block2-overlay trans-0-4">


                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button onclick="addCartitem('<?php echo $product->id; ?>')" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                SEPETE EKLE
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="<?php echo  base_url("urun/{$product->slug}")?>" class="block2-name dis-block s-text3 p-b-5">
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
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>


    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Tüm Alışverişlerinde Ücretsiz Kargo
                </h4>

            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 Gün Ücretsiz İade
                </h4>

                <span class="s-text11 t-center">

				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    7/24 Online Müşteri Hizmetleri
                </h4>

            </div>
        </div>
    </section>

<?php $this->load->view("front_v/includes/footer.php"); ?>