<?php


class Blog extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Blog | KingKone';
        $data['content'] = 'blog';

        $this->load->view('Template/template', $data);
    }

}