<?php


class Partners extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('PartnerModel');
    }

    public function index()
    {
        $data['title'] = 'Partners | KingKone';
        $data['content'] = 'partners';
        $data['Partners'] = $this->PartnerModel->getAllPartners();

        $this->load->view('Template/template', $data);
    }


}