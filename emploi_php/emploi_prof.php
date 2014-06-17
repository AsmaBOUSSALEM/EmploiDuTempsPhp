<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>projet php</title>



<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
	    
    <div id="templatemo_header"><table width="939" > <tr>
    
<th><img src="images/logo_FSA.png" width="614" height="117" /></th></tr></table></div> <!-- end of templatemo header -->
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="http://www.fsa.ac.ma">site de la FSA</a></li>
            <li><a href="con_teacher.php">connectez-vous</a></li>
           
      </ul>    	
    </div> <!-- end of templatemo_menu -->

<html>

<body id=corps>
<?php
error_reporting(E_ALL ^ E_NOTICE);


mysql_connect('localhost','root','');
	mysql_select_db('emploi_php');
		 $var=$_GET['var'];
	
?>
<table width="940" height="500" border="1">
  <tr>
    <th width="150" scope="col">&nbsp;</th>
    <th width="301" scope="col">
    8h30 - 10H
    &nbsp;</th>
    <th width="301" scope="col">
    10h - 11h30
    &nbsp;</th>
    <th width="12" scope="col">&nbsp;</th>
    <th width="301" scope="col">
    14h30 - 16
    &nbsp;</th>
    <th width="301" scope="col">
    16h - 17h30
    &nbsp;</th>
  </tr>
  <tr>
    <th scope="col">lundi</th>
    <th scope="col">
   <?php 
   
  
  
{
   $query="SELECT * FROM `teacher_tmtbl` WHERE `day_name`='lundi' AND `period_num`='1' AND `disponible`=1 AND `teacher_id`=".$var."";
	$result=mysql_query($query);
	
	
	$row=mysql_fetch_array($result);
		
	
	
	 if($row){echo " disponible";}}
	
	  ?></th>
    <th scope="col">   <?php 
{
    $query="SELECT * FROM teacher_tmtbl WHERE day_name='lundi' AND period_num='2' AND disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo " disponible";}

	
 } ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col">   <?php 
{
    $query="SELECT * FROM teacher_tmtbl WHERE day_name='lundi' AND period_num='3' AND disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo " disponible";}}
	 ?></th>
    <th scope="col"> <?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='lundi' AND period_num='4' AND disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo " disponible";}}
	
  ?></th>
  </tr>
  <tr>
    <th scope="col">mardi</th>
    <th scope="col"> <?php 
{
    $query="SELECT * FROM teacher_tmtbl WHERE day_name='mardi' AND period_num='1' AND disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
  ?></th>
    <th scope="col"> <?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mardi' AND period_num='2' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);

	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
 ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"> <?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mardi' AND period_num='3' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}
	  }
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mardi' AND period_num='4' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
  </tr>
<tr>
    <th scope="col">mercredi</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mercredi' AND period_num='1' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mercredi' AND period_num='2' AND disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	  ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mercredi' AND period_num='3' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='mercredi' AND period_num='4' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th> 
  </tr>
  <tr>
    <th scope="col">jeudi</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='jeudi' AND period_num='1' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='jeudi' AND period_num='2' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='jeudi' AND period_num='3' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='jeudi' AND period_num='4' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
  </tr>
  <tr>
    <th scope="col">vendredi</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='vendredi' AND period_num='1' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='vendredi' AND period_num='2' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='vendredi' AND period_num='3' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='vendredi' AND period_num='4' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
  </tr>
   <tr>
    <th scope="col">samedi</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='samedi' AND period_num='1' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='samedi' AND period_num='2' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='samedi' AND period_num='3' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
	
  ?></th>
    <th scope="col"><?php 
{
   $query="SELECT * FROM teacher_tmtbl WHERE day_name='samedi' AND period_num='4' AND  disponible=1 AND teacher_id=".$var."";
	$result=mysql_query($query);
	
	$row=mysql_fetch_array($result);
	
	   if($row){echo "disponible";}}
	
	
	
  ?></th>
  </tr>


</table>


    <div id=milieu class="parametre_button">
        <a href="modify_add_prof.php">
        <div class="calibre"> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Modifier</div></a>
        </div>
<?php



?>
</body>
</html>