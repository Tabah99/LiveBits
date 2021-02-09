<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller{
	 public function __construct(){
     parent::__construct();
     $this->load->model(array('project_model'));
  }
	
function index(){
				$project=array();

		if($query=$this->project_model->get_records()){
			$project['records']=$query;
		}
		else
		{
			echo "no Data availble";
		}
		$this->load->view('projects_us', $project);
	}

	function create(){

 $a = $this->input->post('service');
 	$a=$this->input->post('service[1]');
 	$b=$this->input->post('service[2]');
 	$c=$this->input->post('service[3]');
 	$d=$this->input->post('service[4]');
 	$f=$this->input->post('service[5]');

		$project=array(
			'date' => $this->input->post('month'),
			'Company' => $this->input->post('Company'),
			'services'=> $a .' ,'. $b .' ,'.$c .' ,'.$d .' ,'.$f,
			'DA'=> $this->input->post('DA'),
			'PA'=> $this->input->post('PA'),
			'Advance'=> $this->input->post('Advance'),
			'outsrc'=> $this->input->post('outsrc'),
			'Profit'=> $this->input->post('Profit')
		);
		$this->project_model->add_record($project);
		$this->index();
}

	function delete_c($id){
		$this->project_model->delete($id);
		$this->index();
	}

}