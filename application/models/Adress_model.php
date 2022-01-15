<?php

class adress_model extends  CI_Model
{
    public  $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "adress";
    }
    public function addAdress ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public  function  getAdress ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public  function  getsAdress ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function updateAdress ($where = array(),$data) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public function  insertAdress ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public function deleteAdress ($where=array()) {
        return $this->db->where($where)->delete($this->tableName);
    }

}