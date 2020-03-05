<!DOCTYPE html>

<html>
<head>
    <link rel="icon" type="image/png" href="PICTURES/tablogo.jpg"> 
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/w3school.css">
    <script type = "text/javascript">
   
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.first.value == "" ) {
            alert( "Please provide your First name!" );
            document.myForm.first.focus() ;
            return false;
         }
         if( document.myForm.last.value == "" ) {
            alert( "Please provide your Last Name!" );
            document.myForm.last.focus() ;
            return false;
         }
         if( document.myForm.uid.value == "" ) {
            alert( "Please provide your Email Id!" );
            document.myForm.uid.focus() ;
            return false;
         }
         
         var emailID = document.myForm.uid.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID");
            document.myForm.uid.focus() ;
            return false;
         }
         
          var res; 
            var str = 
                document.getElementById("pwd").value; 
            if (str.match( /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.length >= 8) 
                return (true);
            else 
            { alert("Password must be min 8 Character & have atleast 1 UpperCase and 1 digit");
                document.myForm.pwd.focus() ;
               return false; 
                    }
            
            
                     return( true );
      }
   
</script>
<title>
Toppersplanet
</title>

</head>
<body>
    <div style="height: 1000px;">
        <div id="signup-content">
            <div id="bgr-image">
                <img src="PICTURES/5.jpg">
               <div class="container" style="bottom: 725px;">
                   <div id="mySidenav" class="sidenav">
                       <a href="Homepage.php" id="home">HOME<i class="fa fa-home" aria-hidden="true" style="padding-left: 25px"></i></a>
                   </div>
                   <h3 id="text"><span>Take the First step</span>Towards Your Dream&nbsp;on</h3>
                   <div class="contact-number"><a class="login-btn" href="Signin.php">Login</a><a class="contact-btn" href="tel:9012835452"><i class="fa fa-volume-control-phone" aria-hidden="true" style="padding-right: 10px; height: 10"></i>9012-835-452</a></div>

                   <form name="myForm" id="signup" style="height: 580px;" action="includes/signup.inc.php" onsubmit="return validate()" method="POST">

                        <div class="header">

                            <h3>Sign Up</h3>

                            <p>You want to fill out this form</p>

                        </div>

                        <div class="sep"></div>

                        <div class="inputs">
                            <input type="text" name="first" placeholder="First Name" autofocus />
                            <input type="text" name="last" placeholder="Last Name" autofocus />
                            <input type="email" name="uid" placeholder="E-mail or Username" autofocus />

                            <input id="pwd" type="password" name="pwd" placeholder="Password" />

                            <div class="checkboxy">
                                <input name="checkbox" required id="checky" value="check" type="checkbox" style="width: 16px;height: 17px;" /><label class="terms">By Submitting this form you agree to <span style="padding-left: 25px;">our</span> <a href="Terms _ Condition.php" style="padding-left: 0px;"><span style="color: #0880a5; padding-left:0px;">Terms and Conditions</span></a></label>
                            </div>

                           <input id="submit" type="submit" name="submit" value="PROCEED">

                        </div>

                    </form>

               </div> 
                    
            </div>

        </div>
        <div id="aboutus-content">
            <h2>ABOUT TOPPERS <span style="color: #0880a5">PLANET</span></h2>
        
        </div>
        
        <div id="footer"  style="position: relative;top: 190px;">
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