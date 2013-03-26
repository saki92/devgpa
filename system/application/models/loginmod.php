<?php

class Loginmod extends Model {

	function loginmod() {
		parent::Model();
	}

	function user() {
		$test=$this->db->query("select name, college from students where number='31109106067'")->result();
		return $test;
	}

}
?>
