<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospitals</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/hospital.css">
    <link rel="stylesheet" href="../css/custom.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://kit.fontawesome.com/0c744cb901.js" crossorigin="anonymous"></script>
   
  </head>


  <body>

    <!-- Nav Bar -->
    <!-- <nav class="navbar navbar-expand-lg nav-back fixed-top"id="nav">
        <div class="container mmg">
            <a href="./index.html" class="navbar-brand text-uppercase">estshara</a>
            <button class="navbar-toggler navbar-toggler-right"type="button"
            data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
            aria-expanded="false" aria-label="toggle navigation">
            <i class="fas fa-syringe fa-2x"></i>
          </button>
          <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a href="./index.html" class="nav-link">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a href="hospitalbook.html" class="nav-link">المستشفيات</a>
              </li>
              <li class="nav-item">
                <a href="./about.html" class="nav-link">من نحن</a>
              </li>
              <li class="nav-item">
                <a href="./contact.html" class="nav-link">تواصل معنا</a>
              </li>
              <li class="nav-item">
                <a href="statuslogin.html" class="nav-link">تحقق من مواعيدك</a>
              </li>
              
              <li class="nav-item">
                <button class="btn btn-color btn-lg"><a href="./login.html" class="nav-link">تسجيل الدخول للدكتور</a></button>
              </li>
            </ul>
          </div>
      </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg nav-back fixed-top"id="nav">
        <div class="container-fluid">
            <a href="./index.html" class="navbar-brand text-uppercase"><img src="../images/logo.png" width="200px" height="75px"></a>
            <button class="navbar-toggler navbar-toggler-right"type="button"
            data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar"
            aria-expanded="false" aria-label="toggle navigation">
            <i class="fas fa-syringe fa-2x"></i>
          </button>
          <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav">
             <li class="nav-item">
                <a href="./index.html" class="nav-link">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a href="hospitalbook.html" class="nav-link">المستشفيات</a>
              </li>
              <li class="nav-item">
                <a href="./about.html" class="nav-link">من نحن</a>
              </li>
              <li class="nav-item">
                <a href="./contact.html" class="nav-link">تواصل معنا</a>
              </li>
              <li class="nav-item">
                <a href="statuslogin.html" class="nav-link">تحقق من مواعيدك</a>
              </li>
            </ul>
          </div>
          <div class="">
              <button class="btn btn-color btn-lg"><a href="./login.html" class="nav-link">تسجيل الدخول للدكتور</a></button>
          </div>
          <div class="colapse avbar-collapse"id="myNavbar">
            <ul class="navbar-nav">
             <li class="nav-item">
                <a href="../../estshara/htmls/index.html" class="nav-link">EN</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- End of Nav Bar -->


    <!-- Hero -->
      <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative">
          <h1>Choose Your Hospital</h1>
          <h2 class="text-uppercase">What Hospital Do You Want?</h2>
        </div>
      </section>
    <!-- end of Hero -->


    <!-- Services -->
    <br>
    <br>
    <br>
    <section id="services" class="services mt-5 mb-3 py-3">
      <div class="container">
        
            <div class="service shadow">
              <form action="hospitalbook1.php" method="post">

         <h3 colspan="2" align="center" >Search</h3>

        <h5>Hospital Name   : </h5>
        <input type="textr" name="standard">
     
         <input class="btn btn-color btn-lg" type="submit" value="Show" name="submit" >
     
  </form>
</div>
</div>

<?php

if(isset($_POST['submit'])){

    include('dbcon.php');
    
    $standard = $_POST['standard'];
    
    $qry = "SELECT * FROM `hospitalinfo` WHERE `hosname` like '%$standard%'";
    $run = mysqli_query($con, $qry);
    
    
    if(mysqli_num_rows($run)<1){

        
         ?>
        <script> alert("Match not found !"); </script>
        
        
     <?php
        
       
        
    }
    else{
        
        $data = mysqli_fetch_assoc($run);
        $qry1 ="select concat(hosname,'.html') AS hospitalhtml from hospitalinfo where `hosname` like '%$standard%'";
        $run1 = mysqli_query($con, $qry1);
        $data1 = mysqli_fetch_assoc($run1);
        

        ?>
          
          
    <section id="services" class="services mt-5 mb-3 py-3">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="service_box">
                <div class="bg_grid"><img src="../images/AlShifa.png" class="about-img"></div>
                <div class="box_content">
                  <a href="booking.html"><h3><?php echo $data['hosname'];  ?></h3></a>
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>      
          
          
          <?php
           
       
    }
    
    
    
}

?>

          
    <!-- end of Services -->




    <!-- footer section -->
    <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="/images/barmej.png" alt="" class="logo">
          <div class="social-media">
            <a href="https://www.facebook.com/barmej"target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/barmej"target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/barmej/"target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/Barmej"target="_blank"><i class="fab fa-youtube"></i></a>
          </div>
          <p class="rights-text">© 2020 Created By Ahmad Abul All Rights Reserved.</p>
        </div>

        <div class="right-col">
          <h1>Our Newsletter</h1>
          <div class="border"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
            <input type="submit" class="btn" value="submit">
          </form>
        </div>
      </div>
    </footer>
    <!-- end of footer section -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  </body>


</html>