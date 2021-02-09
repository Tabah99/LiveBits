<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	 public function __construct(){
     parent::__construct();
     $this->load->model(array('login_model'));
  }
	
public function index(){


	$this->load->view('login');
	}
	public function getdata(){

	$data=array(
			'username' => $this->input->post('username'),
			'password'=> $this->input->post('password')
		);
	$dbs=$this->login_model->checkdata($data);
	if($dbs){

		$session_data=array(
			'username'=> $data['username']
);
		
	return redirect(site_url('summary'));
	}
	else{
$session_data="Invalid Username or Password";
$data['abc']=$session_data;
	$this->load->view('login', $data);
	
	}

	}



}
