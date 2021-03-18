<?php


class Partners extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Partners | KingKone';
        $data['content'] = 'partners';

        $this->load->view('Template/template', $data);
    }


}