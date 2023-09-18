<?php
class m_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function get_where($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
}
