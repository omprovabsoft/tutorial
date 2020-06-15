<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){   
		$data['title'] = "TUTORIAL";
		$this->load->view('index', $data);
	}
	public function angularjs(){   
		$data['title'] = "ANGULAR JS";
		$this->load->view('angularjs', $data);
	}
	public function java(){   
		$data['title'] = "JAVA";
		$this->load->view('java', $data);
	}
	public function oops(){   
		$data['title'] = "OOPS";
		$this->load->view('oops', $data);
	}
	public function dependency_injection(){   
		$data['title'] = "DEPENDENCY INJECTION";
		$this->load->view('dependency_injection', $data);
	}
}
