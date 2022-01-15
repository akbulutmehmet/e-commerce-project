<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-body">
                    <form  action="<?php echo base_url("admin/ayarKaydet"); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-gruop">
                            <label for="">Site Adı</label>
                            <input class="form-control" type="text" name="title" value="<?php echo $item->title; ?>" placeholder="Site Adını giriniz" required>
                        </div>
                        <input type="hidden" value="<?php echo $item->id ?>" name="id">
                        <div class="form-gruop">
                            <label for="">Site Mail Bilgisi</label>
                            <input class="form-control" type="mail" name="mail" value="<?php echo $item->mail; ?>" placeholder="Site iletişim mail adresini giriniz" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">Adres Bilgisi</label>
                            <input class="form-control" type="text" name="info" value="<?php echo $item->info; ?>" placeholder="Adres bilgisi giriniz" required>
                        </div>
                        <div class="row">
                            <div class="form-gruop">
                                <div class="col-xs-6">
                                    <label for="">Site Logo</label>
                                    <input class="form-control" type="file" name="logo" >
                                    <?php if($item->logo) { ?>
                                        <img src="<?php echo  base_url($item->logo); ?>" alt="" width="150">
                                    <?php } ?>
                                </div>
                                <div class="col-xs-6">
                                    <label for="">Site İcon</label>
                                    <input class="form-control" type="file" name="icon"  >
                                    <?php if($item->logo) { ?>
                                        <img src="<?php echo  base_url($item->icon); ?>" alt="" width="150">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-gruop">
                                <div class="col-xs-6">
                                    <label for="">Facebook</label>
                                    <input class="form-control" type="text" name="facebook" value="<?php echo $item->facebook; ?>">
                                </div>
                                <div class="col-xs-6">
                                    <label for="">Twitter</label>
                                    <input class="form-control" type="text" name="twitter" value="<?php echo $item->twitter; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-gruop">
                                <div class="col-xs-6">
                                    <label for="">İnstagram</label>
                                    <input class="form-control" type="text" name="instagram" value="<?php echo $item->instagram; ?>">
                                </div>
                                <div class="col-xs-6">
                                    <label for="">Youtube</label>
                                    <input class="form-control" type="text" name="youtube" value="<?php echo $item->youtube; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                            <div class="col-xs-12">
                                    <button class="btn btn-success btn-flat btn-block">Kaydet</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("admin_v/includes/footer"); ?>