<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('MenuModel');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('tekst_lang', 'estonian');
		$this->lang->load('form_validation_lang');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}
	
	public function index() {
		
	}
	
	public function displayMenuItems($location_id) {
		
		$this->data['categories'] = $this->MenuModel->getCategories($location_id);
		$this->data['menu_items'] = $this->MenuModel->getAllMenuItems($location_id);
		$this->data['title'] = "Menüü";
		
		$this->load->view('templates/header');
		$this->load->view('v_insert_menu_items', $this->data);
		$this->load->view('templates/footer');
	}
	
	public function insertMenuItem($location_id) {
		
	}
	
	public function updateMenuItem($location_id) {
		
		$menuItem_id = $this->input->post('menuItem_id');
		$menuItem_category = $this->input->post('selected_category');
		$menuItem_name = $this->input->post('menuItem_name');
		$menuItem_price = $this->input->post('menuItem_price');
		
		$values = array(
			'name' => $menuItem_name,
			'price' => $menuItem_price,
			'category' => $menuItem_category
		);
			
		$this->MenuModel->updateMenuItem($menuItem_id, $values);
		
		redirect('Menu/displayMenuItems/'.$location_id);
	}
}


?>