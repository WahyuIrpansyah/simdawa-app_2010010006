<?php

class JenisModel extends CI_Model
{
    private $tabel = "jenis_beasiswa";

    public function get_jenis()
    {
        return $this->db->get($this->tabel)->result();
    }

    function insert_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert($this->tabel, $data);
    }

    public function get_jenis_byid($id)
    {
        return $this->db->get_where($this->tabel, ['id' => $id])->row();
    }

    function update_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
    }

    function delete_jenis($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }
}
