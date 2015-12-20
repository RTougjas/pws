<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	function __construct() {
		parent::__Construct();
		$this->load->model(array('MenuModel', 'ReservationModel'));
        $this->load->helper(array('url', 'form', 'language'));
        $this->load->library(array('form_validation'));
		$this->lang->load('tekst_lang', 'estonian');
	}
	
	public function index() {
		
	}
	
	public function table($location_id) {
		
		$this->form_validation->set_rules('first_name', $this->lang->line('first_name'), 'required');
		$this->form_validation->set_rules('last_name', $this->lang->line('last_name'), 'required');
		$this->form_validation->set_rules('phone', $this->lang->line('phone'), 'required');
		$this->form_validation->set_rules('people', $this->lang->line('people'), 'required');
		
		if( $this->form_validation->run() ) {	
			
			if(! empty($this->input->post('menuItemsChecked'))) {
				$data['menuItemsChecked'] = $this->input->post('menuItemsChecked');
			}
			
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['additional_notes'] = $this->input->post('additional_notes');
			
			
			$this->load->view('templates/header');
			$this->load->view('v_feedback', $data);
			$this->load->view('templates/footer');
		}
		
		else {
			//$error['error'] = $this->form_validation->error_string();
			$data['menu_items'] = $this->MenuModel->getAllMenuItems($location_id);
			$data['categories'] = $this->MenuModel->getCategories($location_id);
				
			$this->load->view('templates/header');
			$this->load->view('v_book_table', $data);
			$this->load->view('templates/footer');
		}
	}
}
