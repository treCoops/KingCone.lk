<?php


class BFlavour extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('ProductModel');
    }

    public function index()
    {
        $data['title'] = "Manage Flavours | KingKone";
        $data['content'] = "Backend/Flavours/manageFlavor";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addFlavour(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/Flavour/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->ProductModel->isExistFlavour($this->input->post('txtFlavourName'))){

            if (!$this->upload->do_upload('txtFlavourImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['flavour_img'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['flavour_img'] = $img["file_name"];
            }

            $master_data['flavour_name'] = $this->input->post('txtFlavourName');
            $master_data['flavour_description'] = $this->input->post('txtFlavourDescription');
            $master_data['flavour_price'] = $this->input->post('txtFlavourPrice');
            $master_data['flavour_status'] = 0;


            $result = $this->ProductModel->addFlavour($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Flavour has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'Flavour name is already exits.!';
        }

        echo json_encode($response);
    }

    function genRandomString()
    {
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

    function getFlavoursForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->ProductModel->getFlavours($param));
    }

    function deleteFlavour(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->ProductModel->getFlavour($this->input->post('ID'));

        if($imgData[0]->flavour_img != null){
            unlink('assets/img/Flavour/'.$imgData[0]->flavour_img);
        }

        $response['result'] = $this->ProductModel->deleteFlavour($this->input->post('ID'));

        echo json_encode($response);
    }

    function getFlavourData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->ProductModel->getFlavour($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updateFlavour(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->ProductModel->updateFlavour(
            $this->input->post('txtUFlavourID'),
            $this->input->post('txtUFlavourName'),
            $this->input->post('txtUFlavourDescription'),
            $this->input->post('txtUFlavourPrice'),
            $this->input->post('cmbVisibility')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Flavour updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }

}