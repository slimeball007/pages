<?php


function get_domain($email)
{
	$email = substr($email, strrpos($email, '@' )+1);
	$email = substr($email, 0, strpos($email, '.'));

	return $email;
}


?>