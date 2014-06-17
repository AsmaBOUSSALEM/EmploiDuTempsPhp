<?php 
session_start();
require("redirect.php");
error_reporting(E_ALL ^ E_NOTICE);

if(( $_SESSION['teacher']==""))
	{	
	redirect("con_teacher.php");	
	}
else redirect("modify_add.php");	

?>