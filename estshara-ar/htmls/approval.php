<?php
    
    include('dbcon.php');
    $sid = $_GET['sid'];
    
    $qry ="Update booking set `approval`='Approved' WHERE `aid`='$sid'";
    
    $run = mysqli_query($con, $qry);

    if($run==true){

    	?>
        <script>alert("Approved")</script>
        
        <?php
         header('location:docappointment.php');

     }
     else
     {
     	?>
        <script>alert("Error! Try Again!")</script>
        
        <?php

       header('location:docappointment.php');        

     }


 ?>