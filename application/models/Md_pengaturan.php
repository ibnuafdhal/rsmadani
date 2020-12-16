<?php

class Md_pengaturan extends CI_Model {

  public function get(){
    return $this->db->get('situs')->row_array();
  }
  
  public function get_banner(){
    return $this->db->query('select * from banner inner join situs on banner.id_situs = situs.id')->result();
  }
  
  public function edit($data, $id){
    return $this->db->update('situs', $data, ['id' =>   $id]);
  }
} 

?>