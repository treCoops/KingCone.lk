<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->model('PartnerModel');
        $this->load->model('ReviewModel');
    }

	public function index()
	{
	    $data['title'] = 'Home | KingKone';
	    $data['content'] = 'home';
	    $data['Special'] = $this->ProductModel->getAllSeasonal();
	    $data['Flavors'] = $this->ProductModel->getAllFlavours();
	    $data['Partners'] = $this->PartnerModel->getAllPartners();
	    $data['Reviews'] = $this->ReviewModel->getAllReviews();

//	    var_dump($this->ReviewModel->getAllReviews()); die;

		$this->load->view('Template/template', $data);
	}
}
