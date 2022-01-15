<?php

class product_model extends  CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "products";
    }
    public function getProduct ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function  getProducts ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function insertProduct ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function  updateProduct ($where = array(),$data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function deleteProduct ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }
}