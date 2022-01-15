<?php

class config_model extends CI_Model
{
    public $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "config";
    }

    public function insertConfig ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function getConfig ($where = array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public  function  updateConfig ($where = array() , $data = array()) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
}