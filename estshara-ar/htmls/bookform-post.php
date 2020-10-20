<?php
session_start();
include('dbcon.php');
if(isset($_POST['submit']))
{
    
    
    $fullname =  $_POST['patname'];
    $docdate = date("Y-m-d", strtotime($_POST['docdate']));
    $doctime =  $_POST['doctime'];
    $civid = $_POST['patcivilid'];
    $phon =  $_POST['patphone'];
    $emai =  $_POST['patemail'];
    $snumber =  $_POST['patserialid'];
    $docid = $_SESSION['currdoc'];
    $hosid = $_SESSION['currhos'];

    $unix_time = strtotime('January 1 2010 '.$doctime); // create a unix timestamp
    $endTime =date( "H:i:s", strtotime('+30 minutes', $unix_time) );
    //echo $endTime; die;
    $qry = "SELECT * FROM `booking` WHERE `doctortime` >= '$doctime' AND `doctorendtime` <= '$endTime' AND `doctordate` ='$docdate' AND `hospitalid` ='$hosid' AND `doctorid` = '$docid' ";
    $run = mysqli_query($con, $qry);
    if(mysqli_num_rows($run)<1)
    {
        
       $qry ="INSERT INTO `booking`(`hospitalid`, `doctorid`, `customername`, `civilid`,`serialnumber`, `phone`, `email`, `doctordate`, `doctortime`,`doctorendtime`,`approval`) VALUES ('$hosid','$docid','$fullname','$civid', '$snumber', '$phon', '$emai', '$docdate', '$doctime', '$endTime', 'Waiting For Approval')";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){

        $qry = "select aid from booking order by aid DESC limit 1";
        $run = mysqli_query($con, $qry);
        $data=mysqli_fetch_assoc($run);
        $val=$data['aid'];
        $_SESSION['bookingid']= $val;
        echo "<script>alert('Booking Done! Your Booking Id Is: $val');</script>";
        header("Location: reciept.php");
        ?>
        <?php
    }
    else
    {

     ?>
     <script>alert("Database Error");</script>
     <?php 
        
    }    
    }
    else
    {

    ?>
        <script>alert("Already Appointment Present At This Time");</script>
        <?php
    
    }
        
}

else
{
      ?>
 <script>alert("Enter Data In Form Again");</script>
  <?php   
}

?>
<br>
<br>
<br>
<div>
<font size="10"><a href="index.html">Go To Home Page</a></font>
<br>
<br>
<br>
<font size="10"><a href="bookform.php">Try Again</a></font>
<br>
<br>
<br>
<font size="10"><a href="bookform.php">Want To Do More Booking From Same Doctor?</a></font>
</div>
