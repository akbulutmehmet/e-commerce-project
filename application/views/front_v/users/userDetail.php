<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5">
    <div class="container p-t-45 p-b-138" >
       <div class="row">
            <div class="col-md-12">

                    <h4>HESAP DETAYLARI</h4>
                    <div class="m-t-25">
                        <form action="<?php echo  base_url("user/uyeguncelle/{$user->id}");?>" method="post" autocomplete="off">
                            <div class="form-gruop m-t-25">
                                <label for="">İsim</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>" required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">Soyisim</label>
                                <input type="text" class="form-control" name="surname" value="<?php echo $user->surname; ?>"  required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="mail" value="<?php echo $user->mail; ?>" required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">Telefon Numaranız</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $user->phone; ?>">
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">Tc Kimlik No</label>
                                <input type="number" maxlength="11" minlength="11" class="form-control" name="tc" value="<?php echo $user->tcnumber; ?>" required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">Şifre</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $user->password; ?>" required>
                            </div>

                            <div class="form-gruop m-t-25">
                                <button type="submit" class="btn btn-block btn-flat btn-success">Güncelle </button>
                            </div>
                        </form>
                    </div>


            </div>
       </div>
    </div>
</div>

<?php $this->load->view("front_v/includes/footer.php"); ?>
