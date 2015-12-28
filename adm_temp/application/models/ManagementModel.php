<?php

class ManagementModel extends CI_Model {
	
	//Constructor for loading database.
	public function __construct() {
		$this->load->database();
	}

	
	/**
	*	@return		all locations id and name stored in database.
	*/
	public function getLocations() {
		$this->db->select('*');
		$this->db->from('groups');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	
	public function getUsers() {
		$this->db->select('*');
		$this->db->from('v_users');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	public function deleteUser($user_id) {
		
		$this->db->where('id', $user_id);
		$this->db->delete('users');
	}

}
?>