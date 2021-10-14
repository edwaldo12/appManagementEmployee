<?php
class Jabatan_Model extends CI_Model
{

    public function getAllJabatan()
    {
        return $this->db->get("jabatan")->result_array();
    }
    public function getJabatan($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('jabatan')->row_array();
    }
    public function addNewJabatan($data)
    {
        return $this->db->insert('jabatan', $data);
    }
    public function delete($data)
    {
        return $this->db->delete('jabatan', array('id' => $data));
    }
    public function update($data)
    {
        extract($data);
        $this->db->where('id', $id);
        $this->db->update('jabatan', array('jabatan' => $jabatan));
    }
}
