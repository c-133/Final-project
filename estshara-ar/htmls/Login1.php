<?php
session_start();
include('dbcon.php');
if (isset($_POST['submit'])) {
	//echo "<script type='text/javascript'> alert('pp') </script>";
    $use = $_POST['use'];
    $pas = $_POST['Pas'];
    
    $qry = "SELECT * FROM `doctor` WHERE `username` ='$use' AND `password` = '$pas'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row <1){
        
        ?>
        <script>alert('Username Or Password Not Matched! Try Again Please');
            window.open('login.html','_self');    
            </script>
        <?php
        
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        //echo "$id";
        
        
        
        $_SESSION['user']= $id;
        header('location:doctorarea.html');
        ?>
        
        <script>alert("Logged In Succesffuly");</script>
        <?php
    }
}

?>