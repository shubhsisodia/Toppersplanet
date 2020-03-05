<!DOCTYPE html>
<?php


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
include 'includes/dbh.inc.php';
?>
<html>
<head>
    <link rel="icon" type="image/png" href="PICTURES/tablogo.jpg"> 
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.3">
    <link rel="stylesheet" type="text/css" href="css/Homepage.css?v=1.3">
    <link rel="stylesheet" type="text/css" href="css/homepage_login.css"> 
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
    
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
                <div ><div id="registerbtn"  <?php if(isset($_SESSION['u_uid'])){ echo'style="display:none;"';} ?> onclick="document.getElementById('id01').style.display='block'" ><b>LOGIN</b></div>
                 <?php if(isset($_SESSION['u_uid']))
                                {
                                    include 'includes/dbh.inc.php';
                                    
                                    
                                      
                                    $name = $_SESSION['u_first'];
                                    $email=$_SESSION['u_uid'];

                                   echo '<div  style="color: #0a7aa6;width: 273px;text-align: inherit;border-bottom-width: 5px;padding-left: 60px;margin-left: 20px;float: right;color: white;margin-top: 10px;">'
                                    . '<i style="margin-right: 10px;" class="fa fa-user-circle-o" aria-hidden="true"></i>Hello, '.$name.'</div>';  } 
                                      ?>      
                </div>
               <div id="id01" class="modal" > 
  
    <form class="modal-content animate" action="includes/login.inc.php?w=zw&q=yh" method="POST"> 
                            <div class="imgcontainer"> 
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" ><i class="fa fa-times" aria-hidden="true"></i></span> 
                                <img src="PICTURES/logo.png" alt="Avatar" class="avatar"> 
                            </div> 

                            <div class="container"> 
                                <label><b>Username</b></label> 
                                <input type="text" placeholder="Enter Username" name="uid" required> 

                                <label><b>Password</b></label> 
                                <input type="password" placeholder="Enter Password" name="pwd" required> 

                                <button style="margin-top:15px;" type="submit" name="submit">Login</button> 
                                <div style="padding-bottom:30px;"></div> 
                            </div> 

                            <div class="container" style="background-color:#f1f1f1"> 
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div> 
                        </form> 
                    </div> 

                    <script> 
                        var modal = document.getElementById('id01'); 
                        window.onclick = function(event) { 
                            if (event.target == modal) { 
                                modal.style.display = "none"; 
                                backdrop: 'static',
                                keyboard: false ;
                            } 
                        } 
                    </script> 
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
        
        <div id="banner">
            <img src="PICTURES/home_banner2.jpg">
            <div class="banner-start">
                <h2 class="banner-heading">Learn From The Masters</h2>
                <p class="banner-sub-heading">100% online learning from the best<br>Resources provided by us.</p>
            </div>    
        </div>
        
        <div class="fullbody course_detail " style="background: linear-gradient(-45deg, #ed145b 0, #327697 100%); height: 201.4px">
            <h3 class="section-heading"> <a>Let Our Numbers Speak for Themselves</a></h3>
            <div class="container" style="max-width: 1200px;padding-left: 0px;padding-right: 0px;width: 1200px;bottom: 0px; max-height: 140px!important;">
                <div class="col-md-12" style="width: 1200px;padding-left: 0px;padding-right: 0px;">
                   
                    <div class="col-md-3 col-xs-6">
                             <a  href="epub/booksmenu.php" >
                                <div class="course-box bar" >
                                    
                                            <div class="courseimg shadow-box" style="background-position: -7px -71px;"></div>
                                <p class="coursenum shadow">11</p>
                                <h5 class="course-detail shadow">Number Of E-Books</h5>
                             
                                </div>   </a>
                                 
                    </div>
                    <div class="col-md-3 col-xs-6">
                               <a  onclick="scrollWin()" >
                             <div class="course-box bar">
                                <div class="courseimg shadow-box" style="background-position: 120px -65px;"></div>
                                <p class="coursenum shadow">300</p>
                                <h5 class="course-detail shadow">Number Of Videos</h5>
                             </div></a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="Quiz.php?page=quiz&q=1" >
                              <div class="course-box bar">
                                  
                                          <div class="courseimg shadow-box" style="background-position: 119px -160px;"></div>
                                <p class="coursenum shadow">68</p>
                                <h5 class="course-detail shadow">Number Of Test Series</h5>
                              </div></a>
                    </div>
                    <div class="col-md-3 col-xs-6" style="selector:after{display: none;}">
                           <a href="javascript:void(0)" >
                            <div class="course-box-end course_last course-box">
                                <div class="courseimg shadow-box" style="background-position: -13px -155px;"></div>
                                <p class="coursenum shadow">5 Million</p>
                                <h5 class="course-detail shadow">Number Of Students</h5>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="section" >
            <div class="section-content" style="height: 600px;">
                        <div class="container-video crg25">
                            <div class="row totable" style="height: 436.8px!important">
                                        <div class="col-sm-6 text-center visible-xs">
                                                <img src="https://cdn1.byjus.com/home/Engaging-Video-Lesson.jpg" data-src="https://cdn1.byjus.com/home/Engaging-Video-Lesson.jpg" alt="Engaging Video Lesson" width="449" height="443" class="img-responsive xs-inline-block">
                                        </div>

                                <div class="col-sm-6 text-mcdr" style="">
                                    <h3 class="section-title f30 mb15" style="color: #333; font-weight: 500;">Engaging Video Lessons</h3>
                                    <p class="mb30" style="margin-bottom: 30px">Videos that help you visualize each concept, making it easier to understand. Clearer concepts lead
                                                        to higher scores!</p>
                                    <div class="engaging-video-list" style="margin-bottom:25px;">
                                                        <div class="engaging-video-list-content">
                                                                <div class="row g10">
                                                                        <div class="col-xs-4">
                                                                                <a class="thumbnail-video-player full-width overlay mb20" data-toggle="modal" data-target="#myModal" >
                                                                                    <img src="PICTURES/Physics.jpg" data-src="https://cdn1.byjus.com/home/video-1.jpg" alt="video" width="120" height="80" class="img-responsive thumbnail-video-player-bg" style="height:81px;">
                                                                                        <div class="thumbnail-video-player-content">
                                                                                                <img src="https://cdn1.byjus.com/home/play-grey.svg" data-src="https://cdn1.byjus.com/home/play-grey.svg" alt="play button" width="32" height="32" class="img-responsive thumbnail-video-player-btn">
                                                                                        </div>
                                                                                </a>
                                                                        </div>
                                                                        <div class="col-xs-4">
                                                                               <a class="thumbnail-video-player full-width overlay mb20" data-toggle="modal" data-target="#myModal2" >
                                                                                   <img src="PICTURES/Chemistry.jpg" data-src="https://cdn1.byjus.com/home/video-2.jpg" alt="video" width="120" height="80" class="img-responsive thumbnail-video-player-bg" style="height:81px;">
                                                                                        <div class="thumbnail-video-player-content">
                                                                                                <img src="https://cdn1.byjus.com/home/play-grey.svg" data-src="https://cdn1.byjus.com/home/play-grey.svg" alt="play button" width="32" height="32" class="img-responsive thumbnail-video-player-btn">
                                                                                        </div>
                                                                                </a>
                                                                        </div>
                                                                        <div class="col-xs-4">
                                                                               <a class="thumbnail-video-player full-width overlay mb20" data-toggle="modal" data-target="#myModal3" >
                                                                                   <img src="PICTURES/Maths.jpg" data-src="https://cdn1.byjus.com/home/video-3.jpg" alt="video" width="120" height="80" class="img-responsive thumbnail-video-player-bg" style="height:81px;">
                                                                                        <div class="thumbnail-video-player-content">
                                                                                                <img src="https://cdn1.byjus.com/home/play-grey.svg" data-src="https://cdn1.byjus.com/home/play-grey.svg" alt="play button" width="32" height="32" class="img-responsive thumbnail-video-player-btn">
                                                                                        </div>
                                                                                </a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                    <a href="Signin.php" class="btn btn-blue-purple-gradient" style="border-radius: 50px;padding-top: 10px;">View
                                                        More Video Lessons</a>
                                        </div>

                                        <div class="col-sm-6 hidden-xs">
                                                <img src="https://cdn1.byjus.com/home/Engaging-Video-Lesson.jpg" data-src="https://cdn1.byjus.com/home/Engaging-Video-Lesson.jpg" alt="Engaging Video Lesson" width="449" height="443" class="img-responsive">
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <div id="footer">
            <p style="color:white; font-size: 14px; padding-left: 15px; width: 365px; float: left; margin-bottom: 0px; margin-top: 18px;">&copy; Toppersplanet 2019. All Rights Reserved.</p>
                <ul>
                    <li><a  href="Terms _ Condition.php">Disclaimer & Terms of use</a></li>
                       <li><a  href="javascript:void(0);">Mandatory AICTE disclosure</a></li>
                       <li><a  href="javascript:void(0);">RTI Compliance</a></li>
                       <li><a  href="javascript:void(0);">Sitemap</a></li>
                </ul>
        </div>  
  
   
         <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/pJxS0SyBKts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div>
      
    </div>
  </div>
         <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/4CSRoi2YXPk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div>
      
    </div>
  </div>
         <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
         <iframe width="100%" height="315" src="https://www.youtube.com/embed/kU5gb-ziP8I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div>
      
    </div>
  </div>
</div>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script>
function scrollWin() {
  window.scrollBy(0,800);
}
</script>
<script> 
  $("#myModal").on('hidden.bs.modal', function (e) {
    $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
    });
  $("#myModal2").on('hidden.bs.modal', function (e) {
    $("#myModal2 iframe").attr("src", $("#myModal2 iframe").attr("src"));
    });
  $("#myModal3").on('hidden.bs.modal', function (e) {
    $("#myModal3 iframe").attr("src", $("#myModal3 iframe").attr("src"));
    });
  </script> 

    
</body>
</html>