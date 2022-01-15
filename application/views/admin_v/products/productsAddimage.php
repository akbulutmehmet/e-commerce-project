<?php $this->load->view("admin_v/includes/header"); ?>
<?php $this->load->view("admin_v/includes/leftmenu"); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-solid">
                <div class="box-body">
                    <form action="<?php echo base_url("admin/urunResimEkle/".$this->uri->segment(3)) ?>" class="dropzone" enctype="multipart/form-data" method="post">

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo  base_url("admin/urunson/{$this->uri->segment(3)}")?>" class="btn btn-success btn-flat btn-block">İşlemi Bitir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header">
                    <h4 class="text-center">2. AŞAMA</h4>
                </div>
                <div class="box-body">
                    <p class="text-center">
                        Ürün Resimleri
                    </p>
                </div>
            </div>
        </div>

    </div>

<?php $this->load->view("admin_v/includes/footer"); ?>