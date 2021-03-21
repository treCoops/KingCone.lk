<?php


class Milestones extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('MilestoneModel');
    }

    public function index()
    {
        $data['title'] = 'Milestones | KingKone';
        $data['content'] = 'milestones';
        $data['Milestones'] = $this->MilestoneModel->getAllMilestones();

        $this->load->view('Template/template', $data);
    }

}