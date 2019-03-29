<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class mhs extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_mhs');
	}
 
	public function index(){
		$a = $this->m_mhs->JumData();
		$config['base_url'] = base_url().'mhs/index/';
		$config['total_rows'] = $a;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['l_mhs'] = $this->m_mhs->s_mhs($config['per_page'],$from);
		$this->load->view('listmhs',$data);
	}

	public function s(){
		$cari = $this->input->post('cari');
		$a = $this->m_mhs->s_JumData($cari);
		$config['base_url'] = base_url().'mhs/s/';
		$config['total_rows'] = $a;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['l_mhs'] = $this->m_mhs->cariMhs($cari, $config['per_page'], $from);
		$this->load->view('listmhs',$data);
	}

	public function tambah(){
		$this->load->view('tambahmhs');
	}
	
	public function insert_mhs(){
		$Nama = $this->input->post('nama');
		$Nim = $this->input->post('nim');
		$tgl = $this->input->post('tgl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');
		$this->m_mhs->i_mhs($Nama, $Nim, $tgl, $ipk, $kelas);
		redirect('mhs');
	}

	public function update(){
		// $data = $this->m_mhs->getAllMhs();
		$query['l_mhs'] = $this->m_mhs->getMhs($_GET['nim']);
		$this->load->view('updatemhs',$query);
	}

	public function update_proc(){
		$Nama = $this->input->post('nama');
		$Nim = $this->input->post('nim');
		$tgl = $this->input->post('tgl');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');
		$this->m_mhs->e_mhs($Nama, $Nim, $tgl, $ipk, $kelas);
		redirect('mhs');
	}

	public function del_proc($nomor){
		$this->m_mhs->del_mhs($nomor);
		redirect('mhs');
  }
}