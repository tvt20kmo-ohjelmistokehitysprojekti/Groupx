<?php
/**
 *
 */
class Book_model extends CI_model
{

  function get_books(){
    $this->db->select('*');
    $this->db->from('books');
    return $this->db->get()->result_array();
  }
  function get_book($id){
    $this->db->select('*');
    $this->db->from('books');
    $this->db->where('book_id',$id);
    return $this->db->get()->result_array();
  }
  function add_book($add_data){
    $this->db->insert('books',$add_data);
  }
  function update_book($id, $update_data){
    $this->db->where('book_id',$id);
    $this->db->update('books',$update_data);
  }

  function delete_book($id){
    $this->db->where('book_id',$id);
    $this->db->delete('books');
  }


}
