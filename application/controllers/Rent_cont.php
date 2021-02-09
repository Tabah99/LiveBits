<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_cont extends CI_Controller{
	public function __construct(){
    parent::__construct();
    // $this->basic_model->userLoginStatus(['admin']);
     $this->load->model(array('rent_model'));
  }
	function index(){
		// $this->load->model('rent_model');
		$data=array();
		if($query=$this->rent_model->get_data()){
			$data["data"]=$query;
}
	else{
		echo"No Data available";
	}
	
		$this->load->view('rent', $data);
		
	}
	function insertData(){
			$rent=array(
			'rent' => $this->input->post('rent'),
			'elec'=> $this->input->post('elec'),
			'Month'=> $this->input->post('Month')
		);
			$this->load->model('rent_model');
			
			$this->rent_model->add_record($rent);
			$rent=NULL;
			$this->index();
	}
	function delete_c($id_rent){
		$this->rent_model->delete($id_rent);
		$this->index();
	}

	function updatePage($id_rent){
		$data=$this->rent_model->get_dataid($id_rent);
		$abc['data']=$data;
		

		$this->load->view('updaterent', $abc);
	}
	function updatedata(){
	$data=array(
			'id' => $this->input->post('id'),
			'rent' => $this->input->post('rent'),
			'elec'=> $this->input->post('elec'),
			'Month'=> $this->input->post('Month')
		);
	$id=$data['id'];
	$rent=$data['rent'];
	$elec=$data['elec'];
	$Month=$data['Month'];
	$this->rent_model->update($id, $rent,$elec,$Month);
	$this->index();
	}

}
?>