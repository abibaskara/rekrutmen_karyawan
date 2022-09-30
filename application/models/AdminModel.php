<?php
class AdminModel extends CI_Model
{
    // #################GENERAL#############################//

    function getData($database)
    {
        return $this->db->get($database)->result();
    }

    function createData($database, $data)
    {
        return $this->db->insert($database, $data);
    }

    function updateData($database, $data, $id)
    {
        return $this->db->update($database, $data, $id);
    }

    function deleteData($database, $id)
    {
        return $this->db->delete($database, $id);
    }

    function cekData($database, $data)
    {
        return $this->db->get_where($database, $data)->row_array();
    }

    function join($database, $database2, $data)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->join($database2, $data);
        return $this->db->get()->result();
    }

    function doubleJoin($database, $database2, $database3, $data1, $data2)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->join($database2, $data1);
        $this->db->join($database3, $data2);
        return $this->db->get()->result();
    }

    function tripleJoin($database, $database2, $database3, $database4, $data1, $data2, $data3)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->join($database2, $data1);
        $this->db->join($database3, $data2);
        $this->db->join($database4, $data3);
        return $this->db->get()->result();
    }

    function getWhere($database, $data)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($data);
        return $this->db->get();
    }

    function get_edit_user($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_user', $id);
        return $this->db->get()->row_array();
    }

    function get_edit_lowongan($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_lowongan', $id);
        return $this->db->get()->row_array();
    }

    function get_id_soal($database)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->order_by('id_soal', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    function get_soal($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_lowongan', $id);
        return $this->db->get()->result();
    }

    function get_show_lowongan($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->join('departement', 'departement.id_departement=lowongan.id_departement');
        $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan.id_jabatan');
        $this->db->where('id_lowongan', $id);
        return $this->db->get()->row_array();
    }

    function get_psikotes($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_lowongan', $id);
        return $this->db->get()->result();
    }

    function get_pendidikan($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        return $this->db->get()->result();
    }

    function get_pengalaman($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        return $this->db->get()->result();
    }

    function get_keahlian($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        return $this->db->get()->result();
    }

    function get_training($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        return $this->db->get()->result();
    }

    function get_detail_lowongan($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_lowongan', $id);
        $this->db->join('departement', 'departement.id_departement = lowongan.id_departement');
        $this->db->join('jabatan', 'jabatan.id_jabatan = lowongan.id_jabatan');

        return $this->db->get()->row_array();
    }

    function cekApply($database, $id, $id_user)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_user', $id_user);
        $this->db->where('id_lowongan', $id);

        return $this->db->get()->row_array();
    }

    function get_apply($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');
        $this->db->join('lowongan', 'lowongan.id_lowongan=apply_job.id_lowongan');
        $this->db->order_by('tgl_lamar', 'DESC');

        return $this->db->get()->result();
    }

    function get_cari_lowongan($database, $database2, $database3, $data1, $data2)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->join($database2, $data1);
        $this->db->join($database3, $data2);
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    function get_detail_calon_pelamar($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_apply_job', $id);
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');
        $this->db->join('lowongan', 'lowongan.id_lowongan=apply_job.id_lowongan');
        $this->db->join('departement', 'departement.id_departement=lowongan.id_departement');
        $this->db->join('jabatan', 'jabatan.id_jabatan=lowongan.id_jabatan');

        return $this->db->get()->row_array();
    }

    public function get_kunjaw($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_soal', $id);
        return $this->db->get()->row_array();
    }

    public function get_kunjaw_psikotes($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where('id_psikotes', $id);
        return $this->db->get()->row_array();
    }

    public function total($database, $id)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from($database);
        $this->db->where($id);
        $this->db->where('status_hasil', 'Diterima');

        return $this->db->get()->row_array();
    }

    public function get_pelamar_diterima($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        $this->db->where('status_hasil', 'Diterima');
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');

        return $this->db->get()->result();
    }

    public function total_tidak($database, $id)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from($database);
        $this->db->where($id);
        $this->db->where('status_hasil', 'Tidak Diterima');

        return $this->db->get()->row_array();
    }

    public function get_pelamar_tidak_diterima($database, $id)
    {
        $this->db->select('*');
        $this->db->from($database);
        $this->db->where($id);
        $this->db->where('status_hasil', 'Tidak Diterima');
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');

        return $this->db->get()->result();
    }

    public function total_lowongan($database)
    {
        $this->db->select('COUNT(id_lowongan) AS Total');
        $this->db->from($database);

        return $this->db->get()->row_array();
    }

    public function total_pelamar($database, $id)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from($database);
        $this->db->where($id);

        return $this->db->get()->row_array();
    }

    public function total_lamaran($database, $id)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from($database);
        $this->db->where($id);

        return $this->db->get()->row_array();
    }

    public function total_user($database, $where, $id)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from($database);
        $this->db->where($where);
        $this->db->where($id);

        return $this->db->get()->row_array();
    }

    public function get_laporan_diterima($start_date, $end_date)
    {
        $this->db->select('*');
        $this->db->from('apply_job');
        $this->db->join('lowongan', 'lowongan.id_lowongan=apply_job.id_lowongan');
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');
        $this->db->where('tgl_lamar BETWEEN "' . $start_date . '" AND "' . $end_date . '"');
        $this->db->where('status_hasil', 'Diterima');
        return $this->db->get();
    }

    public function get_laporan_total($start_date, $end_date)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from('apply_job');
        $this->db->where('tgl_lamar BETWEEN "' . $start_date . '" AND "' . $end_date . '"');
        $this->db->where('status_hasil', 'Diterima');
        return $this->db->get();
    }

    public function get_laporan_tidak_diterima($start_date, $end_date)
    {
        $this->db->select('*');
        $this->db->from('apply_job');
        $this->db->join('lowongan', 'lowongan.id_lowongan=apply_job.id_lowongan');
        $this->db->join('pelamar', 'pelamar.id_pelamar=apply_job.id_pelamar');
        $this->db->where('tgl_lamar BETWEEN "' . $start_date . '" AND "' . $end_date . '"');
        $this->db->where('status_hasil', 'Tidak Diterima');
        return $this->db->get();
    }

    public function get_laporan_tidak_total($start_date, $end_date)
    {
        $this->db->select('COUNT(id_apply_job) AS Total');
        $this->db->from('apply_job');
        $this->db->where('tgl_lamar BETWEEN "' . $start_date . '" AND "' . $end_date . '"');
        $this->db->where('status_hasil', 'Tidak Diterima');
        return $this->db->get();
    }
}
