<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author sanwal
 */
class Admin extends CI_Controller{
    //put your code here
    
    public function Index(){
        $data=array(
            'title'=>'Login'
        );
        $this->load->view('templates/Header',$data);
        $this->load->view('Admin/Index');
        $this->load->view('templates/Footer');
    }
}
