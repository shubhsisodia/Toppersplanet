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
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=2.2">
    <link rel="stylesheet" type="text/css" href="css/homepage_login.css">
     <link rel="stylesheet" type="text/css" href="css/Homepage.css?v=1.3">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="css/w3school.css">
<title>
Toppersplanet
</title>

</head>
<body style="font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; font-size: 14px;line-height: 1.42857143; background-color: #fff7ff;">
    <div>
        <div id="header_container" style="height: 70px;">
            
            <div id="header_nav2" style="width:1537px; height: 70px;"> 
                    <div style="float: left; height: 80px;">
                        <a href="HomePage.php"><img src="PICTURES/logo.png" alt="my logo" width="220px" height="70px" style="padding-top: 2px;padding-left: 14px;height: 65px;padding-bottom: 2px;"></a> 
                    </div>

                    <div style="width: 400px;height: 70px;float: right;margin-right: 250px;"> 
                        <ul style="height: 70px; width: 630px;">
                            <li><a href="Homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-address-book-o" aria-hidden="true"></i>Contact</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i>About</a></li>
                            <li   <?php if(@$_GET['login']=='success'|| @$_GET['page']=='quiz'){ echo'style="display:none;"';} ?>  onclick="document.getElementById('id01').style.display='block'"><a  style="width: 176px;border-bottom-width: 5px;padding-left: 15px;margin-left: 5px;">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>LOGIN/REGISTER</a></li>
                            <?php if(@$_GET['login']=='success' || @$_GET['page']=='quiz')
                                {
                                    include 'includes/dbh.inc.php';
                                    
                                    
                                      if(!(isset($_SESSION['u_uid']))){
                                   header("Location:Quiz.php?login=serror&q=1");

                                    }
                                    else
                                    {
                                    $name = $_SESSION['u_first'];
                                    $email=$_SESSION['u_uid'];

                                   echo '<li  ><a  style="color: #0a7aa6; width: 273px;text-align: inherit;border-bottom-width: 5px;padding-left: 15px;margin-left: 5px;">'
                                    . '<i class="fa fa-user-circle-o" aria-hidden="true"></i>Hello, '.$name.'</a></li>';  }} 
                                      ?>      
                                
                        </ul> 
                    </div>
            </div>
           
                
        </div>  
        <div id="Quiz-page">
            <ul>
                <li class="<?php if(@$_GET['q']==1) echo'active-btn'; ?>" ><a href="Quiz.php?q=1&page=quiz"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
                <li class="hidethis <?php if(@$_GET['q']==2) echo'active-btn'; ?>" <?php if(@$_GET['login']=='success' || @$_GET['page']=='quiz'){ echo'style="display:inline;"';} ?>><a href="Quiz.php?q=2&page=quiz"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
		<li class="hidethis <?php if(@$_GET['q']==3) echo'active-btn'; ?>"<?php if(@$_GET['login']=='success' || @$_GET['page']=='quiz'){ echo'style="display:inline;"';} ?> ><a href="Quiz.php?q=3&page=quiz"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
                <li class="hidethis pull-right"  <?php if(@$_GET['login']=='success' || @$_GET['page']=='quiz' || $_SESSION['u_uid']){ echo'style="display:inline;"';} ?> > <a href="includes/logout.php?q=Quiz.php?q=1"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
            </ul>
        </div>
        <div>
            <div style="width: 40%; float: left;">
                <div><img src="PICTURES/Quiz_page.jpg" width="600px" style="margin-top: 45px;position:fixed; margin-left: 60px;"></div> 
            </div>
        
            <div style="width: 50%; <?php if(@$_GET['q']==2 || @$_GET['q']==3){echo'display:none;';} ?> float: right;padding-left: 20px;">
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
            <div>
                <?php
                if (isset($_SESSION['u_uid']))
                 {
                $email= $_SESSION['u_uid'];
                
               if(@$_GET['q']==2)  {
                $q=mysqli_query($conn,"SELECT * FROM history WHERE email='$email' ORDER BY Date DESC " )or die('Error197');
                echo  '<div class="panel title">
                <table class="table table-striped title1" style="width: 700px;margin-left: 0px;float: right;    border: 4px solid orange;border-radius: 10px;margin-top: 20px;margin-right: 20px;" >
                <tr style="color:black;"><td style="background-color:#ff8510;"><b>S.N.</b></td><td style="background-color:#ff8510;"><b>Quiz</b></td><td style="background-color:#ff8510;"><b>Right</b></td><td style="background-color:#ff8510;"><b>Wrong<b></td><td style="background-color:#ff8510;"><b>Score</b></td><td style="background-color:#ff8510;"><b>Date & Time</b></td>';
                $c=0;
                while($row=mysqli_fetch_array($q) )
                {
                $title=$row['Quiz'];
                $s=$row['score'];
                $w=$row['wrong'];
                $r=$row['right'];
                $date=$row['Date'];
                $c++;
                echo '<tr><td>'.$c.').</td><td>'.$title.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td><td>'.$date.'</td></tr>';
                }
                echo'</table></div>';
                }
                }
                ?>
                
                <?php
              if (isset($_SESSION['u_uid']))
                 {
                $email= $_SESSION['u_uid'];
                
               if(@$_GET['q']==3)  {
                    $q7 =mysqli_query($conn,"SELECT name,Quiz,score,RANK() OVER (ORDER BY score desc) Rank FROM history ");
                                                   
                echo  '<div class="panel title">
                <table class="table table-striped title1" style="width: 700px;margin-left: 0px;float: right;    border: 4px solid #ef00ab;border-radius: 10px; margin-top: 20px;margin-right: 20px;" >
                <tr style="color:black;"><td style="background-color:#ef00ab;"><b>S.N.</b></td><td style="background-color: #ef00ab;"><b>Name</b></td><td style="background-color: #ef00ab;"><b>Quiz Name</b></td><td style="background-color: #ef00ab;"><b>Score</b></td><td style="background-color: #ef00ab;"><b>Rank</b></td>';
                $c=0;
                while($row=mysqli_fetch_array($q7) )
                {
                $title=$row['Quiz'];
                $s=$row['score'];
                $name=$row['name'];
                $rank=$row['Rank'];
      
                $c++;
                echo '<tr><td>'.$c.').</td><td>'.$name.'</td><td>'.$title.'</td><td>'.$s.'</td><td>'.$rank.'</td></tr>';
                }
                echo'</table></div>';
                }
                 }
                ?>
            </div>
        </div>
       

					
   </div>    
<div id="id01" class="modal" > 
  
    <form class="modal-content animate" action="includes/login.inc.php?w=quizlogin" method="POST"> 
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
</body>
</html>