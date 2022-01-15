<?php
class Admin extends CI_Controller {
    public $viewFolder;
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "admin_v";
        $this->load->model("admin_model");
        $this->load->model("category_model");
        $this->load->model("supercategory_model");
        $this->load->model("product_model");
        $this->load->model("productimage_model");
        $this->load->model("user_model");
        $this->load->model("order_model");
        $this->load->model("orderitem_model");
        $this->load->model("adress_model");
        if(!$this->session->userdata("adminlogin") && $this->uri->segment(2) && $this->uri->segment(2) != 'login') {
                   redirect(base_url("admin"));
        }

    }
    public function index()
	{
        if ($this->session->userdata("adminlogin")) {
            redirect(base_url("admin/panel"));
        }
		$this->load->view("{$this->viewFolder}/login");
	}
    //URUNLER BASlANGIÇ
    public function  urunler () {
        $viewData = new stdClass();
        $viewData->head = "Ürünler";
        $viewData->items = $this->product_model->getProducts();
        $viewData->supercategorys = $this->supercategory_model->getCategories();
        $this->load->view("admin_v/products/products",$viewData);
    }
    public function urunEkle () {
        $viewData = new stdClass();
        $viewData->head = "Ürün Ekle";
        $viewData->supercategorys = $this->supercategory_model->getCategories();
        $viewData->categorys = $this->category_model->getCategories();
        if(isPost()) {

            $data = array(
                'supercategory_id' => postValue('supercategory'),
                'category_id' => postValue('category'),
                'title' => postValue('name'),
                'slug' => convertToSeo(postValue('name')),
                'description' => postValue('description'),
                'price' => postValue('price'),
                'discount' => postValue('discount'),
                'stock' => postValue('stock')
            );
            if($data['discount'] ==0) {
                $data['discount'] = null;
            }
            $this->product_model->insertProduct($data);
            flash('success','check','Ürün başarılı bir şekilde eklendi');
            redirect(base_url('admin/urunResimEkle/'.$this->db->insert_id()));
        }
        $this->load->view("admin_v/products/productsAdd",$viewData);
    }
    public function  urunResimEkle ($id) {
        $viewData = new stdClass();
        $viewData->head = "Ürün Resim Ekle";
        if(isPost()) {
            $config['upload_path'] = 'assests/uploads/products';
            $config['allowed_types'] = 'jpg|png';
            $this->upload->initialize($config);
            if($this->upload->do_upload('file')) {
                $data = array(
                    'product_id' => $id,
                    'path' => $config['upload_path'].'/'.$this->upload->data('file_name')
                );
                $this->productimage_model->insertProductimage($data);
            }

        }
        $this->load->view("admin_v/products/productsAddimage",$viewData);
    }
    public  function  urunson ($id) {
        $viewData = new stdClass();
        $viewData->item = $this->product_model->getProduct(array('id' => $id));

        if(empty($viewData->item)) {
            flash('warning','ban','Ürün bulunamadı');
            redirect(base_url('admin/urunler'));
        }
        $this->product_model->updateProduct(array('id' => $id),array(
            'complete' => 1,
            'active' => 1
        ));
        flash('success','check','Ürün başarılı bir şekilde eklendi');
        redirect(base_url('admin/urunler'));
    }
    public  function urunResimler ($id) {
        $viewData = new stdClass();
        $viewData->head = "Ürün Resimleri";
        $viewData->images = $this->productimage_model->getProductsimage(array('product_id' => $id));
        $viewData->item = $this->product_model->getProduct(array('id'=>$id));
        $this->load->view('admin_v/products/productsimages',$viewData);
    }
    public function isCoverSetter ($id) {
        $iscover = (postValue('data') == "true") ? 1:0;
        $product_id = postValue("product_id");

        $data =array(
            'iscover' => $iscover
        );
        $this->productimage_model->updateProductimage(array(
            'id' => $id,
            'product_id' => $product_id
        ),$data);
        $this->productimage_model->updateProductimage(array(
            'id !=' => $id,
            'product_id' => $product_id
        ),array(
            'iscover' => 0
        ));
    }
    public function urunResimsil ($id) {
        $data = $this->productimage_model->getProductimage(array('id' => $id));
         $this->productimage_model->deleteProductimage(array('id' => $id));
         unlink($data->path);
         back();
    }
    public  function  urunDuzenle ($id) {
        $viewData = new stdClass();
        $viewData->head = "Ürün Düzenle";
        $viewData->item = $this->product_model->getProduct(array('id' => $id));
        $viewData->supercategorys = $this->supercategory_model->getCategories(
            array('id !=' => $viewData->item->supercategory_id)
        );
        $viewData->categorys = $this->category_model->getCategories(
            array('id !=' => $viewData->item->category_id)
        );
        if(isPost()) {
            $data = array(
                'supercategory_id' => postValue('supercategory'),
                'category_id' => postValue('category'),
                'title' => postValue('name'),
                'slug' => convertToSeo(postValue('name')),
                'description' => postValue('description'),
                'price' => postValue('price'),
                'discount' => postValue('discount'),
                'stock' => postValue('stock')
            );
            if($data['discount'] ==0) {
                $data['discount'] = null;
            }
            $this->product_model->updateProduct(array('id' => $id),$data);
            flash('success','check','Ürün başarılı bir şekilde eklendi');
            back();
        }
        $this->load->view("admin_v/products/productsUpdate",$viewData);
    }
    public function urunSil ($id) {
        $data = $this->productimage_model->getProductsimage(array(
            'product_id' => $id
        ));
        print_r($data);
        foreach ($data as $dat) {
            $this->productimage_model->deleteProductimage(array(
                'id' => $dat->id
            ));
            unlink($dat->path);
        }
        $this->product_model->deleteProduct(array('id' => $id));
        back();
    }
    // Giris Cıkıs Baslangıc
    public  function  login () {
       $exist =   $this->admin_model->get(array(
             'email' => $this->input->post("email"),
             'password' => $this->input->post("password")
         ));
       if (!empty($exist)) {
           $this->session->set_userdata("adminlogin",true);
           $this->session->set_userdata("admininfo",$exist);
           redirect(base_url("admin/panel"));
       }
       else {
           $errorMessage = "Email veya Şifreniz hatalıdır.";
           $this->session->set_flashdata('error',$errorMessage);
           redirect(base_url("admin"));
       }
    }
    public function logout () {
        $this->session->sess_destroy();
        redirect(base_url("admin"));
    }
    public function panel () {
        $viewData = new stdClass();
        $viewData->head = "Panel";
        $this->load->view("{$this->viewFolder}/panel",$viewData);
    }
    // Giris Cıkıs Bitis
    // AYARLAR BASLANGIC
    public function ayarlar () {
        $viewData = new stdClass();
        $viewData->head = "Ayarlar";
        $viewData->item = $this->admin_model->getConfig(array('id' => 16));
        $this->load->view("{$this->viewFolder}/ayarlar",$viewData);
    }
    public function ayarKaydet () {
        $config = $this->admin_model->getConfig(array('id' => postValue('id')));
        $data = array(
           'title' => postValue('title'),
            'info' => postValue("info"),
            'mail' => postValue("mail"),
            "facebook" => postValue("facebook"),
            "twitter" => postValue("twitter"),
            "instagram" => postValue("instagram"),
            "youtube" => postValue("youtube")
        );
        if($_FILES['logo']['size']>0) {
            $data['logo'] =imageupload("logo","config","jpg|png");
            unlink($config->logo);
        }
        if($_FILES['icon']['size']>0) {
            $data['icon'] =imageupload("icon","config","jpg|png");
            unlink($config->icon);
        }
        $check = $this->admin_model->updateConfig(array('id' => postValue('id')),$data);
        if($check) {
            $message = "başarılı";
            flash("success","check","Ayarlar Güncellendi");
            back();
        }
    }
    //AYARLAR Bitis

    //KATEGORİLER BASLANGIC
    public  function kategoriler () {
        $viewData = new stdClass();
        $viewData->head = "Kategoriler";
        $viewData->items = $this->category_model->getCategories();
        $this->load->view("admin_v/category/categories",$viewData);
    }
    public function  kategoriEkle () {
        $viewData = new stdClass();
        $viewData->head = "Kategori Ekle";
        if(isPost()) {
            $data = array(
                'name' => postValue('name'),
                'supercategory_id' => postValue('supercategory'),
                'slug' => convertToSeo(postValue('name'))
            );
            $this->category_model->insertCategory($data);
            flash('success','check','Kategori Eklendi');
        }
        $viewData->items = $this->supercategory_model->getCategories();
        $this->load->view("admin_v/category/categoriesAdd",$viewData);
    }
    public function  kategoriDuzenle ($id) {
        $viewData = new stdClass();
        $viewData->head = "Kategori Düzenle";
        if(isPost()) {
            $data = array(
                'name' => postValue('name'),
                'supercategory_id' => postValue('supercategory'),
                'slug' => convertToSeo(postValue('name'))
            );
            $this->category_model->updateCategory(array('id' => $id),$data);
            flash('success','check','Kategori Güncellendi');
        }
        $viewData->item = $this->category_model->getCategory(array('id' => $id));
        $viewData->superitems = $this->supercategory_model->getCategories();
        $this->load->view("admin_v/category/categoriesUpdate",$viewData);
    }
    public function  kategoriSil ($id) {
        $this->category_model->deleteCategory(array('id' => $id));
        redirect(base_url('admin/kategoriler'));
    }
    public  function ustKategoriler ()
    {
        $viewData = new stdClass();
        $viewData->head = "Üst Kategoriler";
        $viewData->items = $this->supercategory_model->getCategories();
        $this->load->view("admin_v/category/supercategories", $viewData);

    }
    public function  ustkategoriEkle () {
        $viewData = new stdClass();
        $viewData->head = "Üst Kategori Ekle";
        if(isPost()) {
            $data = array(
                'name' => postValue('name'),
                'slug' => convertToSeo(postValue('name'))
            );
            $this->supercategory_model->insertCategory($data);
            flash('success','check','Üst Kategori Eklendi');
        }
        $this->load->view("admin_v/category/superCategoriesAdd",$viewData);
    }
    public function  ustkategoriDuzenle ($id) {
        $viewData = new stdClass();
        $viewData->head = "Üst Kategori Düzenle";
        if(isPost()) {
            $data = array(
                'name' => postValue('name'),
                'slug' => convertToSeo(postValue('name'))
            );
            $this->supercategory_model->updateCategory(array('id' => $id),$data);
            flash('success','check','Kategori Güncellendi');
        }
        $viewData->item = $this->supercategory_model->getCategory(array('id' => $id));
        $this->load->view("admin_v/category/supercategoriesUpdate",$viewData);
    }
    public function  ustkategoriSil ($id) {
        $this->supercategory_model->deleteCategory(array('id' => $id));
        redirect(base_url('admin/ustkategoriler'));
    }
    // KATEGORİLER SON
    public function  kullanicilar () {
        $viewData = new stdClass();
        $viewData->head = "KULLANICILAR";
        $viewData->users = $this->user_model->getsUser();
        $this->load->view("admin_v/users/userList",$viewData);
    }
    public  function  kullaniciSil ($id) {
        $this->user_model->deleteUser(array(
            'id' => $id
        ));
        redirect(base_url('admin/kullanicilar'));
    }
    public function kullaniciGuncelle ($id) {
        $viewData = new stdClass();
        if(isPost()) {
            $data = array(
                'name' => postValue('name'),
                'surname' => postValue('surname'),
                'mail' => postValue('mail'),
                'phone' => postValue('phone'),
                'tcnumber' => postValue('tcnumber'),
            );
            $this->user_model->updateUser(array('id' => $id),$data);
            redirect(base_url("admin/kullanicilar"));
        }
        $viewData->head = "KULLANICI GÜNCELLE";
        $viewData->user = $this->user_model->getUser(
            array(
                'id' => $id
            )
        );
        $this->load->view("admin_v/users/userUpdate",$viewData);
    }
    public  function  siparisler () {
        $viewData = new stdClass();
        $viewData->head = "KULLANICI GÜNCELLE";
        $viewData->orders = $this->order_model->getOrders();
        $this->load->view("admin_v/orders/orderList",$viewData);
    }
    public  function  siparisGoruntule ($id) {
        $viewData= new stdClass();
        $viewData->head = "SİPARİŞ AYRINTILARI";
        $viewData->order = $this->order_model->getOrder(
            array(
                'id' => $id
            )
        );
        $viewData->adress= $this->adress_model->getAdress(array(
            'id' => $viewData->order->adress_id
        ));
        $viewData->order_items = $this->orderitem_model->getOrders(
            array(
                'order_id' => $id
            )
        );
        $this->load->view("admin_v/orders/orderDetail",$viewData);

    }
}
