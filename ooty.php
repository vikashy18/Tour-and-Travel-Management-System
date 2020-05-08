<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> OOTY </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
</head>

<body>

    <?php include('header.php');?>

    <div class="headG">
        <center>
            <h2> OOTY TOUR </h2>
        </center>
    </div>

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
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <br><br><br>
    <center>
            <b>Duration</b>: <span class="time_dur">5 Nights / 6 Days </span><br> <b>Destination Covered</b>: <span class="loc_dur">Ooty</span>
            <br><b>Price</b>:<span class="pay_dur"> 10000</span>
    </center>
    <br><br><br>
    <center>
            <button class="button buybutton">Buy</button>
            <script>
                $(".buybutton").click(function(){
                     var x = confirm("Do you want to buy the package");
                     if(x){
                    var t = JSON.stringify({"time": $(".time_dur").text(),"dest":$(".loc_dur").text(),"price":$(".pay_dur").text()});
                    $.ajax({
                        type:"POST",
                        method:"POST",
                        data:{t:t},
                        dataType:"JSON",
                        url:"sendPackage.php",
                        success:function(data){
                            console.log(data);
                            alert("You have bought the package.");
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
                }
                else{
                    alert("Sorry");
                }
                });
            </script>
        
    </center>

    <?php include('footer.php');?>

</body>

</html>