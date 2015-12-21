<?php

class ReservationModel extends CI_Model {
	
	//Constructor for loading database.
	public function __construct() {
		$this->load->database();
	}
	
	/**
	*	@return	ID of last entry in database. It is concurrent safe. 
	*/
	public function lastReservationID() {
		//$this->db->select('LAST_INSERT_ID()');
		//$query = $this->db->get();
		//return $query->result();
	}
	
	/**
	*	Inserts all the data, which is represented by an array to the reservation table. 
	*
	*	@param	$values		An array of key-value pairs. 
	*
	*/
	public function insertReservation($values) {
		
		$this->db->insert('reservation', $values);
		$this->db->select('LAST_INSERT_ID() AS last_id');
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	*	Allows to insert items to the reservation
	*
	*	@param	$reservation_id	Distinguishes, which reservation is being used.
	*	@param	$menuItem_id	Distinguishes, which item is added to the reservation.
	*	@param	$amount			Describes the amount of items added to the reservation.
	*/
	public function insertItemToReservation($reservation_id, $menuItem_id) {
		
		$this->db->set('reservation', $reservation_id);
		$this->db->set('menuItem', $menuItem_id);
		$this->db->insert('reservationItems');
		
	}
	
}

?>