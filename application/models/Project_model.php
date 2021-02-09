<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model{


		function add_record($project){
		$this->db->insert('project', $project);
		return;

	}
	function get_records(){
		
		$query=$this->db->query("SELECT * FROM project");
		return $query->result();

	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('project');
		return;
	}

}