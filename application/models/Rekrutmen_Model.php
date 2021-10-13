<?php
class Rekrutmen_Model extends CI_Model
{
    public function saveRekrutmen($data)
    {
        return $this->db->insert('rekrutmen', $data);
    }
}
