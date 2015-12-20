<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontPage extends CI_Controller {

	function __construct() {
		parent::__Construct();
		$this->load->model(array('MenuModel'));
		$this->load->library(array('form_validation'));
		$this->load->helper('language');
	}

	public function index()
	{
		$data['location'] = $this->session->userdata('location');
		
		$this->load->view('templates/header');
		$this->load->view('front_page', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function loadLocation($locationID) {
		
		if( $locationID == 1 ) {
			$this->session->set_userdata('location', '1');
		}
		else if( $locationID == 2 ) {
			$this->session->set_userdata('location', '2');
		}
		
		$this->load->view('templates/header');
		$this->load->view('front_page');
		$this->load->view('templates/footer');
	}
	
	public function displayMenu($location_id, $general_id) {
		
		$data['categories'] = $this->MenuModel->getSpecificCategories($location_id, $general_id);
		$data['menu_items'] = $this->MenuModel->getAllMenuItems($location_id);
		
		$this->load->view('templates/header');
		$this->load->view('v_menu', $data);
		$this->load->view('templates/footer');
	}
	
	public function displayMenuItem($menuItem_id) {
		
		$this->$data['menu_item'] = $this->MenuModel->getMenuItem($menuItem_id);
		
		$this->load->view('v_book_table', $this->$data);
	}
	
	public function bookTable($location_id) {
		
		$data['menu_items'] = $this->MenuModel->getAllMenuItems($location_id);
		$data['categories'] = $this->MenuModel->getCategories($location_id);
				
		$this->load->view('templates/header');
		$this->load->view('v_book_table', $data);
		$this->load->view('templates/footer');
		
		
	}
}