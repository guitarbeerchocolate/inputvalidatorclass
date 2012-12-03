<?php
class inputvalidator
{
	function __construct()
	{

	}    

	function isWebAddress($v)
	{
		return preg_match('^(http://|https://)(([a-z0-9]([-a-z0-9]*[a-z0-9]+)?){1,63}\.)+[a-z]{2,6}^',$v);
	}

	function isEmailAddress($v)
	{
		return preg_match('^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$^',$v);
	}

	function isStrongPassword($v)
	{
		return preg_match('/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/',$v);
	}

	function __destruct()
	{
	
	}
}
?>