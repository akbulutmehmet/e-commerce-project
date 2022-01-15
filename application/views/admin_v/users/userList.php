<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped table-hover">
                        <thead>
                        <th>İD</th>
                        <th>AD</th>
                        <th>SOYAD</th>
                        <th>MAİL</th>
                        <th>TELEFON</th>
                        <th>TCNO</th>
                        <th>KAYIT ZAMANI</th>
                        <th>İşlemler</th>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user->id; ?></td>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->surname; ?></td>
                                <td><?php echo $user->mail; ?></td>
                                <td><?php echo $user->phone; ?></td>
                                <td><?php echo $user->tcnumber; ?></td>
                                <td><?php echo $user->createdDate; ?></td>
                                <td>
                                    <a href="<?php echo  base_url("admin/kullaniciGuncelle/{$user->id}")?>" class="btn btn-xs btn-info">GÜNCELLE</a>
                                    <a href="<?php echo  base_url("admin/kullaniciSil/{$user->id}")?>" class="btn btn-xs btn-danger">SİL</a>
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