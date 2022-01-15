<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5;">
    <div class="container p-t-45 p-b-138" >
        <div class="row">
            <div class="col-md-6">
                <h4>GİRİŞ YAP</h4>
                <div class="m-t-25">
                    <form action="<?php echo  base_url("giris-yap");?>" method="post">
                        <div class="form-gruop m-t-25">
                            <label for="">Email</label>
                            <input type="mail" class="form-control" name="mail">
                        </div>

                        <div class="form-gruop m-t-25">
                            <label for="">Şifre</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-gruop m-t-25">
                            <button type="submit" class="btn btn-block btn-flat btn-success">Giriş Yap </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h4>ÜYE OL</h4>
                <div class="m-t-25">
                    <form action="<?php echo  base_url("uye-ol");?>" method="post" autocomplete="off">
                        <div class="form-gruop m-t-25">
                            <label for="">İsim</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-gruop m-t-25">
                            <label for="">Soyisim</label>
                            <input type="text" class="form-control" name="surname" required>
                        </div>
                        <div class="form-gruop m-t-25">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="mail" required>
                        </div>
                        <div class="form-gruop m-t-25">
                            <label for="">Telefon Numaranız</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-gruop m-t-25">
                            <label for="">Tc Kimlik No</label>
                            <input type="number" maxlength="11" minlength="11" class="form-control" name="tc" required>
                        </div>
                        <div class="form-gruop m-t-25">
                            <label for="">Şifre</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-gruop m-t-25">
                            <button type="submit" class="btn btn-block btn-flat btn-success">ÜYE OL </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

<?php $this->load->view("front_v/includes/footer.php"); ?>
