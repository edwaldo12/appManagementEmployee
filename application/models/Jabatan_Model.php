<?php
class Jabatan_Model extends CI_Model
{

    public function getAllJabatan()
    {
        return $this->db->get("jabatan")->result_array();
    }
}
