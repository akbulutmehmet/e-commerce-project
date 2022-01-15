<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped table-hover">
                        <thead>
                        <th>SİPARİŞ İD</th>
                        <th>MAİL</th>
                        <th>TELEFON</th>
                        <th>TOPLAM TUTAR</th>
                        <th>KAYIT ZAMANI</th>
                        <th>İşlemler</th>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td><?php echo $order->id; ?></td>
                                <td><?php echo getUser(array('id' => $order->user_id))->mail; ?></td>
                                <td><?php echo getUser(array('id' => $order->user_id))->phone; ?></td>
                                <td><?php echo $order->total_price; ?></td>
                                <td><?php echo $order->createdAt; ?></td>
                                <td>
                                    <a href="<?php echo  base_url("admin/siparisGoruntule/{$order->id}")?>" class="btn btn-xs btn-info">GÖRÜNTÜLE</a>
                                </td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view("admin_v/includes/footer"); ?>