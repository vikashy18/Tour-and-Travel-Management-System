<?php
?>




  <div class="navbar">
    <a href="index.php">Home</a>
    <div class="subnav">
      <button class="subnavbtn">Holiday Themes <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <table>
          <tr>
            <td><a href="GoldenTriangle.php">Golden Triangle Tours </a></td>
            <td><a href="#link2">Family Holidays </a></td>
          </tr>
          <tr>
            <td><a href="SummerHolidays.php">Summer Holidays </a></td>
            <td><a href="#link3">Pilgrimage Tours </a></td>
          </tr>
          <tr>
            <td><a href="HillStations.php">Hill Stations </a></td>
            <td><a href="#link3">First Timers In India </a></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="subnav">
      <button class="subnavbtn">Tour By Region <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">

        <table>
          <tr>
            <th>East India</th>
            <th>West India</th>
            <th>North India</th>
            <th>South India</th>
          </tr>
          <tr>
            <td><a href="orissa.php">Orissa</a></td>
            <td><a href="goa.php">Goa</a></td>
            <td><a href="rajasthan.php">Rajasthan</a></td>
            <td><a href="kerala">Kerala</a></td>
          </tr>
          <tr>
            <td><a href="darjeeling.php">Darjeeling</a></td>
            <td><a href="maharashta.php">Maharashtra</a></td>
            <td><a href="uttarakhand.php">Utarakhand</a></td>
            <td><a href="#tamil">Tamil Nadu</a></td>
          </tr>
          <tr>
            <td><a href="sunderban.php">Sunderban</a></td>
            <td><a href="gujrat.php">Gujrat</a></td>
            <td><a href="varanshi.php">Varanashi</a></td>
            <td><a href="#link4">Karnataka</a></td>
          </tr>
          <tr>
            <td><a href="kalimpong.php">Kalimpong</a></td>
            <td><a href="maharashta.php">Mumbai</a></td>
            <td><a href="ladakh.php">Ladakh</a></td>
            <td><a href="andaman.php">Andaman</a></td>
          </tr>
        </table>
      </div>
    </div>


    <div class="subnav">
      <button class="subnavbtn">Travel By Months <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">

        <table>
          <tr>
            <td><a href="jan.php">January</a></td>
            <td><a href="feb.php">February</a>
          </tr>
          <tr>
            <td><a href="march.php">March</a></td>
            <td><a href="april.php">April</a>
          </tr>
          <tr>
            <td><a href="may.php">May</a></td>
            <td><a href="june.php">June</a>
          </tr>
          <tr>
            <td><a href="july.php">July</a></td>
            <td><a href="aug.php">August</a>
          </tr>
          <tr>
            <td><a href="sep.php">September</a></td>
            <td><a href="oct.php">October</a>
          </tr>
          <tr>
            <td><a href="nov.php">November</a></td>
            <td><a href="dec.php">December</a>
          </tr>
        </table>
      </div>
    </div>
    
    <?php if(!isset($_SESSION['email']))
    {
      echo '
        <a href="sign/signup/signup.php"> Sign Up </a>
        <a href="log/login/signin.php">Log In</a>';
    }
    else{
      echo '
        <a href="log/login/logout.php">Logout</a>
        <a href="log/login/user_dash.php">Dashboard</a>';
    }?>
    <a href="contact/contactus/contacei.php">Contact Us</a>

  </div>
 <?php ?>
