<?php
class Site_model extends CI_Model{

	function get_records(){
		
		$query=$this->db->query("SELECT * FROM salary GROUP BY employ_Id");
		return $query->result();

	}
	function add_record($salary){
		$this->db->insert('salary', $salary);
		return;

	}
	function getotal(){
		$query="SELECT * FROM salary GROUP BY id";
		return $query;
	}

	function update_record($rows){
		$query=$this->db->get_where('salary', array('id' => $rows));
		if($query->num_rows() > 0){
			return $query->row();

		} 
	}

	function updateRecords($name,$employ_Id, $price, $salary_type, $salary_month, $id){
		$query="UPDATE `salary` SET name = '$name', employ_Id='$employ_Id', price= '$price' , salary_type='$salary_type' , salary_month='$salary_month' WHERE id = '$id'";
	$abc=$this->db->query($query);
	return $abc;
		 
}
	
	function delete_row($id){
		$this->db->where('id', $id);
		$this->db->delete('salary');
		return;
	}

	function getAllSalaries($id){
		$query="SELECT * FROM salary WHERE employ_Id = $id";
		return $this->db->query($query)->result_object();
	}

}


?>