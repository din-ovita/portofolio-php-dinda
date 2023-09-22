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
    public function get_by_id($table, $id_col, $id)
    {
        $data = $this->db->where($id_col, $id)->get($table);
        return $data;
    }
    public function up_data($table, $data, $where)
    {
        $data = $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }
    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }
    public function total($table)
    {
        return $this->db->get($table)->num_rows();
    }
}
