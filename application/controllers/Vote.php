<?php
class Vote extends CI_Controller{
  protected $img_ketua1;
  protected $img_ketua2;
  protected $img_ketua3;
  protected $img_wakil1;
  protected $img_wakil2;
  protected $img_wakil3;

  protected $nama_ketua1;
  protected $nama_ketua2;
  protected $nama_ketua3;
  protected $nama_wakil1;
  protected $nama_wakil2;
  protected $nama_wakil3;

  protected $info_ketua1;
  protected $info_ketua2;
  protected $info_ketua3;
  protected $info_wakil1;
  protected $info_wakil2;
  protected $info_wakil3;


          function __construct(){

            parent::__construct();

              $this->load->library(array('session'));
              $this->load->model('vote_model');
              $this->load->view('statis/header');

              // Cek sesi
              if (!$this->session->userdata('status_login')){
                redirect('login');
              }

              $get_ketua=array('ketua1','ketua2','ketua3');
              $data_ketua=$this->vote_model->read_calonwakil($get_ketua)->result();

              foreach ($data_ketua as $z) {

              $this->nama_ketua[] = $z->nama_calon;
              $this->info_ketua[] = $z->deskripsi_calon;
              $this->img_ketua[]  = base_url('assets/img/').$z->foto_calon;

            }
              $get_wakil=array('wakil1','wakil2','wakil3');
              $data_wakil=$this->vote_model->read_calonwakil($get_wakil)->result();

              foreach ($data_wakil as $z) {
                $this->nama_wakil[] = $z->nama_calon;
                $this->info_wakil[] = $z->deskripsi_calon;
                $this->img_wakil[]  = base_url('assets/img/').$z->foto_calon;
              }

          }

          function index(){
            $data['get_info']=$this->vote_model->get_akun()->result();
            $data['img_calon']=array(
              'ketua1' => $this->img_ketua[0],
              'ketua2' => $this->img_ketua[1],
              'ketua3' => $this->img_ketua[2],
              'wakil1' => $this->img_wakil[0],
              'wakil2' => $this->img_wakil[1],
              'wakil3' => $this->img_wakil[2],
            );
            $data['nama_calon']=array(
              'ketua1' => $this->nama_ketua[0],
              'ketua2' => $this->nama_ketua[1],
              'ketua3' => $this->nama_ketua[2],
              'wakil1' => $this->nama_wakil[0],
              'wakil2' => $this->nama_wakil[1],
              'wakil3' => $this->nama_wakil[2],

            );
            $data['info_calon']=array(
              'ketua1' => $this->info_ketua[0],
              'ketua2' => $this->info_ketua[1],
              'ketua3' => $this->info_ketua[2],
              'wakil1' => $this->info_wakil[0],
              'wakil2' => $this->info_wakil[1],
              'wakil3' => $this->info_wakil[2],
            );
            $this->load->view('vote/vw_vote',$data);
          }

          function vote_now(){

            $ketua = $this->input->post('ketua');
            $wakil = $this->input->post('wakil');
            echo $ketua;
            echo $wakil;

            $cek_dataketua = $this->vote_model->read_vote($ketua)->result();
            foreach ($cek_dataketua as $k) {
              $value_ketua = $k->jumlah_vote;
            }

            $tambah_dataketua = ++$value_ketua;

            $update_dataketua = $this->vote_model->add_vote($tambah_dataketua,$ketua);

            ///////////////////////////////////////////////////////////////////////////

            $cek_datawakil = $this->vote_model->read_vote($wakil)->result();
            foreach ($cek_datawakil as $k) {
              $value_wakil = $k->jumlah_vote;
            }

            $tambah_datawakil = ++$value_wakil;

            $update_datawakil = $this->vote_model->add_vote($tambah_datawakil,$wakil);

            if ($update_datawakil !== FALSE):


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
                'add_log' => $ketua.",".$wakil
              );
              $this->dashboard_model->adding_log($log,'log_vote');
              ////////////////////////////////////////

              $this->vote_model->update_statusvote();
            else:
              echo "<script>alert('Gagal, kesalahan tidak diketahui');window.location.href='".base_url('login')."'</script>";
            endif;

          }
          function ex(){

            $this->load->view('vote/terimakasih');
          }
}

  /* End of file Vote.php
   * Location application/controllers/Vote.php
   */
