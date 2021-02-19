<?php


class Services extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Services | KingKone';
        $data['content'] = 'services';

        $this->load->view('Template/template', $data);
    }


}