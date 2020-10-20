<?php
 session_start();
 $_SESSION['currdoc']=5;
 $_SESSION['currhos']=1;
 header("Location: bookform.php");
?>