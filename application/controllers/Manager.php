<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
        $this->AuthModel->cekLoginManager();
    }

    public function index()
    {
        $where_calon['status_hasil'] = 'Sedang Di Proses';
        $where_diterima['status_hasil'] = 'Diterima';
        $where_tidak['status_hasil'] = 'Tidak Diterima';
        $data = [
            'lowongan' => $this->AdminModel->total_lowongan('lowongan'),
            'calon_pelamar' => $this->AdminModel->total_pelamar('apply_job', $where_calon),
            'pelamar_diterima' => $this->AdminModel->total_pelamar('apply_job', $where_diterima),
            'pelamar_tidak_terima' => $this->AdminModel->total_pelamar('apply_job', $where_tidak),
        ];
        $this->template->load('layout/layout', 'manager/dashboard', $data);
    }

    // ############################## CALON PELAMAR ############################## //
    public function Calon_Pelamar()
    {
        $id['status_hasil'] = 'Sedang Di Proses';
        $data = [
            'apply' => $this->AdminModel->get_apply('apply_job', $id)
        ];

        $this->template->load('layout/layout', 'manager/calon_pelamar', $data);
    }

    public function Detail_Calon_Pelamar($id)
    {
        $data_apply = $this->AdminModel->get_detail_calon_pelamar('apply_job', $id);

        $id_user['id_user'] = $data_apply['id_user'];

        $data = [
            'apply' => $data_apply,
            'bahasa' => $this->AdminModel->getWhere('bahasa', $id_user)->result(),
            'keahlian' => $this->AdminModel->getWhere('keahlian', $id_user)->result(),
            'pendidikan' => $this->AdminModel->getWhere('pendidikan', $id_user)->result(),
            'pengalaman' => $this->AdminModel->getWhere('pengalaman', $id_user)->result(),
            'training' => $this->AdminModel->getWhere('training', $id_user)->result(),
        ];

        $this->template->load('layout/layout', 'manager/calon_pelamar_detail', $data);
    }

    public function ApproveApply($id)
    {
        $id_apply = $id;
        $ids['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Diterima',
            ];

            $this->AdminModel->updateData('apply_job', $data, $ids);
            $this->session->set_flashdata('success', 'Calon Pelamar Berhasil ke tahap selanjutnya!');
            redirect("Manager/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Manager/Detail_Calon_Pelamar/$id_apply");
        }
    }

    public function CancelApply($id)
    {
        $id_apply = $id;
        $where['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Tidak Diterima',
            ];

            $this->AdminModel->updateData('apply_job', $data, $where);
            $this->session->set_flashdata('success', 'Calon Pelamar Tidak Berhasil ke tahap selanjutnya!');
            redirect("Manager/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Manager/Detail_Calon_Pelamar/$id_apply");
        }
    }

    // ############################## PELAMAR DITERIMA ############################## //

    public function Pelamar_Diterima()
    {
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';
        $data = [
            'lowongan' => $this->AdminModel->doubleJoin('lowongan', 'departement', 'jabatan', $join, $join2),
        ];

        $this->template->load('layout/layout', 'manager/pelamar_diterima', $data);
    }

    public function Detail_Pelamar_Diterima($id)
    {
        $id_lowongan['id_lowongan'] = $id;
        $data = [
            'total' => $this->AdminModel->total('apply_job', $id_lowongan),
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id),
            'pelamar' => $this->AdminModel->get_pelamar_diterima('apply_job', $id_lowongan),
        ];

        $this->template->load('layout/layout', 'manager/detail_pelamar_diterima', $data);
    }

    public function Detail_Pelamar($id)
    {
        $data_apply = $this->AdminModel->get_detail_calon_pelamar('apply_job', $id);

        $id_user['id_user'] = $data_apply['id_user'];

        $data = [
            'apply' => $data_apply,
            'bahasa' => $this->AdminModel->getWhere('bahasa', $id_user)->result(),
            'keahlian' => $this->AdminModel->getWhere('keahlian', $id_user)->result(),
            'pendidikan' => $this->AdminModel->getWhere('pendidikan', $id_user)->result(),
            'pengalaman' => $this->AdminModel->getWhere('pengalaman', $id_user)->result(),
            'training' => $this->AdminModel->getWhere('training', $id_user)->result(),
        ];

        $this->template->load('layout/layout', 'manager/pelamar_detail', $data);
    }

    // ############################## PELAMAR TIDAK DITERIMA ############################## //

    public function Pelamar_Tidak_Diterima()
    {
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';
        $data = [
            'lowongan' => $this->AdminModel->doubleJoin('lowongan', 'departement', 'jabatan', $join, $join2),
        ];

        $this->template->load('layout/layout', 'manager/pelamar_tidak_diterima', $data);
    }

    public function Detail_Pelamar_Tidak_Diterima($id)
    {
        $id_lowongan['id_lowongan'] = $id;
        $data = [
            'total' => $this->AdminModel->total_tidak('apply_job', $id_lowongan),
            'lowongan' => $this->AdminModel->get_detail_lowongan('lowongan', $id),
            'pelamar' => $this->AdminModel->get_pelamar_tidak_diterima('apply_job', $id_lowongan),
        ];

        $this->template->load('layout/layout', 'manager/detail_pelamar_tidak_diterima', $data);
    }

    // ############################## LAPORAN PELAMAR DITERIMA ############################## //
    public function Laporan_Pelamar_Diterima()
    {
        $this->template->load('layout/layout', 'manager/laporan_diterima');
    }

    public function get_laporan_diterima()
    {
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');
        if (!$this->input->is_ajax_request()) {
            $result['status'] = false;
        } else {
            $result['data'] = $this->AdminModel->get_laporan_diterima($start_date, $end_date)->result();
            $result['total'] = $this->AdminModel->get_laporan_total($start_date, $end_date)->row_array();
            $result['status'] = true;
        }
        echo json_encode($result);
    }

    public function Laporan_Pelamar_Tidak_Diterima()
    {
        $this->template->load('layout/layout', 'manager/laporan_tidak_diterima');
    }

    public function get_laporan_tidak_diterima()
    {
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');
        if (!$this->input->is_ajax_request()) {
            $result['status'] = false;
        } else {
            $result['data'] = $this->AdminModel->get_laporan_tidak_diterima($start_date, $end_date)->result();
            $result['total'] = $this->AdminModel->get_laporan_tidak_total($start_date, $end_date)->row_array();
            $result['status'] = true;
        }
        echo json_encode($result);
    }

    // ############################## MY PROFILE ############################## //

    public function My_Profile()
    {
        $this->template->load('layout/layout', 'Manager/my_profile');
    }

    public function update_profile()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $foto = $_FILES['foto']['name'];
        $old_foto = $this->input->post('old_foto');
        try {
            if ($foto) {
                if ($old_foto == 'default.png') {
                    $config['upload_path'] = './assets/profile/';
                    $config['allowed_types'] = 'jpg|png|jpeg';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('Manager/My_Profile');
                    } else {
                        $data = [
                            'nama_user' => $this->input->post('nama_user'),
                            'email' => $this->input->post('email'),
                            'no_telp' => $this->input->post('no_telp'),
                            'foto' => $this->upload->data('file_name'),
                        ];
                    }
                } else {
                    unlink('./assets/profile/' . $old_foto);
                    $config['upload_path'] = './assets/profile/';
                    $config['allowed_types'] = 'jpg|png|jpeg';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                        redirect('Manager/My_Profile');
                    } else {
                        $data = [
                            'nama_user' => $this->input->post('nama_user'),
                            'email' => $this->input->post('email'),
                            'no_telp' => $this->input->post('no_telp'),
                            'foto' => $this->upload->data('file_name'),
                        ];
                    }
                }
            } else {
                $data = [
                    'nama_user' => $this->input->post('nama_user'),
                    'email' => $this->input->post('email'),
                    'no_telp' => $this->input->post('no_telp'),
                ];
            }

            $this->AdminModel->updateData('user', $data, $id);

            $this->session->set_flashdata('success', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Manager/My_Profile');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Manager/My_Profile');
        }
    }

    // ############################## SETTING ############################## //

    public function Settings()
    {
        $this->template->load('layout/layout', 'Manager/setting');
    }

    public function change_password()
    {
        $id['id_user'] = $_SESSION['id_user'];
        $old_password = $this->input->post('old_password');
        $password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        try {
            $cekPasswordOld = $this->AdminModel->cekData('user', $id);
            if (password_verify($old_password, $cekPasswordOld['password'])) {
                if ($confirm_password == $password) {
                    $data = [
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    $this->AdminModel->updateData('user', $data, $id);
                    $this->session->set_flashdata('success', 'Password Berhasil Diupdate!, Silahkan Logout Akun Anda dan Login Kembali!');
                    redirect("Manager/Settings");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect("Manager/Settings");
                }
            } else {
                $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                redirect("Manager/Settings");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Password Gagal Diupdate!');
            redirect("Manager/Settings");
        }
    }
}
