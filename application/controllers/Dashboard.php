<?php
class Dashboard extends CI_Controller{

      /*
          echo using andro($str) biar aman dari xss

          * Membutuhkan penggunaan koneksi karena sebagian assets di load dari cdn

          * Ganti nama calon,deskripsi,foto di dashboard/advanced_page

          * Page grafik akan merefresh otamatis setiap 60 detik, atau pake setInterval(), Socket ,

       */

          function __construct(){

            parent::__construct();
            $this->load->library('session');
            if (!$this->session->userdata('status_admin')){
              redirect('login/login_admin');
            }
            $this->load->model('dashboard_model');
            $calon_ketua=array('ketua1','ketua2','ketua3');



          }

          function index(){
            $this->load->view('dashboard/template/head');
            $this->load->view('dashboard/template/topbar');
            $this->load->view('dashboard/template/sidebar');
            $this->load->view('dashboard/template/js');
            $this->load->view('dashboard/template/foot');

          }
          /*
          function grafik(){

            $data['get'] = $this->dashboard_model->read_vote(NULL)->result();
            $this->load->view('grafik/graph.php',$data);
          }
          */
          private function hitung_keseluruhan($jumlah,$total){

            return $jumlah/$total*100;
          }

          function main_page(){
            $data['get_stattrue']=$this->dashboard_model->get_totalakun('status_vote',1)->num_rows();
            $data['get_statfalse']=$this->dashboard_model->get_totalakun('status_vote',0)->num_rows();
            $data['get_stattotal']=$this->dashboard_model->get_totalakun(NULL,NULL)->num_rows();
            $data['get_percent']=$this->hitung_keseluruhan($data['get_stattrue'],$data['get_stattotal']);

            $data['get_vote']=$this->dashboard_model->get_totalvote()->result();
            $data['get_log']=$this->dashboard_model->get_log()->result();

            $calon_ketua=array('ketua1','ketua2','ketua3');
            $calon_wakil=array('wakil1','wakil2','wakil3');

            $data['get_ketua']=$this->dashboard_model->get_max($calon_ketua)->result();
            $data['get_wakil']=$this->dashboard_model->get_max($calon_wakil)->result();

            $this->load->view('dashboard/dashboard1',$data);
          }

          function history_page(){

            $data['get_distinct']=$this->dashboard_model->get_filterlog()->result();
            $this->load->view('dashboard/dashboard2',$data);
          }

          function grafik(){
            /* Dapatkan persen
              * Jumlah vote calon / seluruh hasil vote dari calon ketua * 100
            */
            $calon_ketua=array('ketua1','ketua2','ketua3');
            $calon_wakil=array('wakil1','wakil2','wakil3');
            $data['get_sumketua']=$this->dashboard_model->get_sum($calon_ketua)->result();
            $data['get_sumwakil']=$this->dashboard_model->get_sum($calon_ketua)->result();
            $data['get_ketua']=$this->dashboard_model->get_max($calon_ketua)->result();
            $data['get_wakil']=$this->dashboard_model->get_max($calon_wakil)->result();
            $this->load->view('grafik/graph.php',$data);
          }

          function advanced_page(){

            $this->load->view('dashboard/dashboard3');
          }

          function ubah_profilcalonketua($calon){
              $this->load->library('upload');
                $config['upload_path']   = './assets/img/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '5000';
              $this->upload->initialize($config);
              $this->upload->do_upload('foto_ketua');
            $data=array(
              'nama_calon'      => $this->input->post('nama_ketua'),
              'deskripsi_calon' => $this->input->post('deskripsi_ketua'),
              'foto_calon'      => $this->upload->data('file_name'),
            );
            $where=array(
              'calon' => $calon
            );

              $g=$this->dashboard_model->update_profil($data,$where);
              if ($g){
                  redirect('dashboard/advanced_page');
              }
          }

          function ubah_profilcalonwakil($calon){
            $this->load->library('upload');
              $config['upload_path']   = './assets/img/';
              $config['allowed_types'] = 'jpg|png|jpeg';
              $config['max_size']      = '5000';
            $this->upload->initialize($config);
            $this->upload->do_upload('foto_wakil');
            $data=array(
              'nama_calon' => $this->input->post('nama_wakil'),
              'deskripsi_calon' => $this->input->post('deskripsi_wakil'),
              'foto_calon'      => $this->upload->data('file_name'),
            );
            $where=array(
              'calon' => $calon
            );

            $g=$this->dashboard_model->update_profil($data,$where);
            if ($g){
              redirect('dashboard/advanced_page');
            }
          }

}

/* End of file Dashboard.php
 * Location application/controllers/Dashboard.php
 */
