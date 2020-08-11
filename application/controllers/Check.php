<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {
    public function check_name(){
        $this->load->model('Check_model');
        $id=$this->input->get('id');
        $name=$this->input->get('name');
        $result=$this->Check_model->check_name($id, $name);
        echo json_encode($result);
    }
}