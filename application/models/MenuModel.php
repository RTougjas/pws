<?php

class MenuModel extends CI_Model {
	
	//Constructor for loading database.
	public function __construct() {
		$this->load->database();
	}
	/*
		Insert menuitems to the database. 
	
		@param	$data	An array containing key-value pairs.
	*/
	public function insertMenuItem($data) {
		
		$this->db->insert('menuItem', $data);
	}
	/*
		Update menuitem table.
	
		@param	$item_id	ID of menuitem to be updated.
		@param	$data		Array of values that need to be updated. 
	*/
	public function updateMenuItem($item_id, $data) {
		
		$this->db->where('id', $item_id);
		$this->db->update('menuItem', $data);
	}
	
	/*
		Delete item from menu table.
		
		@param	$item_id	Id of item to be deleted.
	*/
	public function deleteMenuItem($item_id) {
		
		$this->db->delete('menuItem', $item_id);
	}
	
	/**
	*	return all menu items, according to given location. 
	*
	*	@param $location_id		describes which location item you want to get. 
	*
	*/
	public function getAllMenuItems($location_id) {
		
		$this->db->select('*');
		$this->db->from('menuItems');
		$this->db->where('location', $location_id);
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
}

?>