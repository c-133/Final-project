<?php
 session_start();
if (isset($_SESSION['user']))
{
	$_SESSION['user']=0;
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
	header("Location: login.html");
}
?>