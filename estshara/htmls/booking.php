<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>contact us</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="../css/contact.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"><link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0c744cb901.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
body {
  background-color: #f1f1f1;
}

input {
  padding: 10px;
  width: 90%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
</style>
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
            <ul class="navbar-nav">
             <li class="nav-item">
                <a href="./index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="hospitalbook.html" class="nav-link">Hospitals</a>
              </li>
              <li class="nav-item">
                <a href="./about.html" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="./contact.html" class="nav-link">Contact us</a>
              </li>
              <li class="nav-item">
                <a href="statuslogin.html" class="nav-link">Check Status Of Appointment</a>
              </li>
            </ul>
          </div>
          <div class="">
              <button class="btn btn-color btn-lg"><a href="./login.html" class="nav-link">Log In (For Doctor)</a></button>
          </div>
          <div class="colapse avbar-collapse"id="myNavbar">
            <ul class="navbar-nav">
             <li class="nav-item">
                <a href="../../estshara-ar/htmls/index.html" class="nav-link">AR</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
 <div class="container1">
  <form  action="bookcinemanow1.php" method ="post">
    <h1><strong>Select date</strong></h1>

    <h3>Enter Date</h3>
    <input type="date" id="startdate" name="startdate" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d");?>" value="<?php echo $startdate;?>"> 
    <br/>
    <br/>
    <input  type ="submit" name="submit" value="Check" >
  </form>
 </div>
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
            <input type="submit" class="btn1" value="submit">
          </form>
        </div>
      </div>
    </footer>
    <!-- end of footer section -->
      <script src="../js/load.js"></script>  
      <script src="../js/load.js"></script>  
  
      <script src="../js/app.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>



