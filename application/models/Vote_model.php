<?php
class Vote_model extends CI_Model{

protected $sesi;
            function __construct(){
              parent::__construct();
              $this->sesi=$this->session->userdata('nis');
            }
            function get_akun(){
              $this->db->where('nis',$this->sesi);
              return $this->db->get('akun');
            }

            function read_vote($data){

                if (isset ($data)){
              $this->db->where('calon',$data);
            }
              return $this->db->get('vote');
            }

            function add_vote($data,$where){

              $this->db->set('jumlah_vote',$data);
              $this->db->where('calon',$where);
              return $this->db->update('vote');
            }

            function update_statusvote(){

              $this->db->set('status_vote',1);
              $this->db->where('nis',$this->session->userdata('nis'));
              return $this->db->update('akun');
            }

            function read_calonwakil($data){
              $this->db->where_in('calon',$data);
              return $this->db->get('vote');
            }
}

/* End of file Vote_model.php
 * Location application/models/Vote_model.php
 */
