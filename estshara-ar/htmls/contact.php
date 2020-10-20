<?php
session_start();
include('dbcon.php');
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $qry = "INSERT INTO patient(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
    
    $run = mysqli_query($con,$qry);
    
    
    if($run == true){
        
        ?>
        <script>alert('Message Sent!');
            window.open('contact.html','_self');    
            </script>
        <?php
        
    }
    else
    {
        ?>
        
        <script>alert("Error Sending Try Again!");
         window.open('contact.html','_self');    
         </script>
        <?php
    }
}

?>