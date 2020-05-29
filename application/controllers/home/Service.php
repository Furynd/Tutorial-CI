<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Service_model");
        $this->load->library('form_validation');
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('home/login'));
    }

    public function index()
    {
        $data["Service"] = $this->Service_model->getAll();
        $this->load->view("home/service/list", $data);
        // $this->load->view("welcome", $data);
    }

    public function add()
    {
        $listjadwal = array("07:00:00","08:00:00","09:00:00","10:00:00","11:00:00",
                        "13:00:00","14:00:00","15:00:00","16:00:00","17:00:00",
                        "18:00:00","19:00:00");
        $data["jam"] = array();
        foreach ($listjadwal as $jadwal) {
            if($this->Service_model->isAvailable($jadwal))
                $data["jam"].array_push($jadwal);
        }

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

        $this->load->view("home/service/new_form", $data);
    }

    // public function add()
    // {
    //     $service = $this->Service_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($service->rules());

    //     if ($validation->run()) {
    //         $service->save();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }
    //     else {
    //         $this->session->set_flashdata('warning', 'GAGAL disimpan');
    //     }

    //     // $this->load->view("welcome");
    //     $this->load->view("home/service/new_form");
    // }
    

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
        
        $this->load->view("home/service/edit_form", $data);
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