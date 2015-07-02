<?php
	function validateText($text){
		global $error, $count, $ok;
		if(!preg_match('/^[a-z0-9.,\'\&\(\)\s]*$/i',stripslashes(trim($text)))) {			
			$ok = false;
			if ($count == 0)
				 $error = "<p align=center> <strong>Please correct the following errors:</strong></p> ";
			$error .= "- Enter correct value for  <strong>\"".$text."\"</strong>.<br />";
			$count ++;
			return $count;
			return $ok;
		}
		else {
			return $text;
		}
    }
	
	function validateNumber($num){
		global $error, $count, $ok;
		if(!preg_match('/^[0-9]*$/',trim($num))) {
			if ($count == 0)
				 $error = "<p align=left> <strong>Please correct the following errors:</strong></p> ";
            $error .= "- Enter correct number for  <strong>\"".$num."\"</strong>.<br />";
            $count ++;
			$ok = false;
			return $count;
			return $ok;
        }
		else 
			return $num;
	}
	
	function validateNumText($numText){
		global $error, $count, $ok;
		
		if(!preg_match('/^[-a-z0-9]*$/i',trim($numText))) {
			$ok = false;
			if ($count == 0)
				 $error = "<p align=left> <strong>Please correct the following errors:</strong></p> ";
            $error .= "- Enter correct characters for <strong> \"".$numText."\"</strong>.<br />";
            $count ++;
			return $count;
        }
		else
			return $numText;	
	}
	
	function validateMix($text){
		global $error, $count, $ok;
		if(!preg_match('/^[a-z0-9.,\'\&\(\)\@\-\"\+\s]*$/i',stripslashes(trim($text)))) {			
			$ok = false;
			if ($count == 0)
				 $error = "<p align=center> <strong>Please correct the following errors:</strong></p> ";
			$error .= "- Unwanted charactes in <strong>\"".$text."\"</strong>.<br />";
			$count ++;
			return $count;
			return $ok;
		}
		else {
			return $text;
		}
    }
	 function validateEmail($email) {
		global $error, $count, $ok;
		
		if(!(filter_var($email, FILTER_VALIDATE_EMAIL)) && $email != "") {
			
			$ok = false;
			if ($count == 0)
				 $error = "<p align=left> <strong>Please correct the following errors:</strong></p> ";
            $error .= "- Invalid email address2222<br />";
            $count ++;
			return $count;
		}else{
			return $email;
		}	
	
	}  
	 /*function validateEmail($email) {
		return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);	
	
	} */
	
	
	function validatePhone($phone){
		
		global $error, $count, $ok;
		$chars = array("+", "-");
		$phone = str_replace($chars, "", $phone);
		if((!(validateNumber($phone) || strlen($phone) < 13)) && $phone != "") {
			$ok = false;
			if ($count == 0)
				 $error = "<p align=left> <strong>Please correct the following errors:</strong></p>";
            $error .= "- Enter correct phone number<br />";
            $count ++;
			return $count;
			
		}else{
			return $phone;
		}
		
	
	}
	
	function checkSelected($option) {
		if($option == "on")
			return 1;
		else
			return 0;
	}
	?>