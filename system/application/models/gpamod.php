<?php
class Gpamod extends Model {

	function gpamod() {
		parent::Model();
	}

	function table($dep) {
		$tab=$this->db->query("select code from subjects where dept='$dep'")->result();
//		$tab=$tab[0]->code;
		$tab=model_data('code', $tab);
		return $tab;
	}
}

