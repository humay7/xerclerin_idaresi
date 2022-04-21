<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OdenisTable extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('odenis_table');
		
	}
	function index(){
		$data['query'] = $this->odenis_table->viewtable();
		$this->load->view('odenis_table', $data);
			
	}

}
