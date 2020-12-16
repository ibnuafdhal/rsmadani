<?php

class Md_layanan extends CI_Model {
  public function home_layanan() {
    $query = $this->db->query('select * from layanan limit 4');
    return $query->result();
  }
  
  public function get(){
    return $this->db->get('layanan')->result();
  }
  
  public function get_id($id){
    return $this->db->get_where('layanan', ['id' => $id])->result();
  }
  
  public function add($data){
    return $this->db->insert('layanan', $data);
  }
  
  public function edit($data, $id){
    $this->db->update('layanan', $data, ['id' =>   $id]);
    return $this->db->affected_rows();
  }

  public function delete($id){
    $this->db->delete('layanan', ['id' => $id]);
    return $this->db->affected_rows();
  }
}