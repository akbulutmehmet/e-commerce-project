<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>

    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url("admin/urunEkle") ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Ürün Ekle</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table id="categories" class="table table-bordered table-striped table-hover">
                        <thead>
                        <th>Ürün İD</th>
                        <th>Ürün Adı</th>
                        <th>Ürün Slug</th>
                        <th>Üst Kategori</th>
                        <th>Kategori</th>
                        <th>Fiyat</th>
                        <th>Stok</th>
                        <th>İşlemler</th>
                        </thead>
                        <tbody>
                        <?php foreach ($items as $item)  {?>
                            <tr>
                                <td><?php echo  $item->id; ?></td>
                                <td><?php echo  $item->title; ?></td>
                                <td><?php echo  $item->slug; ?></td>
                                <td><?php echo  getSuperCategory($item->supercategory_id)->name;?></td>
                                <td><?php echo  getCategory($item->category_id)->name;?></td>
                                <td>
                                    <?php if($item->discount != null) {
                                        echo "<del>" . $item->price . " TL"."</del>  ". $item->discount . "TL";
                                    }
                                    else {
                                        echo $item->price;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $item->stock;?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url("admin/urunresimler/{$item->id}")?>" class="btn btn-primary">
                                        <i class="fa fa-image"></i>
                                        Resimler</a>
                                    <a href="<?php echo  base_url("admin/urunDuzenle/{$item->id}"); ?>" class="btn btn-info">
                                        <i class="fa fa-pencil"></i>
                                        Düzenle</a>
                                    <a href="<?php echo  base_url("admin/urunSil/{$item->id}"); ?>" class="btn btn-danger">
                                        <i class="fa fa-remove"></i>
                                        Sil</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view("admin_v/includes/footer"); ?>