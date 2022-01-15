<?php $this->load->view("front_v/includes/header");  ?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url("assests/front/"."images/heading-pages-01.jpg"); ?>);">
    <h2 class="l-text2 t-center">
        Sepet
    </h2>
</section>
<!-- Cart -->

<section class="cart bgwhite p-t-70 p-b-100 " id="cart-items">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Cart item -->
                <?php if($this->cart->contents()) { ?>
                <table class="table  table-bordered">
                    <thead>
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Ürün</th>
                        <th class="column-3">Fiyat</th>
                        <th class="column-4 p-l-70">Ürün Sayısı</th>
                        <th class="column-5">Toplam Tutar</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($this->cart->contents() as $item) { ?>
                    <tr class="table-row" >
                        <td class="column-1">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="<?php echo base_url(getProductimage(array('product_id' => $item['id']))->path);?>" alt="<?php echo $item['name'];?>">
                            </div>
                        </td>
                        <td class="column-2"><?php echo $item['name'];?></td>
                        <td class="column-3"><?php echo $item['price']." TL";?></td>
                        <td class="column-4">
                            <div class="flex-w bo5 of-hidden w-size17">


                                <input onchange="updateCartitem(this,'<?php echo $item['rowid'];?>')"  class="form-control" type="number" name="num-product1" value="<?php echo $item['qty'];?>">


                            </div>
                        </td>
                        <td class="column-5"><?php echo $item['subtotal']." TL";?></td>
                        <td>
                            <button data-id="" onclick="deleteProductcart('<?php echo  $item['rowid']?>')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Sepetten Sil</button>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">


                    <div class="size10 trans-0-4 m-t-10 m-b-10 ">
                        <!-- Button -->

                    </div>

                    <div class="size10 trans-0-4 m-t-10 m-b-10 ">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="destroycart()">
                            Sepeti Boşalt
                        </button>
                    </div>
                </div>
                <?php }  else { ?>
                    <p class="text-danger alert alert-danger">
                        Sepetiniz boş lütfen ürün ekleyiniz
                    </p>
                <?php }  ?>
            </div>
            <div class="col-md-4">
                <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38  m-r-0 m-l-auto p-lr-15-sm">
                    <h5 class="m-text20 p-b-24">
                        SEPET TOPLAMI
                    </h5>

                    <!--  -->
                    <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18  w-full-sm">
						Sepet Tutarı:
					</span>

                        <span class="m-text21 w-size20 w-full-sm">
						<?php echo $this->cart->total()." TL"; ?>
					</span>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18  w-full-sm">
						Adres Seçimi:
                    </span>
                            <?php if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) { ?>
                                <?php $adress = getsAdress(array(
                                    'user_id' => $this->session->userdata("userinfo")->id
                                ));
                                ?>
                            <?php if(!empty($adress)) { ?>
                                    <select name="adres" id="adres" class="form-control" required>
                                        <?php foreach ($adress as $adres) {  ?>
                                            <option value="<?php echo  $adres->id;?>"><?php echo  $adres->name;?></option>
                                        <?php } ?>
                                    </select>


                             <?php } else {  ?>
                                    <p class="text-danger">Hesabınıza kayıtlı adres bulunamadı!</p>
                                    <a href="<?php echo base_url("adres-ekle")?>" class="btn btn-success btn-xs">Adres Ekle</a>
                             <?php } ?>
                            <?php } ?>



                    </div>

                    <!--  -->
                    <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Toplam:
					</span>

                        <span class="m-text21 w-size20 w-full-sm">
						<?php echo $this->cart->total()." TL"; ?>
					</span>
                    </div>

                    <div class="size15 trans-0-4">
                        <!-- Button -->
                        <button onclick="completeOrder()" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Siparişi Ver
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total -->

    </div>
</section>
<script>

    function  deleteProductcart (row) {

        let $url = '<?php echo base_url("sepet-urun-sil");?>';
        $.ajax({
            type : "POST",
            url : $url,
            data : 'rowid='+row,
            success:function (data) {
                window.location.reload();
            }
        });
    }
    function updateCartitem (val,row) {
        let $url = '<?php echo base_url("sepetGuncelle")?>';
        $.ajax(
            {
                method : "POST",
                url : $url,
                data : {qty:val.value,rowid:row},
                success : function (data) {
                    window.location.reload();
                }
            }
        );
    }
    function completeOrder () {
        let $adres_id = $("#adres").val();
        let $url = '<?php echo base_url('siparisi-tamamla');?>';
        $.ajax({
            method: "POST",
            url:$url,
            data : {adres_id:$adres_id},
            success : function (data) {
                window.location.href = '<?php echo base_url("siparislerim"); ?>';
            }
        });
    }

</script>
<?php $this->load->view("front_v/includes/footer");  ?>