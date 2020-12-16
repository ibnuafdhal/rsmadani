<?php

class Md_admin extends CI_Model {

  public function get(){
    return $this->db->get('user')->result();
  }
  
  public function get_id($id){
    return $this->db->get_where('layanan', ['id' => $id])->result();
  }
  
  public function edit($data, $id){
    $this->db->update('layanan', $data, ['id' =>   $id]);
    return $this->db->affected_rows();
  }
}