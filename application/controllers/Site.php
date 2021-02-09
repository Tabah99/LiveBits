<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{

	function index(){
		$salary=array();

		if($query=$this->site_model->get_records()){
			$salary['records']=$query;
		}
		else
		{
			echo "no Data availble";
		}
		$this->load->view('options_view', $salary);
	}

	function info_page(){
				$this->load->view('view_salaries');
	}
	function create(){

		$salary=array(
			'name' => $this->input->post('name'),
			'price'=> $this->input->post('price'),
			'salary_type'=> $this->input->post('salary_type'),
			'salary_month'=> $this->input->post('salary_month'),

			'employ_Id'=> $this->input->post('employ_Id')
		);

		$this->site_model->add_record($salary);
		
		$this->index();
	}
	function delete($id,$emp_id){
		$this->site_model->delete_row($id);
		$this->info_page($id);
		return redirect(site_url('site/getDetails/'.$emp_id));
	}

	function getDetails($id){
		$data['salary'] = $this->site_model->getAllSalaries($id);	


		$this->load->view('view_salaries', $data);
	}


function update($rows){
		
	$newid=$this->site_model->update_record($rows);
	  
$rows=array(
			'name' => $this->input->post('name'),
			'price'=> $this->input->post('price'),
			'salary_type'=> $this->input->post('salary_type'),
			'salary_month'=> $this->input->post('salary_month'),

			'employ_Id'=> $this->input->post('employ_Id')
		);


	$this->load->view('update',['newid'=>$newid],$rows);
		 
}
function updaterec(){

$updatedData=array(
			'name' => $this->input->post('name'),
			'price'=> $this->input->post('price'),
			'salary_type'=> $this->input->post('salary_type'),
			'salary_month'=> $this->input->post('salary_month'),
			'id'=>$this->input->post('id'),
			'employ_Id'=> $this->input->post('employ_Id')
		);
 			$id=$updatedData['id'];
		$name=$updatedData['name'];
		$price=$updatedData['price'];
		$salary_type=$updatedData['salary_type'];
		$salary_month=$updatedData['salary_month'];
	
		$employ_Id=$updatedData['employ_Id'];	
		
		$this->site_model->updateRecords($name,$employ_Id, $price, $salary_type, $salary_month, $id);

		$this->index();

}

}
?>