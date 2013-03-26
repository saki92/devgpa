<?php

class Loginmod extends Model {

	function loginmod() {
		parent::Model();
	}

	function user() {
		$test=$this->db->query("select user from students where number='31109106067'")->result();
		return $test;
	}

}
?>
