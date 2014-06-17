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


<?php include("redirect.php");
session_start();
	if(isset($_SESSION['teacher']) )
	{
	redirect("modify_add.php");	
	}?>

    <?php 


	
connect();
error_reporting(E_ALL ^ E_NOTICE);



$teacher=$_POST['teacher'];
$passwd=$_POST['passwd'];








  
if($_POST['send']) {
$erm = array();
$recherche = ("SELECT * FROM teacher WHERE teacher_account='$teacher';" ) ;
$result = mysql_query($recherche);
$row = mysql_fetch_array($result);
if ($row) {
	if ($row[3]==$passwd) {
	
	$_SESSION['idteacher'] = $row[0];
    $_SESSION['teacher'] = $row[1];
		

		redirect("modify_add.php");
	
	}
	else $erm[]="Votre Mot de passe est Incorrecte";
	
}

else $erm[]="Cet utilisateur n'existe pas !!!";







}

            
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<body>
<center>
<form action="con_teacher.php" method="post" dir="ltr" lang="fr">
<table width="445" height="203">
<tr>
<td>
</td>
<td>
<?php
 if(!empty($erm) ){
	?>
	<div class="error" >
	<?php
foreach($erm as $a=>$b){ echo "- ".$b."<br>";} 
}
?>
</div>
</td>
</tr>
<tr>
<td>
Nom du professeur : 
</td>
<td>
<input name="teacher" type="text" size="30" maxlength="20" />
</td>
<tr>
<td>
Mot de passe    :
</td>
<td> 
<input name="passwd" type="password" size="30" maxlength="20" />
</td>
</tr>
<tr>
<td>
</td>
<td>
<input name="send" type="submit" value="Se Connecter"  />
</td>
</tr>
</table>
</form>
</center>
</body>
</html>