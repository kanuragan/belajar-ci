<?php

class M_employee extends CI_Model {


	public function store() {
		$nip    = $this->input->post('nip'); // $_POST['nip']
		$nama   = $this->input->post('nama');
		$usia   = $this->input->post('usia');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nip'    => $nip,
			'nama'   => $nama,
			'usia'   => $usia,
			'alamat' => $alamat
		);

		$save = $this->db->insert('employee',$data);
		return ($save) ? true : false;

	}

}