<?php
 session_start();
if (isset($_SESSION['user']))
{
	$_SESSION['statususer']=0;
	$_SESSION['civil_id']=0;
	
header("Location: index.html");
 ?>
        
        <script>alert("Logged Out");</script>
        <?php
}
else
{
	echo "error";
	?>
        
        <script>alert("Not Logged In");</script>
        <?php
	header("Location: statuslogin.html");
}
?>