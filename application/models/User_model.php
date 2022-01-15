<?php

class user_model extends  CI_Model
{
    public  $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "users";
    }
    public function addUser ($data = array()) {
        return $this->db->insert($this->tableName,$data);
    }
    public  function  getUser ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
    public  function  getsUser ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function updateUser ($where = array(),$data) {
        return $this->db->where($where)->update($this->tableName,$data);
    }
    public  function  deleteUser ($where = array()) {
        return $this->db->where($where)->delete($this->tableName);
    }

}