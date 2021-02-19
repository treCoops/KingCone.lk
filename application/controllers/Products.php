<?php


class Products extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Products | KingKone';
        $data['content'] = 'products';

        $this->load->view('Template/template', $data);
    }

}