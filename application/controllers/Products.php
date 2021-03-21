<?php


class Products extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function index()
    {
        $data['title'] = 'Products | KingKone';
        $data['content'] = 'products';
        $data['Flavors'] = $this->ProductModel->getAllFlavours();

        $this->load->view('Template/template', $data);
    }

}