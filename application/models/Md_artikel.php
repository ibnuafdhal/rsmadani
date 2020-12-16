<?php

class Md_artikel extends CI_Model
{
  public function home_artikel()
  {
    $query = $this->db->query('select * from artikel order by artanggal asc limit 3');
    return $query->result();
  }

  public function get()
  {
    return $this->db->get('artikel')->result();
  }

  public function get_id($id)
  {
    return $this->db->get_where('artikel', ['id' => $id])->result();
  }

  public function add($data)
  {
    return $this->db->insert("artikel", $data);
  }

  public function edit($data, $id)
  {
    $this->db->update('artikel', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }

  public function delete($id)
  {
    $this->db->delete('artikel', ['id' => $id]);
    return $this->db->affected_rows();
  }
}