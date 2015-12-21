<?php

class FeedbackModel extends CI_Model {
	
	//Constructor for loading database.
	public function __construct() {
		$this->load->database();
	}


	/**
	*	Inserts key value pairs to the feedback table.
	*
	*	@param	$data	key-value pairs to be inserted to the database.
	*/
	public function insertFeedback($data) {
		$this->db->insert('feedback', $data);
		
	}
	
	
}

?>