<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_landing_page', 'model');
	}

	public function index()
	{
		$data = [
			"judul" => "IRARI | Professional Web & Mobile Development",
		];
		$this->load->view('landingpage/index', $data);
	}

}

/* End of file Landing_page.php */
/* Location: ./application/controllers/Landing_page.php */