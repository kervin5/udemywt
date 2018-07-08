<?php
function ju_wc_billing_fields($fields){
	unset($fields['billing_company']);

	return $fields;
}

function ju_wc_shipping_fields($fields){
	unset($fields['billing_company']);

	return $fields;
}