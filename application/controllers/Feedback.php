<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	function __construct() {
		parent::__Construct();
		$this->load->model(array('FeedbackModel'));
        $this->load->helper(array('url', 'form', 'language', 'security'));
        $this->load->library(array('form_validation'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		$this->lang->load('tekst_lang', 'estonian');
		$this->lang->load('form_validation_lang');
	}
	
	public function index() {}
		
	public function giveFeedBack($location_id) {
		
		$this->form_validation->set_rules('first_name', $this->lang->line('first_name'), 'trim|required|min_length[3]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('last_name'), 'trim|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('phone', $this->lang->line('phone'), 'callback_contains_numbers|min_length[7]|max_length[12]', 
							array('contains_numbers' => $this->lang->line('form_validation_is_numeric')));
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'valid_email|xss_clean');
		$this->form_validation->set_rules('feedback_notes', $this->lang->line('feedback_notes'), 'trim|required|xss_clean');
		
		if( $this->form_validation->run() ) { 
			
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$notes = $this->input->post('feedback_notes');
			
			$values = array(
				'firstName' => $first_name,
				'lastName' => $last_name,
				'phone' => $phone,
				'email' => $email,
				'notes' => $notes,
				'location' => $location_id
			);
			
			$this->FeedbackModel->insertFeedback($values);
			
			$this->session->set_flashdata('success', $this->lang->line('feedback_success'));
			redirect('FrontPage/giveFeedBack/location_id');
		}
		else {
			$this->load->view('templates/header');
			$this->load->view('v_feedback');
			$this->load->view('templates/footer');
		}
							
	}
	
	public function contains_numbers() {
		
		$phone_nr = $this->input->post('phone');
		$allowed = '0123456789';
		
		if(strlen($phone_nr) != strspn($phone_nr, $allowed)) {
			return false;
		}
		else {
			return true;
		}	
	}
	
}