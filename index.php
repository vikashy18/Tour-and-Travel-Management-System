<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> EXOTIC INDIA </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <div class="hero-image">
    <div class="hero-text">
      <h2 style="font-size:100px">EXOTIC INDIA</h2>
    </div>
  </div>
  <?php include('header.php')?>

 

  <center>
      <div class="start">
        <i>Hey wanderer, planning to visit India? Well you are at the right place as we customize tours to India and
          international trips. Not that we are boasting, but all our <br> itineraries are tailor-made so you have a lot to
          experiment. Choose from our handpicked tour packages or let our 100+ experts plan one for you. If you are
          traveling <br> to India for the first time, take a look at our meticulously crafted tour packages.</i>
      </div>
  </center>
    <div class="head">
      <center>BEST HOLIDAY IDEAS</center>
    </div>
    <center>
      <div class="intro">
        <i>Holidays in India are nothing short of a dream come true. The ultimate treasures of amazing experiences awaits
          here.
          As you set a foot in India, you will find yourselves <br> in love. Let us help you have a memorable affair,
          browse
          through our sea of ideas and pick your pearl.</i>
      </div>
    </center>
    <br><br>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="ladakh.php">
          <img src="images/leh.jpg" width="600" height="400">
        </a>
        <div class="desc">LADAKH</div>
      </div>
    </div>
  
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="rajasthan.php">
          <img src="images/raj.jpg" width="600" height="400">
        </a>
        <div class="desc">RAJASTHAN</div>
      </div>
    </div>
  
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="varanshi.php">
          <img src="images/var.jpg" width="600" height="400">
        </a>
        <div class="desc">VARANASHI</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="andaman.php">
          <img src="images/andman.jpg" width="600" height="400">
        </a>
        <div class="desc">ANDAMAN</div>
      </div>
      <br><br>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="uttarakhand.php">
          <img src="images/uttara.jpg">
        </a>
        <div class="desc">UTTARAKHAND</div>
      </div>
    </div>
  
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="kerala.php">
          <img src="images/ker.jpg">
        </a>
        <div class="desc">KERALA</div>
      </div>
    </div>
  
  
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="darjvd.php">
          <img src="images/dar.jpg">
        </a>
        <div class="desc">DARJEELING</div>
      </div>
    </div>
  
    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="goavd.php">
          <img src="images/goa.jpg">
        </a>
        <div class="desc">GOA</div>
      </div>
    </div>
    <div style="padding:6px;"></div>
  
    <div class="container">
      <div class="tre">
        <center>TAKE A TOUR</center>
      </div>
    </div>
      <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/banner.jpg" style="width:100%">
           
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/bannerb.jpg" style="width:100%">
           
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/bannerc.jpg" style="width:100%">
           
          </div>
          
      </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
    </div>
          <script>
              var slideIndex = 0;
              showSlides();
              
              function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
              }
          </script>
      
    <div class="headtwo">
      <center>PLACES TO VISIT INDIA BY MONTH</center>
    </div>
    <center>
      <div class="intro">
        <i>Besides its innumerable attractions and experiences, a number of places to visit in India by month lure
          visitors
          to this vibrant nation. Kick start the New <br> Year with skiing in Auli, romance in Udaipur all February and
          play
          Holi in Vrindavan. Spend delightful summers at the hill stations and spare December for <br> Christmas in
          Goa.</i>
      </div>
    </center>
    <br><br>
    <center>
      <a href="jan.php">
      <button class="button button">JAN</button>
      </a>
      <a href="feb.php">
      <button class="button button">FEB</button>
      </a>
      <a href="march.php">
      <button class="button button">MAR</button>
      </a>
      <a href="april.php">
      <button class="button button">APR</button>
      </a>
      <a href="may.php">
      <button class="button button">MAY</button>
      </a>
      <a href="june.php">
      <button class="button button">JUN</button>
      </a>
      <a href="july.php">
      <button class="button button">JUL</button>
      </a>
      <a href="aug.php">
      <button class="button button">AUG</button>
      </a>
      <a href="sep.php">
      <button class="button button">SEP</button>
      </a>
      <a href="oct.php">
      <button class="button button">OCT</button>
      </a>
      <a href="nov.php">
      <button class="button button">NOV</button>
      </a>
      <a href="dec.php">
      <button class="button button">DEC</button>
      </a>
    </center>
  <br><br>
    <?php include('footer.php');?>
    
  

</body>

</html>