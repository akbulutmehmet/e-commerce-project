<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
<div class="row">
    <div class="col-md-6">

        <div class="box box-solid">
            <div class="box-body">
                    <form action="<?php echo  base_url("admin/ustkategoriEkle");?>" method="post">
                        <div class="form-gruop">
                            <label for="">Kategori Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Kategori Adı Giriniz">
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