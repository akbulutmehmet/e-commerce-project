<?php

class productimage_model extends  CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "product_image";
    }
    public function getProductimage ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function  getProductsimage ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function insertProductimage ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function  updateProductimage ($where = array(),$data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function deleteProductimage ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }
}