<?php

class nov_model extends CI_Model
{
    
    private $odenis = 'odenis';
    function __construct(){
        parent::__construct();
    }
    function fetch_nov(){
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('odenis_novu');
        return $query->result();
    }
    function fetch_valyuta(){
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('valyuta');
        return $query->result();
    }
    function insert_odenis($mebleg, $kategoriya, $valyuta, $nov, $rey ){
        $data = array('mebleg' => $mebleg, 'kategoriya'=>$kategoriya, 'valyuta'=>$valyuta, 'nov'=>$nov, 'rey'=>$rey);
        $result = $this->db->insert($this->odenis, $data);
        if($result !== NULL){
            return TRUE;
        }
        return FALSE;
    }

}

?>