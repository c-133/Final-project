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
<body>
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
          <p class="rights-text">© 2020 صمم بواسطة أحمد أبل كل الحقوق محفوظه.</p>
        </div>

        <div class="right-col">
          <h1>جريدتنا</h1>
          <div class="border"></div>
          <p>ضع البريد الالكتروني لتصلك اخر التطورات والتحديثات</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="ضع البريد الالكتروني">
            <input type="submit" class="btn" value="تأكيد">
          </form>
        </div>
      </div>
    </footer>
    <!-- end of footer section -->
  
      <script src="../js/app.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>



