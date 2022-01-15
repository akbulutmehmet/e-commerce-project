<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
<div class="row">
    <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-body">
                    <form action="<?php echo  base_url("admin/kategoriEkle");?>" method="post">
                        <div class="form-gruop">
                            <label for="">Kategori Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Kategori Adı Giriniz">
                        </div>
                        <br>
                        <div class="form-gruop">
                            <label for="">Üst Kategori Adı</label>
                            <select name="supercategory" id="" class="form-control">
                                <?php foreach ($items as $item) {?>
                                <option value="<?php echo  $item->id;?>"><?php echo  $item->name;?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <br>
                        <div class="form-gruop">
                            <button class="btn btn-success btn-block btn-flat">KAYDET</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin_v/includes/footer"); ?>