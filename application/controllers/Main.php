<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	// 	// $this->load->helper('url');
	// }
	public function index(){
		$this->load->view('index');
	}
	public function about(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function restrictedarea(){
     	 $this->load->view('restricted_area');
 	}

	
}