<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5">
    <div class="container p-t-45 p-b-138" >
        <div class="row">
            <div class="col-md-12">

                <h4>SİPARİŞ DETAYLARI</h4>
                <br>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                          <tr>
                              <th>Sipariş NO</th>
                              <th>Adres ADI</th>
                              <th>Toplam Tutar</th>
                              <th>Sipariş Zamanı</th>
                              <th>İşlemler</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order) {?>
                            <tr>

                                <td><?php  echo $order->id;?></td>
                                <td><?php echo getAdress(array('id' => $order->adress_id))->name; ?></td>
                                <td><?php echo  $order->total_price . " TL";?></td>
                                <td><?php echo  $order->createdAt;?></td>
                                <td>
                                    <a href="<?php echo  base_url("siparis-goruntule/{$order->id}")?>" class="btn btn-xs  btn-info">DETAYLARI GÖRÜNTÜLE</a>
                                </td>
                            </tr>
                    <?php  }?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<?php $this->load->view("front_v/includes/footer.php"); ?>
