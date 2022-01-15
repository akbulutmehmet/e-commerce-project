<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                BİZİMLE İLETİŞİM KURUN
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    <?php echo  $config->info;?>
                </p>

                <div class="flex-m p-t-30">
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
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                KATEGORİLER
            </h4>

            <ul>
                <?php foreach ($supercategory as $supercat) { ?>
                <li class="p-b-9">
                    <a href="<?php echo base_url("urun-kategori/".$supercat->slug); ?>" class="s-text7">
                        <?php echo $supercat->name; ?>
                    </a>
                </li>
                <?php } ?>

            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                KATEGORİLER
            </h4>

            <ul>
                <?php foreach ($category as $cat) { ?>
                    <li class="p-b-9">
                        <a href="<?php echo base_url("urun-kategori/".$cat->slug); ?>" class="s-text7">
                            <?php echo $cat->name; ?>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                ÖNEMLİ BİLGİLER
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        KVKK AYDINLATMA METNİ
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        KVKK VERİ SAHİBİ BAŞVURU FORMU
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        ÇEREZ KULLANIM POLİTİKASI
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        SATIŞ SÖZLEŞMELERİMİZ
                    </a>
                </li>
            </ul>
        </div>


    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assests/front/"); ?>images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assests/front/"); ?>images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assests/front/"); ?>images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assests/front/"); ?>images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assests/front/"); ?>images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2022 All rights reserved. |  <i class="fa fa-heart-o" aria-hidden="true"></i> CREATED BY <a href="https://akbulutmehmet.com" target="_blank">Mehmet Akbulut</a>
        </div>
    </div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->

<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assests/front/"); ?>vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assests/front/"); ?>js/main.js"></script>
<script>
    function destroycart() {
        let $url = '<?php echo base_url("sepetBosalt");?>';
        $.ajax({
            type : "POST",
            url : $url,
            success:function (data) {
                window.location.reload();
            }
        });
    }
    function  addCartitem ($id) {
        let $url = '<?php echo  base_url('sepete-ekle')?>';
        $qty = $("#qty").val();
        if($qty == undefined) {
            $qty =1;
        }
        $.ajax({
            method : "POST",
            url : $url,
            data : {id:$id,qty:$qty},
            success : function () {
                window.location.reload();
            }
        });
    }
</script>
</body>
</html>
