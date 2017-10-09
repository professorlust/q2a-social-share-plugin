<?php

function qa_path($request, $params=null, $rooturl=null, $neaturls=null, $anchor=null){
	$url = qa_path_base($request, $params, $rooturl, $neaturls, $anchor);
	if((bool)qa_opt('ss_is_q_post')){
		$url .= '?vadt=true';
		qa_opt('ss_is_q_post',false);
	}
	return $url;
}

function qa_clicked($name){
	if($name == 'doask'){
		qa_opt('ss_is_q_post',true);
	}
	return qa_clicked_base($name);
}