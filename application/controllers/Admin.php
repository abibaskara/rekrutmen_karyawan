<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->model('AdminModel');
        $this->AuthModel->cekLoginAdmin();
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
        $this->template->load('layout/layout', 'admin/dashboard', $data);
    }

    // ############################## USER ############################## //
    public function User()
    {
        $database = "user";
        $data = [
            'user' => $this->AdminModel->getData($database)
        ];
        $this->template->load('layout/layout', 'admin/user', $data);
    }

    public function tambahUser()
    {
        $database = "user";
        $nama_user = $this->input->post('nama_user');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $role = $this->input->post('role');
        $foto = $_FILES['foto']['name'];
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $data['email'] = $email;
        $cekEmail = $this->AdminModel->cekData($database, $data);
        try {
            if (empty($cekEmail)) {
                if ($password == $confirm_password) {
                    if (empty($foto)) {
                        $data = [
                            'nama_user' => $nama_user,
                            'email' => $email,
                            'no_telp' => $no_telp,
                            'role' => $role,
                            'foto' => 'default.png',
                            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                        ];
                    } else {
                        $config['upload_path'] = './assets/profile/';
                        $config['allowed_types'] = 'jpg|png|jpeg';

                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('foto')) {
                            $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                            redirect('Admin/User');
                        } else {
                            $data = [
                                'nama_user' => $nama_user,
                                'email' => $email,
                                'no_telp' => $no_telp,
                                'role' => $role,
                                'foto' => $this->upload->data('file_name'),
                                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                            ];
                        }
                    }
                    $this->AdminModel->createData($database, $data);
                    $this->session->set_flashdata('success', 'User Berhasil Ditambahkan!');
                    redirect('Admin/User');
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect('Admin/User');
                }
            } else {
                $this->session->set_flashdata('error', 'Email Sudah Terdaftar!');
                redirect('Admin/User');
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Menambahkan User!');
            redirect('Admin/User');
        }
    }

    public function deleteUser()
    {
        $database = "user";
        $id['id_user'] = $this->input->post('id');
        $foto = $this->input->post('foto');
        try {
            if ($foto == 'default.png') {
                $this->AdminModel->deleteData($database, $id);
            } else {
                unlink('./assets/profile/' . $foto);
                $this->AdminModel->deleteData($database, $id);
            }
            $this->session->set_flashdata('success', 'User Berhasil Dihapus!');
            redirect('Admin/User');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'User Gagal Dihapus!');
            redirect('Admin/User');
        }
    }

    public function Edit_User($id)
    {
        $database = "user";
        $data = [
            'user' => $this->AdminModel->get_edit_user($database, $id)
        ];
        $this->template->load('layout/layout', 'admin/user_edit', $data);
    }

    public function editUser()
    {
        $database = "user";
        $id['id_user'] = $this->input->post('id');
        $id_user = $this->input->post('id');
        $old_foto = $this->input->post('old_foto');
        $old_password = $this->input->post('old_password');
        $password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $nama_user = $this->input->post('nama_user');
        $role = $this->input->post('role');
        $foto = $_FILES['foto']['name'];

        try {
            if ($password != "") {
                $cekPasswordOld = $this->AdminModel->cekData($database, $id);
                if (password_verify($old_password, $cekPasswordOld['password'])) {
                    if ($confirm_password == $password) {
                        if ($foto) {
                            if ($old_foto == 'default.png') {
                                $config['upload_path'] = './assets/profile/';
                                $config['allowed_types'] = 'jpg|png|jpeg';

                                $this->load->library('upload', $config);
                                if (!$this->upload->do_upload('foto')) {
                                    $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                                    redirect('Admin/User');
                                } else {
                                    $data = [
                                        'nama_user' => $nama_user,
                                        'email' => $email,
                                        'no_telp' => $no_telp,
                                        'role' => $role,
                                        'foto' => $this->upload->data('file_name'),
                                        'password' => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT),
                                    ];
                                }
                            } else {
                                unlink('./assets/profile/' . $old_foto);
                                $config['upload_path'] = './assets/profile/';
                                $config['allowed_types'] = 'jpg|png|jpeg';

                                $this->load->library('upload', $config);
                                if (!$this->upload->do_upload('foto')) {
                                    $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                                    redirect('Admin/User');
                                } else {
                                    $data = [
                                        'nama_user' => $nama_user,
                                        'email' => $email,
                                        'no_telp' => $no_telp,
                                        'role' => $role,
                                        'foto' => $this->upload->data('file_name'),
                                        'password' => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT),
                                    ];
                                }
                            }
                        } else {
                            $data = [
                                'nama_user' => $nama_user,
                                'email' => $email,
                                'no_telp' => $no_telp,
                                'role' => $role,
                                'password' => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT),
                            ];
                        }
                        $this->AdminModel->updateData($database, $data, $id);
                        $this->session->set_flashdata('success', 'User Berhasil Diupdate!');
                        redirect("Admin/Edit_User/$id_user");
                    } else {
                        $this->session->set_flashdata('error', 'Password Tidak Sama!');
                        redirect("Admin/Edit_User/$id_user");
                    }
                } else {
                    $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                    redirect("Admin/Edit_User/$id_user");
                }
            } else {
                if ($foto) {
                    if ($old_foto == 'default.png') {
                        $config['upload_path'] = './assets/profile/';
                        $config['allowed_types'] = 'jpg|png|jpeg';

                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('foto')) {
                            $this->session->set_flashdata('error', 'Gagal Mengupload Foto');
                            redirect('Admin/User');
                        } else {
                            $data = [
                                'nama_user' => $nama_user,
                                'email' => $email,
                                'no_telp' => $no_telp,
                                'role' => $role,
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
                            redirect('Admin/User');
                        } else {
                            $data = [
                                'nama_user' => $nama_user,
                                'email' => $email,
                                'no_telp' => $no_telp,
                                'role' => $role,
                                'foto' => $this->upload->data('file_name'),
                            ];
                        }
                    }
                } else {
                    $data = [
                        'nama_user' => $nama_user,
                        'email' => $email,
                        'no_telp' => $no_telp,
                        'role' => $role,
                    ];
                }
                $this->AdminModel->updateData($database, $data, $id);
                $this->session->set_flashdata('success', 'User Berhasil Diupdate!');
                redirect("Admin/Edit_User/$id_user");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'User Gagal Diupdate!');
            redirect("Admin/Edit_User/$id_user");
        }
    }

    // ############################## DATA DEPARTEMENT ############################## //

    public function Departement()
    {
        $data = [
            'departement' => $this->AdminModel->getData('departement'),
        ];

        $this->template->load('layout/layout', 'admin/departement', $data);
    }

    public function tambahDepartement()
    {
        $nama_departement = $this->input->post('nama_departement');
        $data = [
            'nama_departement' => $nama_departement,
        ];
        $cekData = $this->AdminModel->cekData('departement', $data);

        try {
            if ($cekData) {
                $this->session->set_flashdata('error', 'Data Departement Sudah Ada!');
                redirect("Admin/Departement");
            } else {
                $this->AdminModel->createData('departement', $data);
                $this->session->set_flashdata('success', 'Data Departement Berhasil Ditambahkan!');
                redirect("Admin/Departement");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Departement Gagal Ditambahkan!');
            redirect("Admin/Departement");
        }
    }

    public function editDepartement()
    {
        $nama_departement = $this->input->post('nama_departement');
        $id['id_departement'] = $this->input->post('id');

        try {
            $data = [
                'nama_departement' => $nama_departement
            ];
            $this->AdminModel->updateData('departement', $data, $id);
            $this->session->set_flashdata('success', 'Data Departement Berhasil Diupdate!');
            redirect("Admin/Departement");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Departement Gagal Diupdate!');
            redirect("Admin/Departement");
        }
    }

    public function deleteDepartement()
    {
        $id['id_departement'] = $this->input->post('id');

        try {
            $this->AdminModel->deleteData('departement', $id);
            $this->session->set_flashdata('success', 'Data Departement Berhasil Dihapus!');
            redirect("Admin/Departement");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Departement Gagal Dihapus!');
            redirect("Admin/Departement");
        }
    }

    // ############################## DATA JABATAN ############################## //

    public function Jabatan()
    {
        $data = [
            'jabatan' => $this->AdminModel->getData('jabatan')
        ];

        $this->template->load('layout/layout', 'admin/jabatan', $data);
    }

    public function tambahJabatan()
    {
        $nama_jabatan = $this->input->post('nama_jabatan');
        $data = [
            'nama_jabatan' => $nama_jabatan
        ];
        $cekData = $this->AdminModel->cekData('jabatan', $data);
        try {
            if ($cekData) {
                $this->session->set_flashdata('error', 'Data Jabatan Sudah Ada!');
                redirect("Admin/Jabatan");
            } else {
                $this->AdminModel->createData('jabatan', $data);
                $this->session->set_flashdata('success', 'Data Jabatan Berhasil Ditambahkan!');
                redirect("Admin/Jabatan");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Jabatan Gagal Ditambahkan!');
            redirect("Admin/Jabatan");
        }
    }

    public function editJabatan()
    {
        $id['id_jabatan'] = $this->input->post('id');
        $nama_jabatan['nama_jabatan'] = $this->input->post('nama_jabatan');

        try {
            $this->AdminModel->updateData('jabatan', $nama_jabatan, $id);
            $this->session->set_flashdata('success', 'Data Jabatan Berhasil Diupdate!');
            redirect("Admin/Jabatan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Jabatan Gagal Diupdate!');
            redirect("Admin/Jabatan");
        }
    }

    public function deleteJabatan()
    {
        $id['id_jabatan'] = $this->input->post('id');

        try {
            $this->AdminModel->deleteData('jabatan', $id);
            $this->session->set_flashdata('success', 'Data Jabatan Berhasil Dihapus!');
            redirect("Admin/Jabatan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Jabatan Gagal Dihapus!');
            redirect("Admin/Jabatan");
        }
    }

    // ############################## DATA LOWONGAN ############################## //
    public function Data_Lowongan()
    {
        $database = "lowongan";
        $database2 = "departement";
        $database3 = "jabatan";
        $join = 'departement.id_departement = lowongan.id_departement';
        $join2 = 'jabatan.id_jabatan = lowongan.id_jabatan';
        $datas = [
            'lowongan' => $this->AdminModel->doubleJoin($database, $database2, $database3, $join, $join2)
        ];

        foreach ($datas['lowongan'] as $row) {
            if ($row->tgl_close < date('Y-m-d')) {
                $status = [
                    'status' => 0
                ];
                $id['id_lowongan'] = $row->id_lowongan;
                $this->AdminModel->updateData('lowongan', $status, $id);
            } else {
                $status = [
                    'status' => 1
                ];
                $id['id_lowongan'] = $row->id_lowongan;
                $this->AdminModel->updateData('lowongan', $status, $id);
            }
        }
        $data = [
            'lowongan' => $this->AdminModel->doubleJoin($database, $database2, $database3, $join, $join2)
        ];
        $this->template->load('layout/layout', 'admin/lowongan', $data);
    }

    public function Tambah_Lowongan()
    {
        $data = [
            'departement' => $this->AdminModel->getData('departement'),
            'jabatan' => $this->AdminModel->getData('jabatan'),
        ];
        $this->template->load('layout/layout', 'admin/lowongan_tambah', $data);
    }

    public function tambahLowongan()
    {
        $nama_lowongan = $this->input->post('nama_lowongan');
        $id_departement = $this->input->post('id_departement');
        $id_jabatan = $this->input->post('id_jabatan');
        $max_usia = $this->input->post('max_usia');
        $min_pend = $this->input->post('min_pend');
        $jurusan_pend = $this->input->post('jurusan_pend');
        $salary = $this->input->post('salary');
        $deskripsi = $this->input->post('deskripsi');
        $kriteria = $this->input->post('kriteria');
        $tgl_close = $this->input->post('tgl_close');
        $salary = preg_replace("/[,]/", "", $salary);
        $salary = (int)$salary;

        try {
            $data = [
                'nama_lowongan' => $nama_lowongan,
                'id_departement' => $id_departement,
                'id_jabatan' => $id_jabatan,
                'max_usia' => $max_usia,
                'min_pend' => $min_pend,
                'jurusan_pend' => $jurusan_pend,
                'salary' => $salary,
                'deskripsi' => $deskripsi,
                'kriteria' => $kriteria,
                'tgl_close' => date('Y-m-d', strtotime($tgl_close)),
            ];

            $this->AdminModel->createData('lowongan', $data);
            $this->session->set_flashdata('success', 'Data Lowongan Berhasil Ditambahkan!');
            redirect("Admin/Data_Lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Lowongan Gagal Ditambahkan!');
            redirect("Admin/Data_Lowongan");
        }
    }

    public function Edit_Lowongan($id)
    {
        $data = [
            'departement' => $this->AdminModel->getData('departement'),
            'jabatan' => $this->AdminModel->getData('jabatan'),
            'lowongan' => $this->AdminModel->get_edit_lowongan('lowongan', $id)
        ];
        $this->template->load('layout/layout', 'admin/lowongan_edit', $data);
    }

    public function editLowongan()
    {
        $id['id_lowongan'] = $this->input->post('id');
        $id_lowongan = $this->input->post('id');
        $nama_lowongan = $this->input->post('nama_lowongan');
        $id_departement = $this->input->post('id_departement');
        $id_jabatan = $this->input->post('id_jabatan');
        $max_usia = $this->input->post('max_usia');
        $min_pend = $this->input->post('min_pend');
        $jurusan_pend = $this->input->post('jurusan_pend');
        $salary = $this->input->post('salary');
        $deskripsi = $this->input->post('deskripsi');
        $kriteria = $this->input->post('kriteria');
        $tgl_close = $this->input->post('tgl_close');
        $salary = preg_replace("/[,]/", "", $salary);
        $salary = (int)$salary;

        try {
            if ($tgl_close == "") {
                $data = [
                    'nama_lowongan' => $nama_lowongan,
                    'id_departement' => $id_departement,
                    'id_jabatan' => $id_jabatan,
                    'max_usia' => $max_usia,
                    'min_pend' => $min_pend,
                    'jurusan_pend' => $jurusan_pend,
                    'salary' => $salary,
                    'deskripsi' => $deskripsi,
                    'kriteria' => $kriteria,
                ];
            } else {
                $data = [
                    'nama_lowongan' => $nama_lowongan,
                    'id_departement' => $id_departement,
                    'id_jabatan' => $id_jabatan,
                    'max_usia' => $max_usia,
                    'min_pend' => $min_pend,
                    'jurusan_pend' => $jurusan_pend,
                    'salary' => $salary,
                    'deskripsi' => $deskripsi,
                    'kriteria' => $kriteria,
                    'tgl_close' => date('Y-m-d', strtotime($tgl_close)),
                ];
            }
            $this->AdminModel->updateData('lowongan', $data, $id);
            $this->session->set_flashdata('success', 'Data Lowongan Berhasil Diupdate!');
            redirect("Admin/Edit_Lowongan/$id_lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Lowongan Gagal Diupdate!');
            redirect("Admin/Edit_Lowongan/$id_lowongan");
        }
    }

    public function deleteLowongan()
    {
        $id['id_lowongan'] = $this->input->post('id');

        try {
            $this->AdminModel->deleteData('lowongan', $id);
            $this->AdminModel->deleteData('soal', $id);
            $this->session->set_flashdata('success', 'Data Lowongan Berhasil Dihapus!');
            redirect("Admin/Data_Lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Lowongan Gagal Dihapus!');
            redirect("Admin/Data_Lowongan");
        }
    }

    // ############################## SOAL ############################## //

    public function Tambah_Soal($id)
    {
        $data = [
            'lowongan' => $this->AdminModel->get_edit_lowongan('lowongan', $id),
        ];
        $this->template->load('layout/layout', 'admin/soal_tambah', $data);
    }

    public function tambahSoal()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $id['id_lowongan'] = $this->input->post('id');
        $id_lowongan = $this->input->post('id');
        try {
            // if (count($pertanyaan) < 30) {
            //     $this->session->set_flashdata('error', 'Data Soal Kurang Dari 30!');
            //     redirect("Admin/Tambah_Soal/$id_lowongan");
            // } else {
            for ($i = 0; $i < count($pertanyaan); $i++) {
                $data = [
                    'id_lowongan' => $id_lowongan,
                    'pertanyaan' => $this->input->post('pertanyaan')[$i],
                    'option_a' => $this->input->post('option_a')[$i],
                    'option_b' => $this->input->post('option_b')[$i],
                    'option_c' => $this->input->post('option_c')[$i],
                    'option_d' => $this->input->post('option_d')[$i],
                    'kunjaw' => $this->input->post('kunjaw')[$i]
                ];

                $this->AdminModel->createData('soal', $data);
            }
            $update_lowongan = [
                'id_test' => $id_lowongan
            ];
            $this->AdminModel->updateData('lowongan', $update_lowongan, $id);
            $this->session->set_flashdata('success', 'Data Soal Berhasil Disimpan!');
            redirect("Admin/Data_Lowongan");
            // }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Soal Gagal Disimpan!');
            redirect("Admin/Data_Lowongan");
        }
    }

    public function Soal($id)
    {
        $data = [
            'lowongan' => $this->AdminModel->get_show_lowongan('lowongan', $id),
            'soal' => $this->AdminModel->get_soal('soal', $id)
        ];

        $this->template->load('layout/layout', 'admin/soal', $data);
    }

    public function editSoal()
    {
        $id['id_soal'] = $this->input->post('id_soal');
        $id_lowongan = $this->input->post('id');
        $pertanyaan = $this->input->post('pertanyaan');
        $option_a = $this->input->post('option_a');
        $option_b = $this->input->post('option_b');
        $option_c = $this->input->post('option_c');
        $option_d = $this->input->post('option_d');
        $kunjaw = $this->input->post('kunjaw');

        try {
            $data = [
                'pertanyaan' => $pertanyaan,
                'option_a' => $option_a,
                'option_b' => $option_b,
                'option_c' => $option_c,
                'option_d' => $option_d,
                'kunjaw' => $kunjaw,
            ];

            $this->AdminModel->updateData('soal', $data, $id);
            $this->session->set_flashdata('success', 'Soal Berhasil Di Update!');
            redirect("Admin/Soal/$id_lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Soal Gagal Di Update!');
            redirect("Admin/Soal/$id_lowongan");
        }
    }

    public function tambahEditSoal()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $id['id_lowongan'] = $this->input->post('id');
        $id_lowongan = $this->input->post('id');
        try {
            for ($i = 0; $i < count($pertanyaan); $i++) {
                $data = [
                    'id_lowongan' => $id_lowongan,
                    'pertanyaan' => $this->input->post('pertanyaan')[$i],
                    'option_a' => $this->input->post('option_a')[$i],
                    'option_b' => $this->input->post('option_b')[$i],
                    'option_c' => $this->input->post('option_c')[$i],
                    'option_d' => $this->input->post('option_d')[$i],
                    'kunjaw' => $this->input->post('kunjaw')[$i]
                ];

                $this->AdminModel->createData('soal', $data);
            }
            $update_lowongan = [
                'id_test' => $id_lowongan
            ];
            $this->AdminModel->updateData('lowongan', $update_lowongan, $id);
            $this->session->set_flashdata('success', 'Data Soal Berhasil Disimpan!');
            redirect("Admin/Soal/$id_lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Soal Gagal Disimpan!');
            redirect("Admin/Soal/$id_lowongan");
        }
    }

    public function deleteSoal()
    {
        $id['id_soal'] = $this->input->post('id_soal');
        $id_lowongan = $this->input->post('id');
        try {
            $this->AdminModel->deleteData('soal', $id);
            $this->session->set_flashdata('success', 'Data Soal Berhasil Dihapus!');
            redirect("Admin/Soal/$id_lowongan");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Soal Gagal Dihapus!');
            redirect("Admin/Soal/$id_lowongan");
        }
    }

    ############################## PSIKOTES ##############################

    public function Tambah_Psikotes($id)
    {
        $data = [
            'lowongan' => $this->AdminModel->get_edit_lowongan('lowongan', $id),
        ];
        $this->template->load('layout/layout', 'admin/psikotes_tambah', $data);
    }

    public function tambahPsikotes()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $id['id_lowongan'] = $this->input->post('id');
        $id_lowongan = $this->input->post('id');
        try {
            // if (count($pertanyaan) < 30) {
            //     $this->session->set_flashdata('error', 'Data Psikotes Kurang Dari 30!');
            //     redirect("Admin/Tambah_Psikotes/$id_lowongan");
            // } else {
            for ($i = 0; $i < count($pertanyaan); $i++) {
                $data = [
                    'id_lowongan' => $id_lowongan,
                    'pertanyaan_psikotes' => $this->input->post('pertanyaan')[$i],
                    'option_a_psikotes' => $this->input->post('option_a')[$i],
                    'option_b_psikotes' => $this->input->post('option_b')[$i],
                    'option_c_psikotes' => $this->input->post('option_c')[$i],
                    'option_d_psikotes' => $this->input->post('option_d')[$i],
                    'kunjaw_psikotes' => $this->input->post('kunjaw')[$i]
                ];

                $this->AdminModel->createData('psikotes', $data);
            }
            $update_lowongan = [
                'id_psikotes' => $id_lowongan
            ];
            $this->AdminModel->updateData('lowongan', $update_lowongan, $id);
            $this->session->set_flashdata('success', 'Data Psikotes Berhasil Disimpan!');
            redirect("Admin/Data_Lowongan");
            // }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Psikotes Gagal Disimpan!');
            redirect("Admin/Data_Lowongan");
        }
    }

    public function Psikotes($id)
    {
        $data = [
            'lowongan' => $this->AdminModel->get_show_lowongan('lowongan', $id),
            'psikotes' => $this->AdminModel->get_psikotes('psikotes', $id)
        ];

        $this->template->load('layout/layout', 'admin/psikotes', $data);
    }

    public function editSoalPsikotes()
    {
        # code...
        $id['id_psikotes'] = $this->input->post('id_psikotes');
        $id_psikotes = $this->input->post('id');
        $pertanyaan = $this->input->post('pertanyaan');
        $option_a = $this->input->post('option_a');
        $option_b = $this->input->post('option_b');
        $option_c = $this->input->post('option_c');
        $option_d = $this->input->post('option_d');
        $kunjaw = $this->input->post('kunjaw');

        try {
            $data = [
                'pertanyaan_psikotes' => $pertanyaan,
                'option_a_psikotes' => $option_a,
                'option_b_psikotes' => $option_b,
                'option_c_psikotes' => $option_c,
                'option_d_psikotes' => $option_d,
                'kunjaw_psikotes' => $kunjaw,
            ];

            $this->AdminModel->updateData('psikotes', $data, $id);
            $this->session->set_flashdata('success', 'Psikotes Berhasil Di Update!');
            redirect("Admin/Psikotes/$id_psikotes");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Psikotes Gagal Di Update!');
            redirect("Admin/Psikotes/$id_psikotes");
        }
    }

    public function deleteSoalPsikotes()
    {
        # code...
        $id['id_psikotes'] = $this->input->post('id_psikotes');
        $id_psikotes = $this->input->post('id');
        try {
            $this->AdminModel->deleteData('psikotes', $id);
            $this->session->set_flashdata('success', 'Data Psikotes Berhasil Dihapus!');
            redirect("Admin/Psikotes/$id_psikotes");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Data Psikotes Gagal Dihapus!');
            redirect("Admin/Psikotes/$id_psikotes");
        }
    }

    ############################## CALON PELAMAR ##############################
    public function Calon_Pelamar()
    {
        $database = 'apply_job';
        $database1 = 'pelamar';
        $database2 = 'lowongan';
        $join = 'pelamar.id_pelamar=apply_job.id_pelamar';
        $join2 = 'lowongan.id_lowongan=apply_job.id_lowongan';

        $data = [
            'apply' => $this->AdminModel->doubleJoin($database, $database1, $database2, $join, $join2)
        ];

        $this->template->load('layout/layout', 'admin/calon_pelamar', $data);
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

        $this->template->load('layout/layout', 'admin/calon_pelamar_detail', $data);
    }

    public function ApproveApply($id)
    {
        $id_apply = $id;
        $ids['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Lolos Seleksi',
            ];

            $this->AdminModel->updateData('apply_job', $data, $ids);
            $this->session->set_flashdata('success', 'Calon Pelamar Berhasil ke tahap selanjutnya!');
            redirect("Admin/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Admin/Detail_Calon_Pelamar/$id_apply");
        }
    }

    public function CancelApply($id)
    {
        $id_apply = $id;
        $id['id_apply_job'] = $id;

        try {
            $data = [
                'status_hasil' => 'Tidak Lolos Seleksi',
            ];

            $this->AdminModel->updateData('apply_job', $data, $id);
            $this->session->set_flashdata('success', 'Calon Pelamar Tidak Berhasil ke tahap selanjutnya!');
            redirect("Admin/Calon_Pelamar");
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Gagal Update Calon Pelamar');
            redirect("Admin/Detail_Calon_Pelamar/$id_apply");
        }
    }

    public function downloadCV($file)
    {
        $this->load->helper('download');
        $data = file_get_contents("./assets/data_pelamar/" . $file); // membaca file kontent
        force_download($file, $data);
    }

    // ############################## MY PROFILE ############################## //

    public function My_Profile()
    {
        $this->template->load('layout/layout', 'Admin/my_profile');
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
                        redirect('Admin/My_Profile');
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
                        redirect('Admin/User');
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
            redirect('Admin/My_Profile');
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Berhasil Update Profile, Silahkan Logout Akun Anda dan Login Kembali');
            redirect('Admin/My_Profile');
        }
    }

    // ############################## SETTING ############################## //

    public function Settings()
    {
        $this->template->load('layout/layout', 'Admin/setting');
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
                    redirect("Admin/Settings");
                } else {
                    $this->session->set_flashdata('error', 'Password Tidak Sama!');
                    redirect("Admin/Settings");
                }
            } else {
                $this->session->set_flashdata('error', 'Password Lama Anda Salah!');
                redirect("Admin/Settings");
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('error', 'Password Gagal Diupdate!');
            redirect("Admin/Settings");
        }
    }
}
