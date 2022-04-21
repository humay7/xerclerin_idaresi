<?php

class odenis_table extends CI_Model
{
    
    
    function __construct(){
        parent::__construct();
    }
    function viewtable(){
        $query = $this->db->select('*')->from('odenis')->get();
        return $query->result();
    }
}

?>