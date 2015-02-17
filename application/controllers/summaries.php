<?php

class Summaries extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->all();
	}

	public function all(){
		$data['title'] = 'All Summaries';
		//$this->load->view('summaries',$data);
		$this->load->view('templates/header',$data);
		$this->load->view('summaries_content',$data);
		$this->load->view('templates/footer',$data);
	}

}