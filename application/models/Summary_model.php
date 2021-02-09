<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Summary_model extends CI_Model{

	function get_misc(){
		$query="SELECT SUM(Price) AS price FROM `misc`";

		
		$abc=$this->db->query($query);
		return $abc->result();
		
	}
	function get_rent(){
		$query="SELECT (SUM(rent)+ SUM(elec)) AS total FROM `rent`";
		$summ=$this->db->query($query);

		return $summ->result();
	}
	function get_salary(){
		$query="SELECT SUM(price) AS salary FROM `salary`";
		$summ=$this->db->query($query);
		return $summ->result();
	}
	function get_profit(){
		$query="SELECT SUM(Profit) AS profit FROM `project`";
		$summ=$this->db->query($query);
		return $summ->result();
	}
	function outsrc(){
		$query="SELECT SUM(outsrc) AS outsrc FROM `project`";
		$summ=$this->db->query($query);
		return $summ->result();
	}
	function total_amount(){
		$query="SELECT SUM(DA) AS da FROM `project`";
		$summ=$this->db->query($query);
		return $summ->result();
	}
}