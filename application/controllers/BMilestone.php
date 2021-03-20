<?php


class BMilestone extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('MilestoneModel');
    }

    public function index()
    {
        $data['title'] = "Manage Milestones | KingKone";
        $data['content'] = "Backend/Milestones/manageMilestone";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addMilestone(){
        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/Milestone/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->MilestoneModel->isExistMilestone($this->input->post('txtMilestoneTitle'), $this->input->post('txtMilestoneDate'))){

            if (!$this->upload->do_upload('txtMilestoneImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['milestone_image'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['milestone_image'] = $img["file_name"];
            }

            $master_data['milestone_title'] = $this->input->post('txtMilestoneTitle');
            $master_data['milestone_description'] = $this->input->post('txtMilestoneDescription');
            $master_data['milestone_date'] = $this->input->post('txtMilestoneDate');


            $result = $this->MilestoneModel->addMilestone($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Milestone has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'Milestone is already exits.!';
        }

        echo json_encode($response);
    }

    function getMilestonesForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->MilestoneModel->getMilestones($param));
    }

    function deleteMilestone(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->MilestoneModel->getMilestone($this->input->post('ID'));

        if($imgData[0]->milestone_image != null){
            unlink('assets/img/Milestone/'.$imgData[0]->milestone_image);
        }

        $response['result'] = $this->MilestoneModel->deleteMilestone($this->input->post('ID'));

        echo json_encode($response);
    }

    function getMilestoneData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->MilestoneModel->getMilestone($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updateMilestone(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->MilestoneModel->updateMilestone(
            $this->input->post('txtUMilestoneID'),
            $this->input->post('txtUMilestoneTitle'),
            $this->input->post('txtUMilestoneDescription'),
            $this->input->post('txtUMilestoneDate')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Milestone updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }

    function genRandomString(){
        $length = 5;
        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWZYZ";

        $real_string_length = strlen($characters) ;
        $string="id";

        for ($p = 0; $p < $length; $p++)
        {
            $string .= $characters[mt_rand(0, $real_string_length-1)];
        }

        return strtolower($string);
    }

}