<?php
class Gpa extends Controller {

	function gpa() {
		parent::Controller();
	}

	function index() {
		$this->load->view('gpa');
		$this->load->helper('modeldata');
	}

	function test() {
		$this->load->helper('modeldata');
		$this->load->model('gpamod');
		$val=$this->input->post('dep');
		$res=$this->gpamod->table($val);
		print_r($res);
	}
}
