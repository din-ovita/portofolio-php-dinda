<?php
function tampil_full_kelas_byid($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $result = $ci->db->where('id_kelas', $id)->get('kelas');
    foreach ($result->result() as $c) {
        $stmt = $c->tingkat . ' ' . $c->jurusan;
        return $stmt;
    }
}
function walikelas($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $res = $ci->db->where('id_guru', $id)->get('guru');
    foreach ($res->result() as $g) {
        $sql = $g->nama_guru;
        return $sql;
    }
}
function mapel($id)
{
    $ci = &get_instance();
    $ci->load->database();
    $res = $ci->db->where('id_mapel', $id)->get('mapel');
    foreach ($res->result() as $g) {
        $sql = $g->nama_mapel;
        return $sql;
    }
}