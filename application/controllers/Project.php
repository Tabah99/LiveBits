<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller{


	public function __construct(){
    parent::__construct();
    // $this->basic_model->userLoginStatus(['admin']);
     $this->load->model(array('mis_model'));
  }

function index(){
	$abc=array();
	if($query=$this->mis_model->get_data()){
		$abc['abc']=$query;

	}
	else{
		echo"No Data available";
	}
	
	$this->load->view('projects_live', $abc);
	
}
	function create(){

		$data=array(
			'Month' => $this->input->post('Month'),
			'Item'=> $this->input->post('Item'),
			'Price'=> $this->input->post('Price')
		);
			$this->load->model('mis_model');

		$this->mis_model->add_record($data);
		
		$this->index();
		
}
	function delete_c($id){
		$this->mis_model->delete($id);
		$this->index();
	}
	function update($id){
		$abc=$this->mis_model->getidd($id);
		$data['abc']=$abc;

		$this->load->view('updatemisc', $data);


	}
	function updaterecord(){
		$data=array(
			'id_misc' =>$this->input->post('id'),
			'Month' => $this->input->post('Month'),
			'Item'=> $this->input->post('Item'),
			'Price'=> $this->input->post('Price')
		);
		$id=$data['id_misc'];
		$Month=$data['Month'];
		$item=$data['Item'];
		$price=$data['Price'];
		$this->mis_model->update($id,$Month,$item,$price);
		$this->index();

	}

}
?>