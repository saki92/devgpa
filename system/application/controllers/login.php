<?php
class Login extends Controller {

	function login() {
		parent::Controller();
	}

	function index() {
		$this->load->model('loginmod');
		$t['test']=$this->loginmod->user();
		$this->load->view('test',$t);
		//echo $test[0]->college;
		//echo print_r($t);
	}

}
