<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_employee','employee');
	}

	public function index()
	{
		$data = array(
			'content'  => 'employee/index',
			'subTitle' => 'Employee',
		);
		$this->load->view('layouts/main',$data);
	}

	public function create()
	{
		$data = array(
			'content'  => 'employee/create',
			'subTitle' => 'Create Employee',
		);
		$this->load->view('layouts/main',$data);
	}

	public function store()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('usia', 'Usia', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
        {
                $data = array(
					'content'  => 'employee/create',
					'subTitle' => 'Create Employee',
				);
				$this->load->view('layouts/main',$data);
        }
        else
        {
             $simpan = $this->employee->store();
             if($simpan) {
             	echo "sukses";
             } else {
             	echo "gagal";
             }
        }
	}
}
