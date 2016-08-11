<?php
	 class Student extends CI_Model {

	 	function __construct(){
	 		parent::__construct();
	 	}

	 	public function getCat(){
	 		$qry=$this->db->select(array('cat_id','cat_name'))
	 						->get_compiled_select('category',true);
	 		$qry=$this->db->query($qry);
	 		return json_encode($qry->result());
	 	}

	 	public function getFormNo(){
	 		$this->db->select_max('form_no');
			$result = $this->db->get('std_personal_info')->row();  
			return $result->form_no;

	 		}

	 	public function getNatioanlity(){
			$qry=$this->db->select(array('nat_id','nationality'))
	 						->get_compiled_select('nationality',true);
	 		$qry=$this->db->query($qry);
	 		return json_encode($qry->result());

	 	}

	 	public function getSpellization($exam){
	 		/*$query=$this->db->select(array('sp_id','sp_name'))
	 						->where('sp_name="'.$exam.'"')
	 						->get_compiled_select('spelization',true);*/
	 		$query=$this->db->query('select sp_id,sp_name from spelization where edu_id=any(select edu_id from education where edu_name="'.$exam.'")');
	 		return json_encode($query->result());
	 	}
	}