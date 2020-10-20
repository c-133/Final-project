<?php
 session_start();
 $_SESSION['currdoc']=11;
 $_SESSION['currhos']=1;
 header("Location: bookform.php");
?>