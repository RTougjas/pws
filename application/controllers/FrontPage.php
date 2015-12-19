<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontPage extends CI_Controller {

	function __construct() {
		parent::__Construct();
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
}