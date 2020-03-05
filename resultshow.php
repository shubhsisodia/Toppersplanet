<!DOCTYPE html>
<?php

include 'includes/dbh.inc.php';
session_start();
  if(!(isset($_SESSION['u_uid'])&& @$_GET['p']==1)){
header("location:Quiz.php?q=1");

}
?>
<html>
    <head>
        <link rel="icon" type="image/png" href="PICTURES/tablogo.jpg"> 
        
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=2.1">
        
        <link rel="stylesheet" type="text/css" href="css/homepage_login.css">
        <link rel="stylesheet" type="text/css" href="css/Homepage.css?v=1.3">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/w3school.css">
        <title>
            Toppersplanet
        </title>

    </head>
    <body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="" class='body-back' style="font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; font-size: 14px;line-height: 1.42857143;">
        <div>
            <div id="header_container" style="height: 70px;">

                <div id="header_nav2" style="width:1537px; height: 70px;"> 
                    <div style="float: left; height: 80px;">
                        <a href="HomePage.php"><img src="PICTURES/logo.png" alt="my logo" width="220px" height="70px" style="padding-top: 2px;padding-left: 14px;height: 65px;padding-bottom: 2px;"></a> 
                    </div>

                    <div style="width: 750px;height: 70px;float: right;margin-right: 50px;"> 
                        <ul style="height: 70px;width: 750px;">
                            <li><a href="Homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                            <li><a href="contact.php"><i class="fa fa-address-book-o" aria-hidden="true"></i>Contact</a></li>
                            <li><a href="about.php"><i class="fa fa-cog" aria-hidden="true"></i>About</a></li>
                            <li   <?php if ($_SESSION['u_uid']) {echo'style="display:none;"';} ?>  onclick="document.getElementById('id01').style.display = 'block'"><a  style="width: 176px;border-bottom-width: 5px;padding-left: 15px;margin-left: 5px;">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>LOGIN/REGISTER</a></li>
                            <?php
                            if ($_SESSION['u_uid']) {
                                include 'includes/dbh.inc.php';


                                if (!(isset($_SESSION['u_uid']))) {
                                    header("Location:Quiz.php?login=serror&q=1");
                                } else {
                                    $name = $_SESSION['u_first'];
                                    $email = $_SESSION['u_uid'];

                                    echo '<li  style="width: 195px;" ><a  style="color: #0a7aa6; width: 273px;text-align: inherit;border-bottom-width: 5px;padding-left: 15px;margin-left: 5px;">'
                                    . '<i class="fa fa-user-circle-o" aria-hidden="true"></i>Hello, ' . $name . '</a></li>';
                                }
                            }
                            ?>      
                           <li class="hidethis pull-right" style="display:inline;left: -50;width: 180px;margin-left: 0px;position: relative;/* left: 0px; */right: 20px;left: -50;" <?php if($_SESSION['u_uid']){ echo'style="display:inline;"';} ?> > 
                               <a href="includes/logout.php?q=Quiz.php?q=1"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a>
                           </li>
                        </ul> 
                    </div>
                </div>


            </div>  
            <div id="result-show">
                <div class="A">
                    <div class="B">
                        <h3 class="C"><?php 
                                
                                    include 'includes/dbh.inc.php';
                                    
                                    $eid=@$_GET['eid'];
                                    
                                    if($eid=='fad8b9aa'){echo'PHYSICS 11th ';}
                                    if($eid=='9f571dfa'){echo'CHEMISTRY 11th ';}
                                    if($eid=='3aee51b5'){echo'MATHS 11th ';}
                                    if($eid=='736647db'){echo'PHYSICS 12th ';}
                                    if($eid=='f9229d6c'){echo'CHEMISTRY 12th ';}
                                    if($eid=='2c5b4697'){echo'MATHS 12th ';}

                                   ?>Quiz</h3>
                        <p class="C1">Overall Analysis of your Practice Paper</p>
                    </div>
                    <svg class="db" viewBox="0 0 98 128" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="98" height="98" style="">
                    <path d="M21.456 30.862l-1.561-4.16h-2.776l1.503 4.16-1.56 3.928h2.89zM30.65 30.862l-1.562-4.16h-2.775l1.503 4.16-1.56 3.928h2.89zM39.844 30.862l-1.562-4.16h-2.775l1.503 4.16-1.561 3.928h2.891zM49.037 30.862l-1.56-4.16H44.7l1.503 4.16-1.561 3.928h2.891zM58.231 30.862l-1.56-4.16h-2.776l1.503 4.16-1.561 3.928h2.89zM67.425 30.862l-1.561-4.16h-2.776l1.504 4.16-1.561 3.928h2.89zM76.619 30.862l-1.561-4.16h-2.776l1.504 4.16-1.562 3.928h2.892zM26.313 41.549l-1.561-4.16h-2.776l1.504 4.16-1.562 3.928h2.892zM35.507 41.549l-1.561-4.16H31.17l1.503 4.16-1.56 3.928h2.89zM44.7 41.549l-1.56-4.16h-2.776l1.503 4.16-1.56 3.928h2.89zM53.895 41.549l-1.562-4.16h-2.775l1.503 4.16-1.561 3.928h2.891zM63.088 41.549l-1.56-4.16h-2.776l1.503 4.16-1.561 3.928h2.891zM72.282 41.549l-1.56-4.16h-2.776l1.503 4.16-1.561 3.928h2.89zM81.476 41.549l-1.561-4.16h-2.776l1.504 4.16-1.561 3.928h2.89zM31.517 52.582l-1.561-4.101H27.18l1.504 4.101-1.562 3.928h2.892zM40.71 52.582l-1.56-4.101h-2.776l1.504 4.101-1.562 3.928h2.891zM49.905 52.582l-1.561-4.101h-2.776l1.503 4.101-1.56 3.928h2.89zM59.099 52.582l-1.562-4.101h-2.775l1.503 4.101-1.56 3.928h2.89zM68.293 52.582l-1.562-4.101h-2.775l1.503 4.101-1.561 3.928h2.891zM77.486 52.582l-1.56-4.101H73.15l1.503 4.101-1.561 3.928h2.891zM86.68 52.582l-1.561-4.101h-2.775l1.503 4.101-1.561 3.928h2.89zM36.374 63.269l-1.561-4.102h-2.776l1.504 4.102-1.561 3.928h2.89zM45.568 63.269l-1.561-4.102H41.23l1.504 4.102-1.562 3.928h2.892zM54.762 63.269L53.2 59.167h-2.776l1.504 4.102-1.562 3.928h2.892zM63.956 63.269l-1.561-4.102h-2.776l1.503 4.102-1.56 3.928h2.89zM73.15 63.269l-1.562-4.102h-2.775l1.503 4.102-1.56 3.928h2.89zM82.344 63.269l-1.562-4.102h-2.775l1.503 4.102-1.561 3.928h2.891zM91.537 63.269l-1.56-4.102H87.2l1.503 4.102-1.561 3.928h2.891zM11.741 8.16l-1.503-4.102H7.405l1.503 4.101-1.561 3.928h2.891zM20.935 8.16l-1.503-4.102h-2.833l1.503 4.101-1.561 3.928h2.891zM30.13 8.16l-1.504-4.102h-2.833l1.503 4.101-1.561 3.928h2.89zM39.323 8.16L37.82 4.057h-2.834l1.504 4.101-1.504 3.928h2.834zM48.517 8.16l-1.503-4.102H44.18l1.504 4.101-1.504 3.928h2.834zM57.71 8.16l-1.503-4.102h-2.833l1.504 4.101-1.504 3.928h2.833zM66.905 8.16L65.4 4.057h-2.775l1.445 4.101-1.503 3.928h2.833zM16.599 18.846l-1.562-4.101h-2.775l1.503 4.101-1.56 3.928h2.89zM25.793 18.846l-1.562-4.101h-2.775l1.503 4.101-1.561 3.928h2.891zM34.986 18.846l-1.56-4.101H30.65l1.503 4.101-1.561 3.928h2.891zM44.18 18.846l-1.561-4.101h-2.775l1.503 4.101-1.561 3.928h2.89zM53.374 18.846l-1.503-4.101h-2.834l1.504 4.101-1.561 3.928h2.89zM62.568 18.846l-1.503-4.101H58.23l1.504 4.101-1.562 3.928h2.892zM71.762 18.846l-1.503-4.101h-2.834l1.504 4.101-1.562 3.928h2.892zM23.248 95.85l-1.503 4.101h-2.776l1.446-4.101-1.503-3.986h2.89zM32.442 95.85L30.94 99.95h-2.776l1.504-4.101-1.562-3.986h2.892zM41.636 95.85l-1.503 4.101h-2.776l1.504-4.101-1.562-3.986h2.891zM50.83 95.85l-1.503 4.101H46.55l1.503-4.101-1.56-3.986h2.89zM60.024 95.85L58.52 99.95h-2.775l1.503-4.101-1.56-3.986h2.89zM69.218 95.85l-1.504 4.101H64.94l1.503-4.101-1.561-3.986h2.891zM78.47 95.85l-1.562 4.101h-2.775l1.503-4.101-1.561-3.986h2.891zM28.105 85.105l-1.503 4.16h-2.775l1.445-4.16-1.503-3.928h2.833zM37.3 85.105l-1.504 4.16H33.02l1.446-4.16-1.503-3.928h2.833zM46.493 85.105l-1.503 4.16h-2.776l1.446-4.16-1.504-3.928h2.834zM55.687 85.105l-1.503 4.16h-2.776l1.446-4.16-1.504-3.928h2.834zM64.881 85.105l-1.503 4.16h-2.776l1.446-4.16-1.504-3.928h2.891zM74.075 85.105l-1.504 4.16h-2.775l1.445-4.16-1.503-3.928h2.891zM83.269 85.105l-1.504 4.16H78.99l1.503-4.16-1.561-3.928h2.891zM33.31 74.071l-1.504 4.102h-2.775l1.503-4.102-1.561-3.928h2.89zM42.503 74.071L41 78.173h-2.776l1.504-4.102-1.561-3.928h2.89zM51.697 74.071l-1.503 4.102h-2.776l1.504-4.102-1.561-3.928h2.89zM60.891 74.071l-1.503 4.102h-2.776l1.504-4.102-1.562-3.928h2.892zM70.143 74.071l-1.561 4.102h-2.776l1.504-4.102-1.562-3.928h2.891zM79.337 74.071l-1.561 4.102H75l1.503-4.102-1.56-3.928h2.89zM88.53 74.071l-1.56 4.102h-2.776l1.503-4.102-1.56-3.928h2.89zM13.592 118.494l-1.561 4.102H9.255l1.504-4.102-1.562-3.928h2.891zM22.786 118.494l-1.562 4.102H18.45l1.503-4.102-1.56-3.928h2.89zM31.98 118.494l-1.562 4.102h-2.775l1.503-4.102-1.561-3.928h2.891zM41.173 118.494l-1.56 4.102h-2.776l1.503-4.102-1.561-3.928h2.891zM50.367 118.494l-1.56 4.102H46.03l1.503-4.102-1.561-3.928h2.89zM59.561 118.494L58 122.596h-2.776l1.504-4.102-1.561-3.928h2.89zM68.755 118.494l-1.561 4.102h-2.776l1.504-4.102-1.561-3.928h2.89zM18.391 107.807l-1.503 4.102h-2.776l1.504-4.102-1.562-3.928h2.892zM27.643 107.807l-1.561 4.102h-2.776l1.504-4.102-1.562-3.928h2.891zM36.837 107.807l-1.561 4.102H32.5l1.503-4.102-1.56-3.928h2.89zM46.03 107.807l-1.56 4.102h-2.776l1.503-4.102-1.56-3.928h2.89zM55.224 107.807l-1.56 4.102h-2.776l1.503-4.102-1.561-3.928h2.891zM64.418 107.807l-1.56 4.102h-2.776l1.503-4.102-1.561-3.928h2.891zM73.612 107.807l-1.561 4.102h-2.775l1.503-4.102-1.561-3.928h2.89z"></path>
                    </svg>
                </div>
                <?php 
                 include 'includes/dbh.inc.php';
                                 
                                  $rand=@$_GET['w'];
                                
                                $q90 =mysqli_query($conn,"SELECT * FROM history WHERE serial='$rand' " );    
                               
                                   $resultchec = mysqli_num_rows($q90);

                                     if($resultchec > 0)
                                         {
                                           while( $row = mysqli_fetch_assoc($q90))
                                               {?>
                
                
                <p class="f35">My Performance</p>
                <div class="box">
                    <div class="left">
                        <div style="height: 300px; background-color: #f6f6f6;padding: 64px;">
                            <div style="margin-left: 64px;margin-right: 64px; width: 94.763px;height: 106.4px;text-align:-webkit-center;float: left;position: relative;top: 20px;">
                                <h2 style="color: black;font-size: 1.25rem;width: 52.1px;height: 28px;font-weight: 700; margin: 0px;">Score</h2>
                                <h1 style="width: 94.763px;height:50.4px;font-size: 2.25rem;color: #09972b;font-weight: 700;margin: 0px; "><?php  echo $row['score']; ?></h1>
                                <h5 style="margin: 0px;color: #999;">Out of 40</h5>
                            </div>
                            <div style="margin-left: 64px;margin-right: 64px;width: 117.088px;height:106.4px; text-align:-webkit-center;float: right;position: relative;top: 20px;">
                                <h2 style="color: black;font-size: 1.25rem;width: 52.1px;height: 28px;font-weight: 700; margin: 0px;">Rank</h2>
                                <h1 style="width: 94.763px;height:50.4px;font-size: 2.25rem;color: #09972b;font-weight: 700;margin: 0px; ">
                                <?php
                                                
                                            $q7 =mysqli_query($conn,"SELECT serial,score,RANK() OVER (ORDER BY score desc) Rank FROM history ");
                                  
                                                    $resultcheck = mysqli_num_rows($q7);

                                     if($resultcheck > 0)
                                         {
                                           while( $row = mysqli_fetch_assoc($q7))
                                           {   
                                                
                                               if($row['serial']== $rand)
                                               { $rank= $row['Rank'] ;
                                                  echo $rank ;
                                               }
                                           }            

                                         } 

                                ?></h1>
                                <h5 style="margin: 0px;color: #999;">Out of <?php echo $resultcheck ;?> </h5>
                            </div>
                        </div>
                        <div class="cutoff" >Cut off for this Exam was<span class="b ml1"> 25 / 40 </span></div>
                        
                    </div>
                    <div class="right">
                       <div style="padding: 64px 16px;width: 392.7px;height: 300px;">
                           <div style="width: 360.7px;height: 151.85px;">
                                <div style="width: 300px;height: 151.85px;">
                                    <ul style="margin:14px 0px;padding: 0px;list-style: none;">
                                         <?php 
                 include 'includes/dbh.inc.php';
                                 
                                  $rand=@$_GET['w'];
                                
                                $q90 =mysqli_query($conn,"SELECT * FROM history WHERE serial='$rand' " );    
                               
                                   $resultchec = mysqli_num_rows($q90);

                                     if($resultchec > 0)
                                         {
                                           while( $row = mysqli_fetch_assoc($q90))
                                               {    
                                                   $right=  $row['right']  ;
                                                   $wrong=  $row['wrong']  ;
                                                   $unattemp = 20 - $right - $wrong;
                                                   $attemp = $right + $wrong;
                                                   if(!$attemp==0){
                                                   $accu=  $right/$attemp;
                                                   $accuracy= round($accu * 100);
                                                   }
                                                   else $accuracy=0;
                                               ?>
                
                                        <li><span style="margin-left: 16px;font-weight: 700;">Correct </span><span style="float:right;font-weight: 700;"><?php echo $right ?></span></li>
                                        <li style="padding-top:16px;"><span style="margin-left: 16px;font-weight: 700;">Incorrect</span><span style="float:right;font-weight: 700;"><?php echo $wrong ?></span></li>
                                        <li style="padding-top:16px;"><span style="margin-left: 16px;font-weight: 700;">Unattempted</span><span style="float:right;font-weight: 700;"><?php echo $unattemp ?></span></li>
                                    </ul>
                                         
                                </div>
                             </div>
                        </div>
                        <div class="accuracy">
                            <img src="PICTURES/percentage.png" alt="Accuracy" height="24px" width="24px">
                            <span style="padding-left:16px;font-weight: 700;width: 279.975; height: 24px;">Accuracy</span>
                            <span style="float: right;font-weight: 700;font-size: x-large;position: relative;bottom: 5px;"><?php echo $accuracy ?>%</span>
                        </div>
                    </div>
                </div>
            </div>   
            <?php }} ?>
            
              <?php }}?> 
            <div id="recommended">
                <div style="margin-left:100px;">
                        <p style="font-weight: 700;margin-top: 50px;font-size: 1.5rem;">Recommended Quizes For You</p>
                    </div>
                <div style="margin-left:90px;">
                                <div style="width:1310px;">
                        <ul  id="top-quiz">
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">PHYSICS QUIZ<br> 11th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: 600;">20 mins</span></li>
                                    </ul>
                                   <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=fad8b9aa">';}
                                          ?> <div id="start_button"><span>Start Quiz</span></div></a>
                                </div></li>
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">CHEMISTRY QUIZ<br> 11th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: re600;">20 mins</span></li>
                                    </ul>
                                <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=9f571dfa">';}
                                          ?><div id="start_button"><span>Start Quiz</span></div></a>
                                </div>

                                </li>
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">MATHS QUIZ<br> 11th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: 600;">20 mins</span></li>
                                    </ul>
                                     <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=3aee51b5">';}
                                          ?><div id="start_button"><span>Start Quiz</span></div></a>
                                </div></li>
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">PHYSICS QUIZ<br> 12th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: 600;">20 mins</span></li>
                                    </ul>
                                    <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=736647db">';}
                                          ?><div id="start_button"><span>Start Quiz</span></div></a>
                                </div></li>
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">CHEMISTRY QUIZ<br> 12th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: 600;">20 mins</span></li>
                                    </ul>
                                    <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=f9229d6c">';}
                                          ?><div id="start_button"><span>Start Quiz</span></div></a>
                                </div></li>
                            <li><div class="quiz-info"><img src="PICTURES/clock.png" class="center"><h6 style="text-align: center; font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; ">MATHS QUIZ<br> 12th </h6>
                                    <ul>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                         <li>Questions <span style="float: right; color: #666;font-weight: 600;">20</span></li>
                                        <li>Time <span style="float: right; color: #666;font-weight: 600;">20 mins</span></li>
                                    </ul>
                                     <?php 
                                         if(!(isset($_SESSION['u_uid']))){

                                          echo "<a onclick=\"document.getElementById('id01').style.display='block'\">";
                                            }
                                          else {echo '<a href="testinstruction.php?eid=2c5b4697">';}
                                          ?><div id="start_button"><span>Start Quiz</span></div></a>
                                </div></li>     

                        </ul> 



                    </div>
                    </div>     
                
                
            </div>
                
            <div id="footer" style="margin-top:100px;">
            <p style="color:white; font-size: 14px; padding-left: 15px; width: 365px; float: left; margin-bottom: 0px; margin-top: 18px;">&copy; Toppersplanet 2019. All Rights Reserved.</p>
                <ul>
                    <li><a  href="Terms & Condition.php">Disclaimer & Terms of use</a></li>
                       <li><a  href="javascript:void(0);">Mandatory AICTE disclosure</a></li>
                       <li><a  href="javascript:void(0);">RTI Compliance</a></li>
                       <li><a  href="javascript:void(0);">Sitemap</a></li>
                </ul>
        </div> 

            <div> 

                <?php
                /*
                  if(@$_GET['result']=='1')
                  {
                  $A=@$_GET['A'];
                  $B=@$_GET['B'];
                  echo'<p>Right '.$A.' AND Wrong '.$B.'</p>';
                  }
                 */
                ?>

            </div>
       <SCRIPT type="text/javascript">
                    window.history.forward();
                    function noBack() { window.history.forward(); }
            </SCRIPT>
    </body>
</html>