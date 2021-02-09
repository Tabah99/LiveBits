<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summary extends CI_Controller{


	public function __construct(){
  parent::__construct();
  $this->load->model(array('summary_model'));
  }
   function index(){
   	$abc=$this->summary_model->get_misc();

   	         
   	$rent=$this->summary_model->get_rent();
                                
                
    $salary=$this->summary_model->get_salary();

    $profit=$this->summary_model->get_profit();
    $outsrc=$this->summary_model->outsrc();
    $da=$this->summary_model->total_amount();
                 $new=array(
                 	$abc,$rent,$salary,$profit,$outsrc,$da
                 );

                 $new['price']=$abc;
                 $new['total']=$rent;
                 $new['salary']=$salary;
                 $new['profit']=$profit;
                 $new['outsrc']=$outsrc;
                 $new['da']=$da;
   	$this->load->view('dashboard', $new);

   }
}