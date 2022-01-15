<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-solid">
                <div class="box-body">
                    <form action="<?php echo  base_url("admin/urunDuzenle/{$item->id}");?>" method="post">
                        <div class="form-gruop">
                            <label for="">Ürün Adı</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $item->title; ?>" required>
                        </div>

                        <div class="form-gruop">
                            <label for="">Üst Kategori Adı</label>
                            <select name="supercategory" id="" class="form-control">
                                <option selected="selected" value="<?php echo getSuperCategory($item->supercategory_id)->id; ?>"><?php echo getSuperCategory($item->supercategory_id)->name; ?></option>
                                <?php foreach ($supercategorys as $super) {?>
                                    <option value="<?php echo $super->id ?>"><?php echo $super->name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-gruop">
                            <label for="">Üst Kategori Adı</label>
                            <select name="category" id="" class="form-control">
                                <option selected="selected" value="<?php echo getCategory($item->category_id)->id; ?>"><?php echo getCategory($item->category_id)->name; ?></option>
                                <?php foreach ($categorys as $category) {?>
                                    <option value="<?php echo $category->id ?>"><?php echo $category->name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-gruop">
                            <label for="">Açıklama</label>
                            <textarea name="description" id=""  rows="3" class="form-control"><?php echo  $item->description;?></textarea>
                        </div>
                        <div class="form-gruop">
                            <label for="">Fiyat</label>
                            <input type="text" class="form-control" name="price" value="<?php echo  $item->price;?>" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">İndirimli Fiyat</label>
                            <input type="text"  class="form-control" name="discount" value="<?php echo  $item->discount;?>">
                        </div>
                        <div class="form-gruop">
                            <label for="">Stok Sayısı</label>
                            <input type="number" class="form-control" name="stock" value="<?php echo  $item->stock;?>" required>
                        </div>
                        <div class="form-gruop">
                            <button name="step1" value="1" class="btn btn-success btn-block btn-flat">KAYDET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("admin_v/includes/footer"); ?>