<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-solid">
                <div class="box-body">
                    <form action="<?php echo  base_url("admin/urunEkle");?>" method="post">
                        <div class="form-gruop">
                            <label for="">Ürün Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Ürün Adı Giriniz" required>
                        </div>

                        <div class="form-gruop">
                            <label for="">Üst Kategori Adı</label>
                            <select name="supercategory" id="" class="form-control">
                                <?php foreach ($supercategorys as $item) {?>
                                    <option value="<?php echo  $item->id;?>"><?php echo  $item->name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-gruop">
                            <label for="">Kategori Adı</label>
                            <select name="category" id="" class="form-control">
                                <?php foreach ($categorys as $item) {?>
                                    <option value="<?php echo  $item->id;?>"><?php echo  $item->name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-gruop">
                            <label for="">Açıklama</label>
                            <textarea name="description" id=""  rows="3" class="form-control">Buraya ürünün açıklamasını giriniz.</textarea>
                        </div>
                        <div class="form-gruop">
                            <label for="">Fiyat</label>
                            <input type="text" class="form-control" name="price" placeholder="Ürün fiyatını giriniz" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">İndirimli Fiyat</label>
                            <input type="text"  class="form-control" name="discount" placeholder="Ürün indirimli fiyatını giriniz">
                        </div>
                        <div class="form-gruop">
                            <label for="">Stok Sayısı</label>
                            <input type="number" class="form-control" name="stock" placeholder="Ürün Stok sayısını giriniz" required>
                        </div>
                        <div class="form-gruop">
                            <button name="step1" value="1" class="btn btn-success btn-block btn-flat">KAYDET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header">
                    <h4 class="text-center">1. AŞAMA</h4>
                </div>
                <div class="box-body">
                    <p class="text-center">
                        Ürün Bilgileri
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("admin_v/includes/footer"); ?>