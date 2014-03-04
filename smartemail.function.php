<?php

	function smartEmail($from = '',$body_html = '',$to = '',$subject = ''){
		if($from == '' OR $body_html == '' OR $to == '' OR $subject == ''){
			return 0;
		}
		else{
			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
			$headers .= "From: " . $from . "\r\n";
			$headers .= "Return-Path: " . $from . "\r\n";
			$body = $body_html;
			mail($to,$subject,$body,$headers);
			return 1;
		}
		
	}



?>