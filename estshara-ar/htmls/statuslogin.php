<?php
session_start();
include('dbcon.php');
if (isset($_POST['submit'])) {
	//echo "<script type='text/javascript'> alert('pp') </script>";
    $use = $_POST['use'];
    $email = $_POST['email'];
    
    $qry = "SELECT * FROM `booking` WHERE `civilid` ='$use' and `email` ='$email'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row <1){
        
        ?>
        <script>alert('Appointment ID does not exist! Try Again Please');
            window.open('statuslogin.html','_self');    
            </script>
        <?php
        
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['aid'];
        $civilid = $data['civilid'];
        
        //echo "$id";
        
        
        
        $_SESSION['statususer']= $id;
		$_SESSION['civil_id']= $civilid;
        header('location:status.php');
        ?>
        
        <script>alert("Logged In Succesffuly");</script>
        <?php
    }
}

?>