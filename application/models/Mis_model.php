<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_model extends CI_Model{


function add_record($data){
		$this->db->insert('misc', $data);
		return;

	}

	function get_data(){
		
		$abc=$this->db->query("SELECT * FROM misc GROUP BY id_misc");
		return $abc->result();

	}
	function delete($id){

		$this->db->where('id_misc', $id);
		$this->db->delete('misc');
		return;
	}
	function update($id,$Month,$item,$price){

	$query="UPDATE `misc` SET  Month= '$Month', item='$item',Price='$price' WHERE id_misc = '$id'";
	$abc=$this->db->query($query);
	return $abc;

	}
	function getidd($id){
		$query="SELECT * FROM `misc` WHERE id_misc='$id'";

		$abc=$this->db->query($query);
		return $abc->result();
	}


		}
?>