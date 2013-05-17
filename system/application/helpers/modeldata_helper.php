<?php
if (!defined('BASEPATH')) exit("No direct script access allowed");
function model_data($element, $array) {
	$ret_array=array();
	foreach($array as $key=>$value) {
		array_push($ret_array, $value->$element);}
	return $ret_array;
}
?>
