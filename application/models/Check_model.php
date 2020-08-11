<?php
/**
 *
 */
class Check_model extends CI_model {
    function check_name($id, $name){
    $this->db->select('count(*) as c');
    $this->db->from('book');
    $this->db->where('id_book',$id);
    $this->db->where('name',$name);
    $result=$this->db->get()->row('c');
    if($result >0 ){
      return TRUE;
    }
    else{
      return FALSE;
    }
    }
  }