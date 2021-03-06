<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	function __construct() {
		parent::__Construct();
		$this->load->model(array('MenuModel', 'ReservationModel'));
        $this->load->helper(array('url', 'form', 'language', 'security'));
        $this->load->library(array('form_validation'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		$this->lang->load('tekst_lang', 'estonian');
		$this->lang->load('form_validation_lang');
	}
	
	public function index() {
		
	}

	public function table($location_id) {
		
		$this->form_validation->set_rules('first_name', $this->lang->line('first_name'), 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('last_name'), 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', $this->lang->line('phone'), 'required|callback_contains_numbers|min_length[7]|max_length[12]', 
							array('contains_numbers' => $this->lang->line('form_validation_is_numeric')));
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'valid_email|xss_clean');
		$this->form_validation->set_rules('people', $this->lang->line('people'), 'required|min_length[1]|max_length[2]|callback_is_valid_number',
							array('is_valid_number' => $this->lang->line('form_validation_interval')));
		
		$menuItemsChecked = array();
		if( $this->form_validation->run() ) {	
			
			if(! empty($this->input->post('menuItemsChecked'))) {
				
				$menuItemsChecked = $this->input->post('menuItemsChecked');
				
			}
			
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$people = $this->input->post('people');
			$notes = $this->input->post('notes');
			
			$values = array(
				'firstName' => $first_name,
				'lastName' => $last_name,
				'phone' => $phone,
				'email' => $email,
				'people' => $people,
				'notes' => $notes,
				'location' => $location_id
			);
			
			$reservation_id = $this->ReservationModel->insertReservation($values)[0];
			
			for($i = 0; $i < sizeOf($menuItemsChecked); $i++) {
				$this->ReservationModel->insertItemToReservation($reservation_id->last_id, $menuItemsChecked[$i]);
			}

			$this->session->set_flashdata('success', $this->lang->line('b_laud_success'));

			
			redirect('FrontPage/bookTable/'.$location_id);
			
			/*
			$this->load->view('templates/header');
			$this->load->view('v_book_table', $data);
			$this->load->view('templates/footer');
			*/
		}
		
		else {
			$data['menu_items'] = $this->MenuModel->getAllMenuItems($location_id);
			$data['categories'] = $this->MenuModel->getCategories($location_id);
				
			$this->load->view('templates/header');
			$this->load->view('v_book_table', $data);
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
	
	public function is_valid_number() {
		
		$people_nr = $this->input->post('people');
		
		if($people_nr > 0 && $people_nr < 100) {
			return true;
		}
		else {
			return false;
		}
	}
}
