<?php

class town_model extends  CI_Model
{
    public  $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "towns";
    }

    public function getTowns ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function getTown ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
}