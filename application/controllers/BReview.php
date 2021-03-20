<?php


class BReview extends CI_Controller
{

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url', 'form');

        $User_Session = $this->session->userdata('User_Session');

        if ($User_Session == null) {
            redirect(base_url('BLogin/notLoggedIn'));
        }

        $this->load->model('ReviewModel');
    }

    public function index()
    {
        $data['title'] = "Manage Reviews | KingKone";
        $data['content'] = "Backend/Reviews/manageReview";

        $this->load->view('Backend/Template/template', $data);
    }

    public function addReview(){

        $rand_name = $this->genRandomString()."_".session_id()."_".time();

        $config['upload_path'] = './assets/img/Reviewer/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3000;
        $config['max_width'] = 2500;
        $config['max_height'] = 2500;
        $config['file_name'] = $rand_name;

        $response = array();

        $this->load->library('upload', $config);

        if($this->ReviewModel->isExistReview($this->input->post('txtReviewTopic'), $this->input->post('txtReviewerName'))){

            if (!$this->upload->do_upload('txtReviewerImage')) {

                $error = $this->upload->display_errors();
                $response['error'] = $error;
                $master_data['reviewer_image'] = null;

            }else{
                $img = $this->upload->data();
                $master_data['reviewer_image'] = $img["file_name"];
            }

            $master_data['review_topic'] = $this->input->post('txtReviewTopic');
            $master_data['review_description'] = $this->input->post('txtReviewDescription');
            $master_data['reviewer_name'] = $this->input->post('txtReviewerName');
            $master_data['reviewer_designation'] = $this->input->post('txtReviewerDesignation');
            $master_data['review_status'] = 0;


            $result = $this->ReviewModel->addReview($master_data);
            if($result){
                $response['status'] = 200;
                $response['message'] = 'Review has inserted successfully.!';

            }else{
                $response['status'] = 500;
                $response['message'] = 'Operation Failed.!';
            }

        }else{
            $response['status'] = 500;
            $response['message'] = 'Review is already exits.!';
        }

        echo json_encode($response);
    }

    function getReviewsForTable(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $param['draw'] = $this->input->get('draw');
        $param['length'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['columns'] = $this->input->get('columns');
        $param['search'] = $this->input->get('search[value]');
        $param['order'] = $this->input->get('order');

        echo json_encode($this->ReviewModel->getReviews($param));
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

    function deleteReview(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $imgData = $this->ReviewModel->getReview($this->input->post('ID'));

        if($imgData[0]->reviewer_image != null){
            unlink('assets/img/Reviewer/'.$imgData[0]->reviewer_image);
        }

        $response['result'] = $this->ReviewModel->deleteReview($this->input->post('ID'));

        echo json_encode($response);
    }

    function getReviewData(){
        header("Content-type:application/json");

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $result = $this->ReviewModel->getReview($this->input->post('ID'));

        if($result != null){
            $response['status'] = 200;
            $response['data'] = $result;
        }else{
            $response['status'] = 500;
            $response['message'] = 'No fetching error.!';
        }

        echo json_encode($response);
    }

    function updateReview(){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit','2048M');

        $response = array();

        $result = $this->ReviewModel->updateReview(
            $this->input->post('txtUReviewID'),
            $this->input->post('txtUReviewTopic'),
            $this->input->post('txtUReviewDescription'),
            $this->input->post('txtUReviewerName'),
            $this->input->post('txtUReviewerDesignation'),
            $this->input->post('cmbVisibility')
        );

        if ($result) {
            $response['status'] = 200;
            $response['message'] = 'Review updated successfully.!';
        } else {
            $response['status'] = 500;
            $response['message'] = 'Operation failed.!';
        }

        echo json_encode($response);
    }


}