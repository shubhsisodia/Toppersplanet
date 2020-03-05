<!DOCTYPE html>

<html>
<head>
    <link rel="icon" type="image/png" href="PICTURES/tablogo.jpg"> 
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/w3school.css">
<title>
Toppersplanet
</title>

</head>
<body>
    <div>
        <div id="header_container">
            <div id="header_red">
                <ul  class="contact">
                    <li style="padding-right: 5px;"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 23px; padding-right: 2px;"></i></li>
                    <li style="padding-top: 0px; padding-left:0px;">+919012835452</li>
                    <li><a href="mailto: abhinavsharma56@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>help.toppersplanet@gmail.com</a></li>
                    <li><a href="https://goo.gl/maps/9DjYiMnuJ9r3ftBn7"><i class="fa fa-globe" aria-hidden="true"></i>Delhi,India</a></li>
                </ul> 
            </div>
            <div id="header_nav"> 
                    <div style="float: left; height: 80px;">
                        <a href="HomePage.php"><img src="PICTURES/logo.png" alt="my logo" width="220px" height="70px" style="padding-top: 5px; padding-left: 14px;"></a> 
                    </div>

                    <div style="width: 500px; height: 80px; float: right;"> 
                        <ul>
                            <li><a href="Homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                             <li><a href="Signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign Up</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-address-book-o" aria-hidden="true"></i>Contact</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-user-o" aria-hidden="true"></i>About</a></li>
                        </ul> 
                    </div>

            </div>
        </div>    
        
        <div id="centerpart" style="height:600px">
  <!-- ************************** SLIDESHOW ***************************************************-->
            <div class="w3-content w3-display-container">
                <img class="mySlides" src="PICTURES/1.jpg">
                <img class="mySlides" src="PICTURES/2.jpg">
                <img class="mySlides" src="PICTURES/3.jpg">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;bottom: 30px;">
                    <div class="w3-left w3-hover-text-white" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-white" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>

                <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }

                function currentDiv(n) {
                  showDivs(slideIndex = n);
                }

                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  if (n > x.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-white", "");
                  }
                  x[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " w3-white";
                }
                </script>
  <!-- ******************************************************************************************************-->
            <div class="Login-form-area">
                <h3>Login</h3>
                <form action="includes/login.inc.php" clas='login' method="POST">
                    <p>Email</p>
                    <input type="text" name="uid" id="" placeholder="enter your email" style="width: 280px;">
                    <p>Password</p>
                    <input type="password" name="pwd" id="" placeholder="enter your password" style="width: 280px;">
                    <input type="submit" name="submit" value="SIGN IN">
                    <div class="terms-cond"><span>By Signing In, you agree to the </span>
                     <a href="Terms _ Condition.php" target="_blank" class="terms-service">Terms of Service</a>
                    </div>
                    <a href="" class="fgpass">Forgot Password?</a>
                </form>
            </div>

        </div>
        <div id="footer">
                <p style="color:white; font-size: 14px; padding-left: 15px; width: 365px; float: left; margin-bottom: 0px; margin-top: 18px;">© Toppersplanet 2019. All Rights Reserved.</p>
                <ul>
                    <li><a  href="Terms _ Condition.php">Disclaimer & Terms of use</a></li>
                       <li><a  href="HomePage.php">Mandatory AICTE disclosure</a></li>
                       <li><a  href="HomePage.php">RTI Compliance</a></li>
                       <li><a  href="HomePage.php">Sitemap</a></li>
                </ul>
        </div>    
</div>
</body>
</html>