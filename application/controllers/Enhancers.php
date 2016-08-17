<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enhancers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function Index() {
        $data['title'] = "Enhancers";
        $this->load->view('templates/header', $data);
        $this->load->view('welcome');
        $this->load->view('templates/footer');
    }

    function Register() {
        $data['title'] = "New Registration";
        $this->load->view('templates/header', $data);
        $this->load->model('Student', 'st');
        $st['cat'] = $this->st->getCat();
        $st['form_no'] = $this->st->getFormNO();
        $st['nation'] = $this->st->getNatioanlity();
        $st['ssc'] = $this->st->getSpellization('ssc');
        $st['ug'] = $this->st->getSpellization('UG');
        $st['pg'] = $this->st->getSpellization('PG');

        $this->load->view('Register', $st);
        $this->load->view('templates/footer');
    }

    function Registration() {
        echo $config['upload_path'] = './Assets/images/students/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 1000;
        $config['encrypt_name'] = false;
        $config['file_name'] = $this->input->post('frm_no') . '.jpg';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('frm_img')) {
            $per = array(
                'form_no' => $this->input->post('frm_no'),
                'name' => $this->input->post('frm_name'),
                'dob' => $this->input->post('frm_dob'),
                'gender' => $this->input->post('frm_gender'),
                'age' => $this->input->post('frm_age'),
                'img_path' => 'Assets/images/students/' . $this->input->post('frm_no') . '.jpg',
                'marital_status' => $this->input->post('frm_mStatus'),
                'nat_id' => $this->input->post('frm_nat')
            );
            $contact = array(
                'form_no' => $this->input->post('frm_no'),
                'corresspond' => $this->input->post('frm_corrspnd'),
                'c_phone' => $this->input->post('frm_c_phn'),
                'c_mob' => $this->input->post('frm_c_mob'),
                'permanent' => $this->input->post('frm_per'),
                'p_phone' => $this->input->post('frm_p_phn'),
                'p_mob' => $this->input->post('frm_p_mob'),
                'email' => $this->input->post('frm_mail')
            );
            if ($this->db->insert('std_personal_info', $per)) {
                $this->db->insert('std_contact_info', $contact);
                foreach ($_POST['parent'] as $p) {
                    $p['form_no'] = $_POST['frm_no'];
                    if(!empty($p))
                    $this->db->insert('std_family_info', $p);
                }

                foreach ($_POST['exam'] as $e) {
                    $e['form_no'] = $_POST['frm_no'];
                    if (!empty($e['university'])) {
                        if (empty($e['sp_id'])) {
                            $e['sp_id'] = NULL;
                        }
                        $this->db->insert('std_edu_info', $e);
                    }
                }
            }
            $userData = array(
                'form_no' => $this->input->post('frm_no'),
                'std_name' => $this->input->post('frm_name')
            );
            foreach ($_POST['cat'] as $cat) {
                $d = array(
                    'form_no' => $this->input->post('frm_no'),
                    'cat_id' => $cat
                );
                $this->db->insert('std_category_info', $d);
            }
            $this->session->set_userdata($userData);
            redirect('/Enhancers/guideLines');
        } else {
            echo $this->upload->display_errors();
        }
    }

    public function guideLines() {
        if (isset($_SESSION['form_no'])) {
            $data['title'] = "Rules & Regulation";
            $this->load->view('templates/header', $data);
            $sess['form_no'] = $this->session->userdata('form_no');
            $sess['std_name'] = $this->session->userdata('std_name');
            $this->load->view('guideLines', $sess);
            $this->load->view('templates/footer');
        } else {
            redirect('Enhancers/Index');
        }
    }

    public function Payment() {
        if (isset($_SESSION['form_no'])) {
            $data['title'] = "Payment Details";
            $this->load->view('templates/header', $data);
            $this->load->model('Student', 'st');
            $sess['form_no'] = $this->session->userdata('form_no');
            $sess['std_name'] = $this->session->userdata('std_name');
            $sess['payMode'] = $this->st->getPaymentMode();
            $sess['payPeriod'] = $this->st->getPaymentPeriod();
            $this->load->view('payment', $sess);
            $this->load->view('templates/footer');
        } else {
            redirect('Enhancers/Index');
        }
    }

    public function PaymentInfo() {
        if (isset($_SESSION['form_no'])) {
            $data = array(
                'form_no' => $this->session->userdata('form_no'),
                'period_id' => $this->input->post('period'),
                'mode_id' => $this->input->post('mode'),
                'cheque_no' => $this->input->post('cheque_no')
            );
            $this->db->insert('std_fee_info', $data);
            redirect('Enhancers/Confermation');
        } else {
            redirect('Enhancers/Index');
        }
    }

    public function Confermation() {
        if (isset($_SESSION['form_no'])) {
            $this->load->view('templates/header', ['title' => 'Confermation Page']);
            $this->load->model('student','st');
            $st['form_no'] = $this->session->userdata('form_no');
            $st['info']=$this->st->getPerInfo($st['form_no']);
            $st['address']=$this->st->getAddress($st['form_no']);
            $st['payment']=$this->st->getPaymentInfo($st['form_no']);
            $this->load->view('confermation',$st);
            $this->load->view('templates/footer');
        } else {
            redirect('Enhancers/Index');
        }
    }
    
    public function Complete(){
        if($this->session->sess_destroy()){
            redirect('Enhancers/Index');
        }else{
            redirect('Enhancers/Confermation');
        }
    }

}
