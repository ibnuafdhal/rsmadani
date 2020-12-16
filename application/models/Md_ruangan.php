<?php

class Md_ruangan extends CI_Model
{
  public function home_ruangan()
  {
    $query = $this->db->query('select * from ruangan ORDER BY id');
    return $query->result();
  }

  public function get()
  {
    return $this->db->get('ruangan')->result();
  }



  public function get_dtl($id)
  {
    return $this->db->query('select * from ruangan inner join dtl_ruangan on ruangan.id = dtl_ruangan.id_kategori where ruangan.id = ' . $id)->result();
  }

  public function get_id($id)
  {
    return $this->db->get_where('ruangan', ['id' => $id])->result();
  }

  public function edit($data, $id)
  {
    $this->db->update('ruangan', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }

  public function delete($id)
  {
    $this->db->delete('ruangan', ['id' => $id]);
    return $this->db->affected_rows();
  }
}