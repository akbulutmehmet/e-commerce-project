<?php

class admin_model extends CI_Model
{
    public  $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "admin";
    }
    public function get ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public function insertConfig ($data = array()) {
        return $this->db->insert("config",$data);
    }
    public function getConfig ($where = array()) {
        return $this->db->where($where)->get("config")->row();
    }
    public  function  updateConfig ($where = array() , $data = array()) {
        return $this->db->where($where)->update("config",$data);
    }

}