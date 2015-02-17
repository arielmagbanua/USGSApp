<?php

class Search extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {

		$data['title'] = 'Search Specific Earthquakes';
		
		$this->load->view('templates/header',$data);
		$this->load->view('search_content',$data);
		$this->load->view('templates/footer',$data);
	}
}