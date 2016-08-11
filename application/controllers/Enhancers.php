<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enhancers extends CI_Controller {

	function Index(){
		$data['title']="Enhancers";
		$this->load->view('templates/header',$data);
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}

		function Register(){
		$data['title']="New Registration";
		$this->load->view('templates/header',$data);
		$this->load->model('Student','st');
		$st['cat']=$this->st->getCat();
		$st['form_no']=$this->st->getFormNO();
		$st['nation']=$this->st->getNatioanlity();
		$st['ssc']=$this->st->getSpellization('ssc');
		$st['ug']=$this->st->getSpellization('UG');
		$st['pg']=$this->st->getSpellization('PG');

		$this->load->view('Register',$st);
		$this->load->view('templates/footer');
	}

	function Registration(){
		
	}
}