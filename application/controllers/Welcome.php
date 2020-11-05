<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		//regles de validations//
		$this->form_validation->set_rules("pname","prenom","required");
		$this->form_validation->set_rules("nom","Nom","required");
		$this->form_validation->set_rules("pseudo","Pseudo","required|max_length[12]");
		$this->form_validation->set_rules("email","Email","required|valid_email");
		

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('vue1');
		}
		else
		{
				$this->load->view("formSuccess");
		}
		
		
		
	}
	
}
