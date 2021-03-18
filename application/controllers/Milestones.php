<?php


class Milestones extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Milestones | KingKone';
        $data['content'] = 'milestones';

        $this->load->view('Template/template', $data);
    }

}