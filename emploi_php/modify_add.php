<?php require("redirect.php");?>
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
            <li><a href="www.fsa.ac.ma">site de la FSA</a></li>
            <li><a href="con_teacher.php">connectez-vous</a></li>
           
      </ul>    	
    </div> <!-- end of templatemo_menu -->

<html>

<body bgcolor="#FFAF5F" leftmargin="0" topmargin="100" marginwidth="0" marginheight="0">

<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if(( $_SESSION['teacher']==""))
	{
		echo"<script>alert('Vous devez vous connecter')</script>";
	redirect("con_teacher.php");
	die();	
	}
	



	connect();
    $recherche1 = ("SELECT * FROM period ;" ) ;
    $result1 = mysql_query($recherche1);
	
	$recherche2 = ("SELECT * FROM course ;" ) ;
    $result2 = mysql_query($recherche2);
	
	$recherche3 = ("SELECT * FROM class ;" ) ;
    $result3 = mysql_query($recherche3);
	
	
	 ?>
     <center>
<form action="modify_add.php" method="post" dir="ltr" lang="fr">
<table width="777" height="97" border="0" align="center" id="tableau">
               
      <td width="328" height="45"><strong>jour : </strong></td>
        <td> <select size="1" name="day" >
         <option>choisissez</option>
         <option>lundi</option>
         <option>mardi</option>
         <option>mercredi</option>
         <option>jeudi</option>
         <option>vendredi</option>
         <option>samedi</option>
         
      
    </select></td>
              </tr>
              <tr>
 
                <td width="328" height="45"><strong>debut de periode : </strong></td>
        <td> <select size="1" name="per" >
         <option>choisissez</option>
    <?php
	
while($row1 = mysql_fetch_array($result1)) {
   echo '<option>', $row1[1] , '</option>';
   
}



?>
    </select></td>
              </tr>
 <tr>
 
                <td width="328" height="45"><strong>matiere : </strong></td>
        <td> <select size="1" name="mat" >
         <option>choisissez</option>
    <?php
	
while($row2 = mysql_fetch_array($result2)) {
   echo '<option>', $row2[1], '</option>';
   
}



?>
    </select></td>
              </tr>
 
 <tr>
 
                <td width="328" height="45"><strong>filiere : </strong></td>
        <td> <select size="1" name="cls" >
         <option>choisissez</option>
    <?php
	//$row = mysql_fetch_array($result); 
while($row3 = mysql_fetch_array($result3)) {
   echo '<option>', $row3[1], '</option>';
   
}



?>
    </select></td>
              </tr>
              
              <td height="46">
              <td>
              <input name="send" type="submit" value="Valider"  />
                <input name="init" type="reset" value="initialiser" class="parametre" height=45px />

              </td>
              </tr>
            </table>

          </form>
          </center>
<?php

$day=$_POST['day'];
$per=$_POST['per'];
$mat=$_POST['mat'];
$cls=$_POST['cls'];

 $query4="SELECT * FROM period WHERE period_start='$per' ";
	$result4=mysql_query($query4);
	$row4=mysql_fetch_array($result4);

$query5="SELECT * FROM class WHERE class_name='$cls' ";
	$result5=mysql_query($query5);
	$row5=mysql_fetch_array($result5);
	
	$query6="SELECT * FROM `course` WHERE `course_name`='$mat' ";
	$result6=mysql_query($query6);
	$row6=mysql_fetch_array($result6);


 $query7="SELECT * FROM planned_tmtbl WHERE day_name='$day' AND period_num='$row4[0]' AND class_id='$row5[0]' ";
	$result7=mysql_query($query7);
	$row7=mysql_fetch_array($result7);
	
	
	
		if($_POST['send']){
			
		mysql_query("UPDATE `planned_tmtbl` SET `course_id`=$row6[0] WHERE `day_name`='$day' AND `period_num`=$row4[0] AND `class_id`=$row5[0]");}
		
	
			mysql_query("INSERT INTO `emploi_php`.`planned_tmtbl`  VALUES (NULL, '$day', '$row4[0]', '$row6[0]', '$row5[0]')");
		
			
	
?>
		</body>
        </html>