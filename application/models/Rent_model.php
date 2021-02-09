<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_model extends CI_Model{


function add_record($rent){
		$this->db->insert('rent', $rent);
		return;

	}
	function get_data(){
		
		$data=$this->db->query("SELECT * FROM rent");
		return $data->result();

	}
	function delete($id){

		$this->db->where('id_rent', $id);
		$this->db->delete('rent');
		return;
	}
	function update($id, $rent,$elec,$Month){
		$query="UPDATE `rent` SET rent = '$rent', elec='$elec', Month= '$Month' WHERE id_rent = '$id'";
		$abc=$this->db->query($query);
		return $abc;
	
	}
	function get_dataid($id){
		$query="SELECT * FROM `rent` WHERE id_rent='$id'";
		$abc=$this->db->query($query);
		return $abc->result();
	}
	function get_sum(){

		
	}

}

?>