<?php

class supercategory_model extends  CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "supercategory";
    }
    public function getCategory ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function  getCategories ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function insertCategory ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function  updateCategory ($where = array(),$data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function deleteCategory ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }
}