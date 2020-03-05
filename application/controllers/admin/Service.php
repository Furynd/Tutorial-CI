<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Service_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["Service"] = $this->Service_model->getAll();
        $this->load->view("admin/service/list", $data);
        // $this->load->view("welcome", $data);
    }

    public function add()
    {
        $service = $this->Service_model;
        $validation = $this->form_validation;
        $validation->set_rules($service->rules());

        if ($validation->run()) {
            $service->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        else {
            $this->session->set_flashdata('warning', 'GAGAL disimpan');
        }

        // $this->load->view("welcome");
        $this->load->view("admin/service/new_form");
    }
    

    public function edit($id = null)
    {
        if (!isset($id)) redirect('service');
       
        $service = $this->Service_model;
        $validation = $this->form_validation;
        $validation->set_rules($service->rules());

        if ($validation->run()) {
            $service->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["service"] = $service->getById($id);
        if (!$data["service"]) show_404();
        
        $this->load->view("admin/service/edit_form", $data);
        // $this->load->view("welcome", $data);
    }
    

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Service_model->delete($id)) {
            redirect(site_url('services'));
            // redirect(site_url('welcome'));
        }
        
    }
}