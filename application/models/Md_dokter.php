<?php

class Md_dokter extends CI_Model
{
  public function home_dokter()
  {
    return $this->db->get_where('dokter', ['is_active' => 1])->result();
  }

  public function get()
  {
    return $this->db->get('dokter')->result();
  }

  public function get_profil_dokter($page)
  {
    $offset = ($page - 1) * 4;
    $dataperpage = 4;
    return $this->db->query("select * from dokter limit $offset, $dataperpage")->result();
  }

  // public function get_profil_dokter_abjad($abjad)
  // {
  //   return $this->db->query("select * from dokter where ")->result();
  // }

  public function get_id($id)
  {
    return $this->db->get_where("dokter", ["id" => $id])->result();
  }

  public function edit($data, $id)
  {
    $this->db->update('dokter', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }

  public function check($id)
  {
    return $this->db->update('dokter', ['is_active' => 1], ['id' => $id]);
  }
  public function uncheck($id)
  {
    return $this->db->update('dokter', ['is_active' => 0], ['id' => $id]);
  }

  public function delete($id)
  {
    $this->db->delete('dokter', ['id' => $id]);
    return $this->db->affected_rows();
  }
}
