<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5">
    <div class="container p-t-45 p-b-138" >
        <div class="row">
            <div class="col-md-12">

                <h4>SİPARİŞ İÇERİKLERİ</h4>
                <br>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                          <tr>
                              <th>Ürün Resmi</th>
                              <th>Ürün ADI</th>
                              <th>Ürün Sayısı</th>
                              <th>Ürün Fiyatı</th>
                              <th>Tutar</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orderitems as $item) {?>
                            <tr>
                                <td><img src="<?php  echo base_url(getProductimage(array('product_id' => $item->product_id,
                                        'isCover' =>1))->path);?>" width="150" alt=""></td>
                                <td><?php  echo getProduct(array('id' => $item->product_id ))->title;?></td>
                                <td><?php  echo  $item->qty; ?></td>
                                <td><?php  echo (getProduct(array('id' => $item->product_id ))->discount) ?
                                        getProduct(array('id' => $item->product_id ))->discount . " TL" :
                                        getProduct(array('id' => $item->product_id ))->price . " TL"
                                    ;?></td>
                                <td><?php echo  $item->total . " TL";?></td>


                            </tr>
                    <?php  }?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<?php $this->load->view("front_v/includes/footer.php"); ?>
