<?php

class order_model extends  CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "orders";
    }
    public function getOrder ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function  getOrders ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function insertOrder ($data = array()) {
        $this->db->insert($this->tableName,$data);
        return $this->db->insert_id();
    }
    public function  updateOrder ($where = array(),$data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function deleteOrder ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }
}