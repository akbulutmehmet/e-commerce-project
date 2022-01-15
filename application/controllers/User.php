<?php

class User extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("config_model");
        $this->load->model("supercategory_model");
        $this->load->model("category_model");
        $this->load->model("product_model");
        $this->load->model("productimage_model");
        $this->load->model("user_model");
        $this->load->model("adress_model");
        $this->load->model("city_model");
        $this->load->model("town_model");
        $this->load->model("order_model");
        $this->load->model("orderitem_model");

    }

    public function index () {
        $viewData = new stdClass();
        if(!$this->session->userdata("userlogin")) {
            $viewData->config = $this->config_model->getConfig();
            $viewData->supercategory = $this->supercategory_model->getCategories();
            $viewData->category = $this->category_model->getCategories();
            $this->load->view("front_v/users/login",$viewData);
        }
        else {
            redirect(base_url("hesap-detaylari"));
        }

    }
    public function  giris () {
        if (isPost()) {
            $exist = $this->user_model->getUser(
                array(
                    'mail' => postValue('mail'),
                    'password' => postValue('password')
                )
            );
            if($exist != null) {
                $this->session->set_userdata("userlogin",true);
                $this->session->set_userdata("userinfo",$exist);
                redirect(base_url());
            }
            else {
                redirect(base_url("giris"));
            }

        }
    }
    public function  uyeol () {
       if(isPost()) {
           $data = array(
               'name' => postValue("name"),
               'surname' => postValue('surname'),
               'mail' => postValue('mail'),
               'phone' => postValue("phone"),
               'tcNumber' => postValue('tc'),
               'password' => postValue("password")
           );
           $control = $this->user_model->addUser($data);
           $exist = $this->user_model->getUser(array(
               'mail' => $data["mail"]
           ));
           if ($control != null && $exist != null) {
               $this->session->set_userdata("userlogin",true);
               $this->session->set_userdata("userinfo",$exist);
               redirect(base_url());

           }
           else {
               redirect(base_url("giris"));
           }
       }
    }
    public  function  uyeguncelle ($id) {
        if(isPost() && $this->session->userdata("userlogin") && $this->session->userdata("userinfo")->id == $id) {
            $data = array(
                'name' => postValue("name"),
                'surname' => postValue('surname'),
                'mail' => postValue('mail'),
                'phone' => postValue("phone"),
                'tcNumber' => postValue('tc'),
                'password' => postValue("password")
            );
            $control = $this->user_model->updateUser(array('id' => $id),$data);
            if($control) {
                back();
            }
            else {
                redirect(base_url());
            }
        }
    }
    public  function  hesapDetay () {
        $viewData = new stdClass();
        if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) {
            $viewData->config = $this->config_model->getConfig();
            $viewData->supercategory = $this->supercategory_model->getCategories();
            $viewData->category = $this->category_model->getCategories();
            $id = $this->session->userdata("userinfo")->id;
            $viewData->user = $this->user_model->getUser(array('id' => $id));
            $this->load->view("front_v/users/userDetail",$viewData);
        }
        else {
            redirect(base_url("giris"));
        }

    }
    public  function  adresgoster () {
        $viewData = new stdClass();
        if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) {
            $viewData->config = $this->config_model->getConfig();
            $viewData->supercategory = $this->supercategory_model->getCategories();
            $viewData->category = $this->category_model->getCategories();
            $id = $this->session->userdata("userinfo")->id;
            $viewData->adress = $this->adress_model->getsAdress(array('user_id' => $id));
            $this->load->view("front_v/users/adressList",$viewData);
        }
        else {
            redirect(base_url('giris'));
        }
    }
    public function adresEkle () {
        if(isPost() && $this->session->userdata("userlogin") && $this->session->userdata("userinfo")) {
            $id = $this->session->userdata("userinfo")->id;
            $data = array(
                'user_id'  => $id,
               'name' => postValue('name'),
               'city_id' => postValue('city'),
               'town_id' => postValue('town'),
                'neighborhood' => postValue('neighborhood'),
                'street' => postValue('street'),
                'apartman_no' => postValue('apartman_no')
            );
            $control = $this->adress_model->insertAdress($data);
            if ($control) {
                redirect(base_url('adres-bilgilerim'));
            }
        }
        $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        $viewData->citys = $this->city_model->getCitys();

        $this->load->view("front_v/users/adressAdd",$viewData);
    }
    public function  adresGuncelle ($id) {
        $viewData = new stdClass();
        if(isPost() && $this->session->userdata("userinfo")) {
            $data = array(
                'user_id'  => $this->session->userdata("userinfo")->id,
                'name' => postValue('name'),
                'city_id' => postValue('city'),
                'town_id' => postValue('town'),
                'neighborhood' => postValue('neighborhood'),
                'street' => postValue('street'),
                'apartman_no' => postValue('apartman_no')
            );
            $this->adress_model->updateAdress(array('id' => $id,'user_id' => $data['user_id']),$data);
            redirect(base_url("adres-bilgilerim"));
        }
        if($this->session->userdata("userinfo")) {
            $viewData->config = $this->config_model->getConfig();
            $viewData->supercategory = $this->supercategory_model->getCategories();
            $viewData->category = $this->category_model->getCategories();
            $viewData->citys = $this->city_model->getCitys();
            $user_id = $this->session->userdata("userinfo")->id;
            $viewData->adress= $this->adress_model->getAdress(array('id' => $id,'user_id' => $user_id));
            $this->load->view("front_v/users/adressUpdate",$viewData);
        }
        else {
            base_url();
        }
    }
    public function  adresSil ($id) {
        if($this->session->userdata("userinfo")) {
            $this->adress_model->deleteAdress(array('id' => $id));
            redirect(base_url("adres-bilgilerim"));
        }
    }

    public function  ilceGetir () {
        $city_id = postValue('country_id');
        $towns = $this->town_model->getTowns(
            array('city_id' => $city_id)
        );
        $ilceler = "";
         foreach ($towns as $town) {
             $ilceler .= "<option value='$town->id'>$town->name</option>";
         }
         echo $ilceler;

    }

    public  function  siparisGoster () {
        $viewData = new stdClass();
        if($this->session->userdata("userlogin") && $this->session->userdata("userinfo")) {
            $viewData->config = $this->config_model->getConfig();
            $viewData->supercategory = $this->supercategory_model->getCategories();
            $viewData->category = $this->category_model->getCategories();
            $id = $this->session->userdata("userinfo")->id;
            $viewData->orders = $this->order_model->getOrders(
                array('user_id' => $id)
            );

            $this->load->view("front_v/users/orderList",$viewData);
        }
        else {
            redirect(base_url('giris'));
        }
    }
    public function siparisGoruntule ($order_id) {
        if(!$this->session->userdata("userlogin") && !$this->session->userdata("userinfo")) {
            redirect(base_url('giris'));
        }
        $viewData = new stdClass();
        $viewData->config = $this->config_model->getConfig();
        $viewData->supercategory = $this->supercategory_model->getCategories();
        $viewData->category = $this->category_model->getCategories();
        $id = $this->session->userdata("userinfo")->id;
        $viewData->order = $this->order_model->getOrder(
            array(
                'id' => $order_id
            )
        );
        if($viewData->order->user_id != $id) {
            redirect(base_url());
        }
        $viewData->orderitems = $this->orderitem_model->getOrders(array(
            'order_id' => $viewData->order->id
        ));
        $this->load->view("front_v/users/orderDetail",$viewData);
     }
    public function logout () {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}