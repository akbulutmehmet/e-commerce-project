<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-solid">
                <div class="box-body">
                    <form action="<?php echo  base_url("admin/kullaniciGuncelle/{$user->id}");?>" method="post">
                        <div class="form-gruop">
                            <label for="">AD</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">SOYAD</label>
                            <input type="text" class="form-control" name="surname" value="<?php echo $user->surname; ?>" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">MAİL</label>
                            <input type="email" class="form-control" name="mail" value="<?php echo $user->mail; ?>" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">TELEFON</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $user->phone; ?>" required>
                        </div>
                        <div class="form-gruop">
                            <label for="">TCNO</label>
                            <input type="number" class="form-control" name="tcnumber" value="<?php echo $user->tcnumber; ?>" required>
                        </div>
                        <div class="form-gruop">
                            <button type="submit"  class="btn btn-success btn-block btn-flat">GÜNCELLE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("admin_v/includes/footer"); ?>