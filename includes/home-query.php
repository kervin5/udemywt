<?php
function ju_modify_homepage_query(WP_Query $query){
	if($query->is_home() && $query->is_main_query()){
		$query->set('post_type',['post','recipe']);
	}
}