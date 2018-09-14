<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('unit_test');
  }

  public function index()
  {
  		$this->load->model('model_jadwal');
		  $isi['content']	  = 'user/jadwal';
		  $isi['judul']	  = 'Home';
    	$isi['sub_judul'] = 'User';
  		$isi['sub']	      = 'Jadwal Bus DAMRI';
  		$isi['isi']       = $this->model_jadwal->tampil_jadwal();
		  $this->load->view('user/home',$isi);
  }

  public function test(){
    $this->load->model('model_jadwal');
    $isi['content']   = 'user/jadwal';
    $isi['judul']     = 'Home';
    $isi['sub_judul'] = 'Jadwal Bus DAMRI';
    $isi['sub']       = '';
    $isi['isi']       = $this->model_jadwal->tampil_jadwal();
    // $isi['data']   = $this->db->query('SELECT * FROM jadwal');
    $test = $this->load->view('user/home',$isi);
    $expected_result = $this->load->view('user/home',$isi);
    $test_name = 'Tampil Jadwal test function';
    echo $this->unit->run($test,$expected_result,$test_name);
    
  }
}
