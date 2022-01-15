<?php

class orderitem_model extends  CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "order_item";
    }
    public function getOrder ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function  getOrders ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function insertOrder ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function  updateOrder ($where = array(),$data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function deleteOrder ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }
}