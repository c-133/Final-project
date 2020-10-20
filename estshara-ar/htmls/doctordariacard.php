<?php
 session_start();
 $_SESSION['currdoc']=9;
 $_SESSION['currhos']=1;
 header("Location: bookform.php");
?>