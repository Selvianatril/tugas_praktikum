<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class bmi_pasien extends CI_Controller {
        
        public function list(){
            $this->load->model('bmi_pasien_model');// load model
            $data['bmi']=$this->bmi_pasien_model->getAll();// query
           
            $this->load->view('header');
            $this->load->view('bmi/list',$data);
            $this->load->view('footer');
        }

        public function view($id){
            $this->load->model('bmi_pasien_model');
            $data['bmi']=$this->bmi_pasien_model->findById($id);
            $this->load->view('header');
            $this->load->view('bmi/view',$data);
            $this->load->view('footer');
        }
        
    }







