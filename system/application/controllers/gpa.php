<?php
class Gpa extends Controller {

	function gpa() {
		parent::Controller();
	}

	function index() {
		$this->load->view('gpa');
	}

	function test() {
		$val=$this->input->post('dep');
		echo $val;
	}
}
