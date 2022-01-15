<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped table-hover">
                        <thead>
                        <th>ÜRÜN RESMİ</th>
                        <th>ÜRÜN ADI</th>
                        <th>ÜRÜN FİYATI</th>
                        <th>SATIŞ ADETİ</th>
                        <th>TUTAR</th>
                        </thead>
                        <tbody>
                        <?php foreach ($order_items as $item) { ?>
                            <tr>
                                <td><img src="<?php echo base_url( getProductimage(array(
                                        'product_id' => $item->product_id,
                                        'isCover' => 1
                                    ))->path); ?>" alt="" width="150"></td>
                                <td>
                                    <?php echo getProduct(array('id' => $item->product_id))->title; ?>
                                </td>
                                <td>
                                    <?php  echo (getProduct(array('id' => $item->product_id ))->discount) ?
                                        getProduct(array('id' => $item->product_id ))->discount . " TL" :
                                        getProduct(array('id' => $item->product_id ))->price . " TL"
                                    ;?>
                                </td>
                                <td>
                                    <?php echo  $item->qty; ?>
                                </td>
                                <td>
                                    <?php echo  $item->total; ?>
                                </td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>

                    <h3>ADRES BİLGİLERİ</h3>
                    <h4 class="">
                        <?php echo  $adress->neighborhood . " " . $adress->street . " ". $adress->apartman_no
                        . " ". getCity(array('id' => $adress->city_id))->name . " " .
                          " / " .  getTown(array('id' => $adress->town_id))->name
                        ;?>

                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view("admin_v/includes/footer"); ?>