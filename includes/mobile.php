<?php

function ju_excerpt_length($length){
	global $is_iphone;

	if(wp_is_mobile()){
		$length =  20;
	}

	if($is_iphone){
		$length = 30;
	}

	return $length;
}