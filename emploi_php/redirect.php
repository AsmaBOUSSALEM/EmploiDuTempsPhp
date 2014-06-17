<?php


function connect(){	
$conn = mysql_connect('localhost','root', '');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
	
	mysql_select_db('emploi_php');
	
	return $conn;
}



function redirect($url, $timer=0){
	if($url=="index.php"){$url = dirname($_SERVER["PHP_SELF"]);}
	global $use_header;
		if($use_header){
			header('location: '.$url);	
		}else{
			echo '<meta http-equiv="refresh" content="'.$timer.';URL='.$url.'">';	
		}
	}
	
	

?>