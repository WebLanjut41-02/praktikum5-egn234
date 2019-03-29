<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mhs extends CI_Model {

	function getAllMhs() {
		$this->db->from('mahasiswa');
		$query = $this->db->get();
		return $query->result();
	}

	function getMhs($nim) {
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);
		$query = $this->db->get();
		return $query->result();
	}

	function s_mhs($hitung,$threshold){
		return $query = $this->db->get('mahasiswa',$hitung,$threshold)->result();		
	}

	function JumData(){
		return $this->db->get('mahasiswa')->num_rows();
	}

	function cariMhs($inputan, $hitung, $threshold){
    $this->db->like('nama',$inputan);
    $this->db->or_like('nim',$inputan);
    $this->db->or_like('kelas',$inputan);
    return $query = $this->db->get('mahasiswa', $hitung, $threshold)->result();
  }

  function s_JumData($inputan){
    $this->db->like('nama',$inputan);
    $this->db->or_like('nim',$inputan);
    $this->db->or_like('kelas',$inputan);	
		return $query = $this->db->get('mahasiswa')->num_rows();
  }
  
  function i_mhs($nama, $nim, $tgl, $ipk, $kelas){
		
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'tgl_lahir'=> $tgl,
			'ipk'=> $ipk,
			'kelas' => $kelas
		);

		$this->db->insert('mahasiswa', $data);
  }

  function e_mhs($nama, $nim, $tgl, $ipk, $kelas){
		
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'tgl_lahir'=> $tgl,
			'ipk'=> $ipk,
			'kelas' => $kelas
		);

		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);	
	}

	function del_mhs($nomor){
    $this->db->where('nim', $nomor);
    $this->db->delete('mahasiswa');
  }
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */