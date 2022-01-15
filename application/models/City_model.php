<?php

class city_model extends  CI_Model
{
    public  $tableName;
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "citys";
    }

    public function getCitys ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
    public function getCity ($where=array()) {
        return $this->db->where($where)->get($this->tableName)->row();
    }
}