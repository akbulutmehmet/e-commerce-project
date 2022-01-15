<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5">
    <div class="container p-t-45 p-b-138" >
        <div class="row">
            <div class="col-md-12">

                <h4>ADRES DETAYLARI</h4>
                <a href="<?php echo  base_url("adres-ekle"); ?>" class="btn btn-success  pull-right">YENİ EKLE</a>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                          <tr>
                              <th>İD</th>
                              <th>Adres İsim</th>
                              <th>Şehir</th>
                              <th>İlçe Adı</th>
                              <th>Mahalle Adı</th>
                              <th>Sokak Adı</th>
                              <th>Apartman Bilgileri</th>
                              <th>İşlemler</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($adress as $addres) {?>
                            <tr>
                                <td><?php  echo $addres->id;?></td>
                                <td><?php  echo $addres->name;?></td>
                                <td><?php  echo getCity(array('id' => $addres->city_id))->name;?></td>
                                <td><?php  echo getTown(array('id' => $addres->town_id))->name;?></td>
                                <td><?php  echo $addres->neighborhood;?></td>
                                <td><?php  echo $addres->street;?></td>
                                <td><?php  echo $addres->apartman_no;?></td>
                                <td>
                                    <a href="<?php echo  base_url("adres-guncelle/{$addres->id}")?>" class="btn btn-xs  btn-info">GÜNCELLE</a>
                                    <a href="<?php echo  base_url("adres-sil/{$addres->id}")?>" class="btn btn-xs btn-danger">SİL</a>
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
