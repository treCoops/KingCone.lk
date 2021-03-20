<?php


class BPartner extends CI_Controller
{
    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('PartnerModel');
    }

    public function index()
    {
        $data['title'] = "Manage Partners | KingKone";
        $data['content'] = "Backend/Partners/managePartner";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addPartner(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/Partner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->PartnerModel->isExistPartner($this->input->post('txtPartnerName'))){

            if (!$this->upload->do_upload('txtPartnerImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['partner_image'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['partner_image'] = $img["file_name"];
            }

            $master_data['partner_name'] = $this->input->post('txtPartnerName');
            $master_data['partner_description'] = $this->input->post('txtPartnerDescription');
            $master_data['partner_status'] = 0;


            $result = $this->PartnerModel->addPartner($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Partner has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'Partner is already exits.!';
        }

        echo json_encode($response);
    }

    function getPartnersForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->PartnerModel->getPartners($param));
    }

    function deletePartner(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->PartnerModel->getPartner($this->input->post('ID'));

        if($imgData[0]->partner_image != null){
            unlink('assets/img/Partner/'.$imgData[0]->partner_image);
        }

        $response['result'] = $this->PartnerModel->deletePartner($this->input->post('ID'));

        echo json_encode($response);
    }

    function getPartnerData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->PartnerModel->getPartner($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updatePartner(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->PartnerModel->updatePartner(
            $this->input->post('txtUPartnerID'),
            $this->input->post('txtUPartnerName'),
            $this->input->post('txtUPartnerDescription'),
            $this->input->post('cmbVisibility')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Partner updated successfully.!';
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