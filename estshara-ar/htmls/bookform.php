<?php
session_start();
include('dbcon.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Booking</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="../css/contact.css">
		<link rel="stylesheet" href="../css/custom.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"><link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0c744cb901.js" crossorigin="anonymous"></script>

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

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
    <!--nav class="navbar navbar-expand-lg nav-back fixed-top"id="nav">
        <div class="container">
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
    </nav-->
	
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

    <div class="container1">
        <img src="../images/doctorarea.jpg" class="square" alt="" />
        
          <?php

          if(isset($_GET['date']) && $_GET['date'] != "") {
            $date = date("Y-m-d", strtotime($_GET['date']));

            $jquery_date = date("m/d/Y", strtotime($_GET['date']));
          } else {
            $date = date("Y-m-d");

            $jquery_date = date("m/d/Y");
          }
          ?>
  
          <div class="contact-form">
            <form action="bookform-post.php" method ="post" autocomplete="off">
              <fieldset>
              <h2>Booking Form</h2>
              <br>
              <div class="input-container">
                <input type="text" name="docdate" id="docdate"  class="input" required />
                
                <span>Date</span>
              </div>
              <div class="input-container">
      			  <select name="doctime" id="doctime"><?php
                
                $qry = "SELECT * FROM `booking` WHERE `doctorid` ='".$_SESSION["currdoc"]."' and doctordate='".$date."'";
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        ?><option value="06:00:00">06:00</option>         
                <option value="06:30:00">06:30</option>     
                <option value="07:00:00">07:00</option>      
                <option value="07:30:00">07:30</option>      
                <option value="08:00:00">08:00</option>      
                <option value="08:30:00">08:30</option>      
                <option value="09:00:00">09:00</option>      
                <option value="09:30:00">09:30</option>      
                <option value="10:00:00">10:00</option>      
                <option value="10:30:00">10:30</option>      
                <option value="11:00:00">11:00</option>      
                <option value="11:30:00">11:30</option>      
                <option value="12:00:00">12:00</option>      
                <?php
    }else{

        while($data=mysqli_fetch_assoc($run)){
              $doctime_arr[] = $data["doctortime"];            
        }
         ?><option value="06:00:00" <?php if(in_array("06:00:00", $doctime_arr)) echo "disabled"; ?>>06:00</option>         
                <option value="06:30:00" <?php if(in_array("06:30:00", $doctime_arr)) echo "disabled"; ?>>06:30</option>     
                <option value="07:00:00" <?php if(in_array("07:00:00", $doctime_arr)) echo "disabled"; ?> >07:00</option>      
                <option value="07:30:00" <?php if(in_array("07:30:00", $doctime_arr)) echo "disabled"; ?> >07:30</option>      
                <option value="08:00:00" <?php if(in_array("08:00:00", $doctime_arr)) echo "disabled"; ?> >08:00</option>      
                <option value="08:30:00" <?php if(in_array("08:30:00", $doctime_arr)) echo "disabled"; ?> >08:30</option>      
                <option value="09:00:00" <?php if(in_array("09:00:00", $doctime_arr)) echo "disabled"; ?> >09:00</option>      
                <option value="09:30:00" <?php if(in_array("09:30:00", $doctime_arr)) echo "disabled"; ?> >09:30</option>      
                <option value="10:00:00" <?php if(in_array("10:00:00", $doctime_arr)) echo "disabled"; ?> >10:00</option>      
                <option value="10:30:00" <?php if(in_array("10:30:00", $doctime_arr)) echo "disabled"; ?> >10:30</option>      
                <option value="11:00:00" <?php if(in_array("11:00:00", $doctime_arr)) echo "disabled"; ?> >11:00</option>      
                <option value="11:30:00" <?php if(in_array("11:30:00", $doctime_arr)) echo "disabled"; ?> >11:30</option>      
                <option value="12:00:00" <?php if(in_array("12:00:00", $doctime_arr)) echo "disabled"; ?> >12:00</option>      
                <?php
          
            ?>
           
        
    
            <?php
        
    }



        			  ?>
        				
      			</select>  
                <!--input type="time" name="doctime" min="07:00" max="20:00" class="input"  pattern="[0-9]{2}:[0-9]{2}" required /><span class="validity"></span-->
                <span>Time</span>
              </div>
             
              <div class="input-container">
                <input type="text" name="patname" class="input" required />
                <label for="">Full Name</label>
                <span>Full Name</span>
              </div>
              <div class="input-container">
                <input type="text" name="patcivilid" class="input" required />
                <label for="">Civil ID</label>
                <span>Civil ID</span>
              </div>
              <div class="input-container">
                <input type="text" name="patserialid" class="input" required />
                <label for="">Serial Number</label>
                <span>Serial Number</span>
              </div>
              <div class="input-container">
                <input type="text" name="patphone" class="input" required />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container">
                <input type="text" name="patemail" class="input" required="" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <br>
              <input type="submit" value="Submit" name="submit" class="btn"/>
            </fieldset>
            </form>
          </div>
        
      </div>


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
      <script src="../js/load.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
      <script src="../js/app.js"></script>
<script>
//$(document).ready(function(){
    /*var now = new Date("10/10/2020 16:00:00");
    now.setMinutes(now.getMinutes() + 30); // timestamp
    today = new Date(now); // Date object
    var time = today.getHours() + ":" + ("0" + today.getMinutes()).slice(-2) + ":" + ("0" + today.getSeconds()).slice(-2);
    console.log(time);*/

  /*  var d = new Date();
    var theDate = d.getFullYear() + '-' + ( d.getMonth() + 1 ) + '-' + d.getDate();
    var theTime = theDate + " 15:00:00";
    var newTime = new Date( Date.parse( theTime ) + 30*60*1000 );
    console.log(newTime);*/

    $('#docdate').datepicker({
      minDate : 0,
  });

    $("#docdate").datepicker().datepicker("setDate", '<?php echo $jquery_date; ?>');


  $('#doctime').on('change',function(){
    var startTime = $('#doctime').val();
    var date = $('#docdate').val();
    if(date){
      var now = new Date(date+' '+startTime);
       //console.log(now+'===='+startTime+'===='+date);
      now.setMinutes(now.getMinutes() + 30); // timestamp
      endTime = new Date(now); // Date object
       var endTime = endTime.getHours() + ":" + ("0" + endTime.getMinutes()).slice(-2);
        //console.log(endTime);
      $('#endTime').val(endTime);
    }else{
      alert("Please select Date first...")
    }
  });

  $('#docdate').change(function() {
    window.location = "bookform.php?date=" + $(this).val();
});

 // });
</script>


</body>
</html>