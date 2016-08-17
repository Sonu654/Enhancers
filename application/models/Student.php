<?php

class Student extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getCat() {
        $qry = $this->db->select(array('cat_id', 'cat_name'))
                ->get_compiled_select('category', true);
        $qry = $this->db->query($qry);
        return json_encode($qry->result());
    }

    public function getFormNo() {
        $this->db->select_max('form_no');
        $result = $this->db->get('std_personal_info')->row();
        return $result->form_no;
    }

    public function getNatioanlity() {
        $qry = $this->db->select(array('nat_id', 'nationality'))
                ->get_compiled_select('nationality', true);
        $qry = $this->db->query($qry);
        return json_encode($qry->result());
    }

    public function getSpellization($exam) {
        /* $query=$this->db->select(array('sp_id','sp_name'))
          ->where('sp_name="'.$exam.'"')
          ->get_compiled_select('spelization',true); */
        $query = $this->db->query('select sp_id,sp_name from spelization where edu_id=any(select edu_id from education where edu_name="' . $exam . '")');
        return json_encode($query->result());
    }

    public function getPaymentMode() {
        $qry = $this->db->select(array('mode_id', 'mode'))
                ->get_compiled_select('payment_mode', true);
        $qry = $this->db->query($qry);
        return json_encode($qry->result());
    }

    public function getPaymentPeriod() {
        $qry = $this->db->select(array('period_id', 'period'))
                ->get_compiled_select('payment_period', true);
        $qry = $this->db->query($qry);
        return json_encode($qry->result());
    }

    public function getPerInfo($form) {
        $qry = $this->db->get_where('std_personal_info', array('form_no' => $form));
        return json_encode($qry->result());
    }

    public function getAddress($form) {
        $qry = $this->db->get_where('std_contact_info', array('form_no' => $form));
        return json_encode($qry->result());
    }

    public function getCategory($form) {
        $qry = $this->db->get_where('std_category_info', array('form_no' => $form));
        return json_encode($qry->result());
    }

    public function getPaymentInfo($form) {
        $this->db->select(['pe.period', 'mo.mode', 'fe.cheque_no'])
                ->from('std_fee_info as fe')
                ->join('payment_period pe', 'pe.period_id=fe.period_id')
                ->join('payment_mode mo', 'mo.mode_id=fe.mode_id');
        $this->db->where('fe.form_no',$form);
       // return $this->db->get_compiled_select();
       $query=  $this->db->get();
        return json_encode($query->row());
    }

}
