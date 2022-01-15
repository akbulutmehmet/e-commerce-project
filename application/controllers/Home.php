<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('config_model');
        $this->load->model('supercategory_model');
        $this->load->model("category_model");
        $this->load->model("product_model");
        $this->load->model("productimage_model");
        $this->load->library("cart");
        $this->load->model("orderitem_model");
        $this->load->model("order_model");
    }

    public  function index () {
        $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        $viewData->products = $this->product_model->getProducts(
            array(
                'active' =>1
            )
        );
         $this->load->view("front_v/home",$viewData);
    }
    public function  kategoriGoster ($seo) {
        $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        $supercategory = $this->supercategory_model->getCategory(array('slug' => $seo));
        $category = $this->category_model->getCategory(array('slug' => $seo));
        if($supercategory != null) {
            $viewData->cat = $supercategory;
            $viewData->products = $this->product_model->getProducts(array('supercategory_id' => $supercategory->id));

            $this->load->view("front_v/products/categories",$viewData);
        }
        else if ($category != null) {
            $viewData->cat = $category;
            $viewData->products = $this->product_model->getProducts(array('category_id' => $category->id));

            $this->load->view("front_v/products/categories",$viewData);
        }
    }
    public  function  urunGoster ($seo) {
        $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        $product = $this->product_model->getProduct(array('slug' => $seo,'active' =>1));
        if($product != null) {
            $viewData->product = $product;
            $viewData->products = $this->product_model->getProducts(
                array('id !=' =>     $viewData->product->id,
                    'active' =>1
                )
            );
            $this->load->view("front_v/products/products",$viewData);
        }
    }
    public  function sepeteEkle () {
            $product = $this->product_model->getProduct(
                array(
                    'id'=> postValue('id')
                )
            );
            $data = array(
                'id' => $product->id,
                'qty' => postValue('qty'),
                'name' => $product->title,
                'slug' => $product->slug,
                'price' => ($product->discount != null) ? $product->discount : $product->price,
            );
            $this->cart->insert($data);

    }
    public  function  sepet () { $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        if(!$this->session->userdata("userlogin") && !$this->session->userdata("userinfo")) {
            redirect(base_url('giris'));
        }
        $this->load->view("front_v/cart/cart",$viewData);
    }
    public function sepetBosalt () {
        $this->cart->destroy();
    }
    public function  sepetUrunsil () {
        $row = postValue('rowid');
        $this->cart->remove($row);
    }
    public function sepetGuncelle () {
       $data = array(
           'qty' => postValue('qty'),
           'rowid' => postValue('rowid')
       );
       $this->cart->update($data);
    }
    public function  siparisKaydet () {
        if($this->session->userdata("userlogin") && $this->session->userdata("userinfo") && $this->cart->total() > 0) {
            $contens = $this->cart->contents();
            $order = array(
                'user_id' => $this->session->userdata("userinfo")->id,
                'adress_id' => postValue('adres_id'),
                'total_price' => $this->cart->total()
            );
            $order_id = $this->order_model->insertOrder($order);
            foreach ($contens as $content) {
                $order_data = array(
                    'order_id' => $order_id,
                    'product_id' => $content['id'],
                    'qty' => $content['qty'],
                    'total' => $content['subtotal']
                );
                $this->orderitem_model->insertOrder($order_data);
            }
            $this->cart->destroy();
        }
    }
}