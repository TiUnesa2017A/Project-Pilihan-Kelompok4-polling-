<?php
class Login extends CI_Controller{

          function __construct(){

            parent::__construct();
            $this->load->model(array('login_model'));
            $this->load->library(array('form_validation','session'));

            // Cek sesi
          }

          function index(){
            if ($this->session->userdata('status_login')){
              redirect('vote');
            }
            $this->load->view('statis/header');

            $this->load->view('login/vw_login');
          }

          function auth(){
            $this->load->view('statis/header');

            $this->form_validation->set_rules('nis','Nomor induk siswa','required|trim|max_length[50]');

            if ($this->form_validation->run()){
              $data=array(
                'nis' => $this->input->post('nis')
              );
                if ($this->login_model->cek_login($data)->num_rows() == 1){
                  $cek=$this->login_model->cek_login($data)->result();
                  foreach ($cek as $k) {
                    $value = $k->status_vote;
                  };
                    if ($value == 0){

                        $buat_sesi=array(
                          'nis'          => $this->input->post('nis'),
                          'status_login' => TRUE,
                        );

                        $this->session->set_userdata($buat_sesi);

                        //////////////////////////////////////
                        $this->load->model(array('vote_model','dashboard_model'));
                        $z=$this->vote_model->get_akun()->result();
                        foreach ($z as $value) {
                          $nama=$value->nama_lengkap;
                          $kelas=$value->kelas;
                          $jurusan=$value->jurusan;
                        };
                        $log=array(
                          'user' => $nama.",".$kelas.",".$jurusan,
                          'tanggal_waktu' => date('r'),
                          'add_log' => 'Login'
                        );
                        $this->dashboard_model->adding_log($log,'log_vote');
                        ////////////////////////////////////////

                        redirect ('vote');
                      }else{
                        echo "<script>alert('Anda sudah melakukan voting');window.location.href='".base_url('login')."'</script>";
                      }

                        }else{
                        echo "<script>alert('NIM tidak terdaftar');window.location.href='".base_url('login')."'</script>";
                        }
                }else{
                  echo "<script>alert('Isi semua inputan');window.location.href='".base_url('login')."'</script>";
                }

          }

          // Login ke dashboard
          function login_admin(){

            $this->load->view('dashboard/login');
          }

          function auth_loginadmin(){
            $this->form_validation->set_rules('password_adm','Password admin','required|trim|max_length[20]');
            if($this->form_validation->run()){
              define ('s','@2017');
              define ('sa','admin');
              if ( $this->input->post('password_adm') === s || $this->input->post('password_adm') === sa ){
                $dt=array(
                  'status_admin' => TRUE,
                  'user_admin'   => $this->input->post('password_adm'),
                );
                $this->session->set_userdata($dt);
                redirect('dashboard/main_page');
              }else{
                echo "<script>alert('Ps');window.location.href='".base_url('login/login_admin')."'</script>";
              }

            }else{
              echo "<script>alert('Kesalahan dalam penulisan');window.location.href='".base_url('login/login_admin')."'</script>";
            }
          }

}

/* End of file Login.php
 * Location application/controllers/Login.php
 */
