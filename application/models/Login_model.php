<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{



function checkdata($data){
	$username=$data['username'];
	$password=$data['password'];
	$this->db->where('username', $username);
	$this->db->where('password', $password);
	$abc=$this->db->get('users');
	if ($abc->num_rows()>0) {
		return true;
		echo $abc;
	}
	else{
return false;
echo $abc;
	}
	
	

}




}