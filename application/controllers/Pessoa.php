<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pessoa extends REST_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function index_get(){
		$data = $this->db->get("pessoa")->result();
		$this->response($data, REST_Controller::HTTP_OK);
	}

} 
