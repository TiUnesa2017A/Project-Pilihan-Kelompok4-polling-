<?php
class Logout extends CI_Controller{

          function __construct(){
            parent::__construct();

            $this->load->library(array('session'));
          }
          function index(){
          }
          function logout(){

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
              'add_log' => 'Logout'
            );
            $this->dashboard_model->adding_log($log,'log_vote');
            ////////////////////////////////////////

            $this->session->sess_destroy();

            redirect('login');
          }

          function logout_admin(){


            $this->load->view('dashboard/login');
          }

            // * Halaman 404, tambahkan di routes jika mau, w,w,
          function nf404(){
            $this->load->view('errors/404nf');
          }

}

/* End of file Logout.php
 * Location application/controllers/Logout.php
 */
