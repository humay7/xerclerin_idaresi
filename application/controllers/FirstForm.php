<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstForm extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('nov_model');
		
	}
	function index(){
		
			$data1['odenis_novu'] = $this->nov_model->fetch_nov();
			
			$data1['valyuta'] = $this->nov_model->fetch_valyuta();
		 	$this->load->view('odenis_novu', $data1);
			

		
			if ($this->input->post('finish')) {
				$this->form_validation->set_rules('nov', 'nov', 'trim|required');
				$this->form_validation->set_rules('valyuta', 'valyuta', 'trim|required');
				$this->form_validation->set_rules('mebleg', 'mebleg', 'trim|required');
				$this->form_validation->set_rules('kategoriya', 'kategoriya', 'trim|required');
				$this->form_validation->set_rules('rey', 'Rey', '');
				
	
				if ($this->form_validation->run() !== FALSE) {
					$result = $this->nov_model->insert_odenis($this->input->post('mebleg'), $this->input->post('kategoriya'), $this->input->post('valyuta'), $this->input->post('nov'), $this->input->post('rey'));
					$data['success'] = $result;
				    $this->load->view('odenis_novu', $data);
				} 
				// else {
				// 	$this->load->view('odenis_novu');
				// }
			} 
			// else {
			// 	$this->load->view('odenis_novu');
			// }
		}
	
	}
