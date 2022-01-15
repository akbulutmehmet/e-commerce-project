<?php $this->load->view("front_v/includes/header.php"); ?>
<div class="container-fluid" style="background: #F5F5F5">
    <div class="container p-t-45 p-b-138" >
       <div class="row">
            <div class="col-md-12">

                    <h4>ADRES DETAYLARI</h4>
                    <div class="m-t-25">
                        <form action="<?php echo  base_url("user/adresGuncelle/{$adress->id}");?>" method="post" autocomplete="off">
                            <div class="form-gruop m-t-25">
                                <label for="">ADRES İSMİ</label>
                                <input type="text" class="form-control" name="name"  value="<?php echo $adress->name; ?>" required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">ŞEHİR</label>
                                <select name="city" id="" class="form-control" onChange="ilceGetir(this.value)">
                                    <option value="<?php echo $adress->city_id; ?>"><?php echo getCity(array('id' => $adress->city_id))->name;?></option>
                                    <?php foreach ($citys as $city) { ?>
                                    <option value="<?php echo $city->id;?>"><?php echo $city->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">İLÇE</label>
                                <select name="town" id="ilceler" class="form-control">
                                    <option value="<?php echo $adress->town_id; ?>"><?php echo getTown(array('id' => $adress->town_id))->name;?></option>
                                </select>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">MAHALLE</label>
                                <input type="text" class="form-control" name="neighborhood"  value="<?php echo $adress->neighborhood; ?>">
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">SOKAK</label>
                                <input type="text"  class="form-control" name="street" value="<?php echo $adress->street; ?>" required>
                            </div>
                            <div class="form-gruop m-t-25">
                                <label for="">APARTMAN NO VE DAİRE NO</label>
                                <input type="text" class="form-control" name="apartman_no" value="<?php echo $adress->apartman_no; ?>"   required>
                            </div>

                            <div class="form-gruop m-t-25">
                                <button type="submit" class="btn btn-block btn-flat btn-success">GÜNCELLE </button>
                            </div>
                        </form>
                    </div>


            </div>
       </div>
    </div>
</div>
<script>
    function ilceGetir (val) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('user/ilceGetir')?>',
            data:'country_id='+val,
            success: function(data){
                $("#ilceler").empty();
                $("#ilceler").html(data);
            }
        });
    }
</script>
<?php $this->load->view("front_v/includes/footer.php"); ?>
