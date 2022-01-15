<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>

<div class="row">
    <div class="col-md-12">
        <a href="<?php echo base_url("admin/kategoriEkle") ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Kategori Ekle</a>
    </div>
</div>
    <br>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
                <table id="categories" class="table table-bordered table-striped table-hover">
                    <thead>
                            <th>Kategori İD</th>
                            <th>Kategori Adı</th>
                            <th>Kategori Slug</th>
                            <th>İşlemler</th>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item)  {?>
                            <tr>
                                <td><?php echo  $item->id; ?></td>
                                <td><?php echo  $item->name; ?></td>
                                <td><?php echo  $item->slug; ?></td>
                                <td>
                                    <a href="<?php echo  base_url("admin/kategoriDuzenle/{$item->id}"); ?>" class="btn btn-info">
                                        <i class="fa fa-pencil"></i>
                                        Düzenle</a>
                                    <a href="<?php echo  base_url("admin/kategoriSil/{$item->id}"); ?>" class="btn btn-danger">
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