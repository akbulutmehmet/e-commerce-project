<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo  base_url("admin/urunResimEkle/{$item->id}")?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Ürün Resim Ekle</a>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                                <th>İD</th>
                                <th>Resim</th>
                                <th>Resim Yolu</th>
                                <th>Kapak Durumu</th>
                                <th>İşlemler</th>
                        </thead>
                        <tbody>
                        <?php foreach ($images as $image) {?>
                                <tr>
                                    <td><?php echo  $image->id; ?></td>
                                    <td>
                                        <img src="<?php echo base_url($image->path)?>" alt="" width="150" height="150">
                                    </td>
                                    <td><?php echo $image->path ?></td>
                                    <td>
                                        <input data-product="<?php echo $this->uri->segment(3); ?>" data-url="<?php echo  base_url("admin/isCoversetter/{$image->id}"); ?>"  class="isCover" type="checkbox" data-switchery data-color="#188ae2" <?php echo  ($image->iscover == 0) ? "" : "checked";   ?> />
                                    </td>
                                    <td>
                                        <a href="<?php echo  base_url("admin/urunResimsil/{$image->id}"); ?>" class="btn btn-danger">Sil</a>
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

