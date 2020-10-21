<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointments</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/custom.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"><link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c744cb901.js" crossorigin="anonymous"></script>
   
  </head>


  <body onload="myFunction()">

    <div id="loading">
    <div class="filler"></div>
    <svg width="200" height="200">
    
        <filter id="innerShadow" x="-20%" y="-20%" width="140%" height="140%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur"/>
            <feOffset in="blur" dx="2.5" dy="2.5"/>
        </filter>
    
        <g>
            <circle id="shadow" style="fill:rgba(0,0,0,0.1)" cx="97" cy="100" r="87" filter="url(#innerShadow)"></circle>
            <circle id="circle" style="stroke: #FFF; stroke-width: 12px; fill:#20B7AF" cx="100" cy="100" r="80"></circle>
        </g>
        <g>
            <line x1="100" y1="100" x2="100" y2="55" transform="rotate(80 100 100)" style="stroke-width: 3px; stroke: #fffbf9;" id="hourhand">
                <animatetransform attributeName="transform"
                                  attributeType="XML"
                                  type="rotate"
                                  dur="43200s"
                                  repeatCount="indefinite"/>
            </line>
            <line x1="100" y1="100" x2="100" y2="40" style="stroke-width: 4px; stroke: #fdfdfd;" id="minutehand">
                <animatetransform attributeName="transform"
                                  attributeType="XML"
                                  type="rotate"
                                  dur="3600s"
                                  repeatCount="indefinite"/>
            </line>
            <line x1="100" y1="100" x2="100" y2="30" style="stroke-width: 2px; stroke: #C1EFED;" id="secondhand">
                <animatetransform attributeName="transform"
                                  attributeType="XML"
                                  type="rotate"
                                  dur="60s"
                                  repeatCount="indefinite"/>
            </line>
        </g>
        <circle id="center" style="fill:#128A86; stroke: #C1EFED; stroke-width: 2px;" cx="100" cy="100" r="3"></circle>
    </svg>
  </div>
    

 



    <?php

session_start();

        if(isset($_SESSION['user']))
        {
            
        echo "";
            
            }

        else{
            
       header('location:login.html');
            
            }
?>

    <!-- Nav Bar -->
	
    <nav class="navbar navbar-expand-lg nav-back fixed-top"id="nav">
        <div class="container-fluid">
            <a href="./index.html" class="navbar-brand text-uppercase"><img src="../images/logo.png" width="200px" height="75px"></a>
            <button class="navbar-toggler navbar-toggler-right"type="button"
            data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
            aria-expanded="false" aria-label="toggle navigation">
            <i class="fas fa-syringe fa-2x"></i>
          </button>
          <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="./doctorarea.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
	
    <!--nav class="navbar navbar-expand-lg nav-back fixed-top"id="nav">
        <div class="container mmg">
            <a href="index.html" class="navbar-brand text-uppercase">estshara</a>
            <button class="navbar-toggler navbar-toggler-right"type="button"
            data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
            aria-expanded="false" aria-label="toggle navigation">
            <i class="fas fa-syringe fa-2x"></i>
          </button>
          <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="./doctorarea.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
    </nav-->
    <!-- End of Nav Bar -->


    <!-- Hero -->
      
    <!-- end of Hero -->


    <!-- Services -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="services" class="services mt-5 mb-3 py-3">
      <div class="container">
        
            <div class="service shadow">
             
              <br>
                <table border="2" align="center" style="width:80%; margin-top=40px;">
    <tr>
        <th>Appointment Id</th>
        <th>Patient Name</th>
        <th>Date</th>
        <th>Visit Time</th>
        <th>Leaving Time</th>
        <th>Approval</th>
    </tr>
    


<?php


    include('dbcon.php');
    
    $id=$_SESSION['user'];
    
    $qry = "SELECT * FROM `booking` WHERE `doctorid` ='$id'";
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        ?>
        <script>alert("No Appointmet!")</script>
        
        <?php
        
    }else{

        while($data=mysqli_fetch_assoc($run)){
            ?>
           
            <tr>
                    <td><?php echo $data['aid'] ?></td>
                    <td><?php echo $data['customername'] ?></td>
                    <td><?php echo $data['doctordate'] ?></td>
                    <td><?php echo $data['doctortime'] ?></td>
                    <td><?php echo $data['doctorendtime'] ?></td>
                    <td><?php echo $data['approval'] ?></td>
                    <td><a href="approval.php?sid=<?php echo $data['aid']; ?>">Approve</a></td>
                    
            </tr>
            
            
    
            <?php
                
        }
        
    }


?>
  </table>
            </div>
         
      </div>
    </section>
    <!-- end of Services -->




    <!-- footer section -->
    
    <!-- end of footer section -->
      <script src="../js/load.js"></script>  














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  </body>


</html>
