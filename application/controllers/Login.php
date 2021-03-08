<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here	
		$this->load->model('Mainmodel', 'm');
		
	}	

	public function index()
	{
		$this->load->view('login');
	}

	public function pros_log()
	{
		$nim = $this->input->post('nim');
		$pass = $this->input->post('password');
		$pas = md5($pass);	

		$w = array('nim' => $nim, 'password' => $pas);
		$cek = $this->m->checklog($w)->row();
		
		if ($cek != null) {
			$log = array('id' =>$cek->idAuth,'nim' => $cek->nim);
			$this->session->set_userdata('log',$log);
			$this->session->set_flashdata('toast', 'success:Welcome to website vote');
			redirect('Main', 'refresh');
		}else{
			$this->session->set_flashdata('toast', 'error:Nim / Password tidak sesuai');
			redirect('Login','refresh');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('toast', 'success:Terima kasih');
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
