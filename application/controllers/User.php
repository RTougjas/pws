<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
 
    public function index()
    {
        $this->load->view('v_login');
		$this->load->view('templates/footer');
    }
 
    public function login()
    {
		$this->data['title'] = "Login";
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		//Form validation check
		if( $this->form_validation->run() === FALSE ) {
			$this->load->view('v_login');
		}
		//If form validation passes check
		else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ( $this->ion_auth->login($this->input->post('username'), $this->input->post('password')) ) {
			       	
					$this->load->view('templates/a_header');
					$this->load->view('v_management');
					$this->load->view('templates/footer');
					
			} else {
					$this->session->set_flashdata('error', $this->ion_auth->errors());
			     	redirect('/User');
			}
		}
    }
 
    public function logout()
    {
		$this->ion_auth->logout();
		redirect('/');
    }
}