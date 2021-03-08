<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$log = $this->session->userdata('log');
		$this->load->model('Mainmodel','m');
		if ($log == null) {
			$this->session->set_flashdata('toast', 'war:Silahkan Login terlebih dahulu');
			redirect('Login');
		}
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}

	public function vote()
	{
		$data['paslon'] = $this->m->getData('paslon')->result();
	    $data['vote'] = $this->m->getData('vote')->result();
		$data['log'] = $this->session->userdata('log');

		$this->load->view('header');
		$this->load->view('voting', $data);
		$this->load->view('footer');		
	}

	public function voting()
	{
		$ins = array('auth' => 1, 'vote' => $this->input->post('rd1'));
		$this->m->ins($ins);
		$this->session->set_flashdata('toast', 'success:Anda telah melakukan vote');
		redirect('Main','refresh');
	}
	public function getVote()
	{
		$data = $this->m->getReport()->result();
		echo json_encode($data);
	}
	public function report()
	{
		$data['count'] = $this->m->getReport()->result_array();
		$this->load->view('header');
		$this->load->view('grafik',$data);
		$this->load->view('footer');

	}

}

/* End of file Main.php */
