<?php
function  active ($menu) {
    $ci = get_instance();
        if($ci->uri->segment(2) == $menu) {
            echo "active";
        }
}
function postValue ($name) {
    $ci = get_instance();
    return $ci->input->post($name,true);
}
function imageupload ($name,$path,$type="jpg|png|gif|ico") {
    $ci = get_instance();
    $config['upload_path']          = 'assests/uploads/'.$path.'/';
    $config['allowed_types']        = $type;
    $ci->upload->initialize($config);

    if($ci->upload->do_upload($name)) {
        $data = $ci->upload->data();
        return $config['upload_path'].$data['file_name'];
    }
    else {
        echo $ci->upload->display_errors();
    }
}
function back () {
   return  redirect($_SERVER['HTTP_REFERER']);
}
function flash ($type,$icon,$title,$message=null) {
    $ci = get_instance();
    $message = '<div class="alert alert-'. $type. ' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-'. $icon.'"></i> '.$title.'!</h4>
                '.$message . '
              </div>';
    $ci->session->set_flashdata('flashmessage',$message);
}
function flashRead ($flash="flashmessage") {
    $ci  = get_instance();
    echo $ci->session->flashdata($flash);
    $ci->session->set_flashdata($flash,'');
}
function isPost () {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;
    }
    else {
        return false;
    }
}
function convertToSeo($text) {
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}
function getSuperCategory ($id) {
    $ci = get_instance();
    $ci->load->model("supercategory_model");
    return $ci->supercategory_model->getCategory(array('id' => $id));
}
function getCategory ($id) {
    $ci = get_instance();
    $ci->load->model("category_model");
    return $ci->category_model->getCategory(array('id' => $id));
}

function getProductsimage ($where = array()) {
    $ci = get_instance();
    $ci->load->model("productimage_model");
    return $ci->productimage_model->getProductsimage($where);
}
function getProductimage ($where = array()) {
    $ci = get_instance();
    $ci->load->model("productimage_model");
    return $ci->productimage_model->getProductimage($where);
}
function getCity ($where = array()) {
    $ci = get_instance();
    $ci->load->model("city_model");
    return $ci->city_model->getCity($where);
}
function getTown ($where = array()) {
    $ci = get_instance();
    $ci->load->model("town_model");
    return $ci->town_model->getTown($where);
}
function getsAdress ($where=array()) {
    $ci = get_instance();
    $ci->load->model("adress_model");
    return $ci->adress_model->getsAdress($where);
}
function getAdress ($where=array()) {
    $ci = get_instance();
    $ci->load->model("adress_model");
    return $ci->adress_model->getAdress($where);
}
function getProduct ($where=array()) {
    $ci = get_instance();
    $ci->load->model("product_model");
    return $ci->product_model->getProduct($where);
}
function getUser ($where=array()) {
    $ci = get_instance();
    $ci->load->model("user_model");
    return $ci->user_model->getUser($where);
}