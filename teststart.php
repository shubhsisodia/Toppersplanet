<!DOCTYPE html>
<?php

include 'includes/dbh.inc.php';
session_start();
  if(!(isset($_SESSION['u_uid']))){
header("location:Quiz.php");

}
?>
<html>
<head>
    <link rel="icon" type="image/png" href="PICTURES/tablogo.jpg"> 
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="css/w3school.css">
<title>
Toppersplanet
</title>

</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="" style="font-family: Helvetica Neue ,Helvetica,Arial,sans-serif; font-size: 14px;line-height: 1.42857143; color: #333;">
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
                            
                            <?php 
                                
                                    include 'includes/dbh.inc.php';
                                    
                                    
                                      if(!(isset($_SESSION['u_uid']))){
                                   header("Location:Quiz.php?login=serror&q=1");

                                    }
                                    else
                                    {
                                    $name = $_SESSION['u_first'];
                                    $email=$_SESSION['u_uid'];

                                   echo '<li  ><a  style="color: #0a7aa6; width: 273px;text-align: inherit;border-bottom-width: 5px;padding-left: 15px;margin-left: 5px;">'
                                    . '<i class="fa fa-user-circle-o" aria-hidden="true"></i>Hello, '.$name.'</a></li>';  } 
                                      ?>      
                                
                        </ul> 
                    </div>
            </div>
           
                
        </div>     
        
        <div id="test" style="height: 620px;top: 0px;">
           <div id="leftpart" style="height: 620px; width:75%; float: left ">
               
               
                <?php  
                           
                              include 'includes/dbh.inc.php';
                                 $eid=@$_GET['eid'];
                                  $sn=@$_GET['sn'];
                                
                                $result =mysqli_query($conn,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );    
                                 
                                   $resultcheck = mysqli_num_rows($result);

                                     if($resultcheck > 0)
                                         {
                                           while( $row = mysqli_fetch_assoc($result))
                                               {?>
               <div class="teststart" style="display: block;padding-left: 20px; width:1115px;">
                   
                   <div style="background-color: #d9edf7; height: 42px;">
                       <p style="width: 212px; margin: 0; padding-top: 10px; padding-left: 12px; font-size: 16px;"> Section |</p>
                       <span class="sections_1 sections highlight-sections" id="subjects_1" style="left: 85px;bottom: 24px;"><?php 
                                
                                    include 'includes/dbh.inc.php';
                                    
                                    $eid=@$_GET['eid'];
                                    
                                    if($eid=='fad8b9aa'){echo'PHYSICS 11th';}
                                    if($eid=='9f571dfa'){echo'CHEMISTRY 11th';}
                                    if($eid=='3aee51b5'){echo'MATHS 11th';}
                                    if($eid=='736647db'){echo'PHYSICS 12th';}
                                    if($eid=='f9229d6c'){echo'CHEMISTRY 12th';}
                                    if($eid=='2c5b4697'){echo'MATHS 12th';}

                                   ?></span>
                       <div id="timer-style"style="">Time left&nbsp;:&nbsp;&nbsp;<span id="timer"></span> mins</div>
                   </div>
                   <hr class="singleline">
                   
                   <p class="noofquestion" style='margin-left: 30px; margin-top: 10px;margin-bottom: 10px; height: 20px; '>
                       <b style="position: relative; right: 65px; ">Question No.<span id="onquestion"><?php  echo $row['sn']; ?></span></b>
                   </p>
                   <hr class="singleline">
                   
                   <div style="padding: 0 15px 0; width: 1055px;margin-left: 20px;">
                       
                       <div class="singlequestion changequestion" id="1" style="padding: 10px 0px;">
                          <p style='margin: 0 0 10px; font-weight: 600; font-size: 15px;'> 
                              
                          
                                            <?php  echo $row['qns']; ?>
                                              
                                         
                            
                          </p>    
                        </div>
                       <div style="margin-top: 10px;">
                           <?php
                                include 'includes/dbh.inc.php';
                                 $eid=@$_GET['eid'];
                                  $sn=@$_GET['sn'];
                                $url='testcheck.php?eid='.$eid.'&sn='.$sn.'';
                            ?>
                           <form id='myform' action="<?php echo $url ?>" method="POST">
                           <?php  
                           
                              include 'includes/dbh.inc.php';
                                 $eid=@$_GET['eid'];
                                  $sn=@$_GET['sn'];
                                 $q=mysqli_query($conn,"SELECT * FROM options WHERE eid='$eid' AND sn='$sn'" ); 
                                 while($row=mysqli_fetch_array($q) )
                                        {
                                        $option=$row['option'];
                                        $optionid=$row['optionid'];
                                        echo'<div class="test-answers"><input type="radio" name="ans"'; ?>
                                        <?php
                                       
                                         $q34=mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn='$sn'" ); 
                                            $rowcount=mysqli_num_rows($q34);
                                            if($rowcount == 1)
                                            {  while($row=mysqli_fetch_array($q34)){
                                                $optionidT = $row['optionid'];
                                                if($optionidT == $optionid){
                                                    echo  ' checked '  ;
                                            }}
                                            }
                                        echo'  value="'.$optionid.'">&nbsp&nbsp'.$option.'</div><br /><br />';
                                        }
                                 
                                ?>
                           </form>
                       </div>
                          
                       
                                         
                   </div>
               </div>
            
               
           </div>   
            
          
           <div id="rightpart" style="height: 620px; width: 25%;position: fixed;float: right;  right: 0px; top: 70px">
               <div style="padding: 0 14px 0;">
                   
               <div class="row-attampt come_in_center" style="text-align: center;    margin: 11px 0px 15px 0px;">
                   <span class="displayblock" style="display: block; margin-bottom: 10px;"><img width="114px;" height="113px;" src="PICTURES/user-icon.png"></span>
                    <span style="text-align: center;"> <?php 
                                
                                    include 'includes/dbh.inc.php';
                                    
                                    
                                      if(!(isset($_SESSION['u_uid']))){
                                   header("Location:Quiz.php?q=1");

                                    }
                                    else
                                    {
                                    $Fname = $_SESSION['u_first'];
                                    $Lname = $_SESSION['u_last'];
                                    
                                    echo'<b>'.$Fname.' '.$Lname.'</b>';
                                  }
                                      ?> </span> 
                </div> 
               <div class="line-separator"></div>
               
               <div class="box-wrapper" style="height: 215px;width: 385px;padding-left: 15px;">
               <ul class="box-ul show_when_exam_start" style="display: block;">
               
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=1"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab1 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=1"); $rowcount=mysqli_num_rows($ab1);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s23 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=1");$rowcount=mysqli_num_rows($s23);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_1" data-questionid="26496" data-value="1" data-2val="1" date-section="1">1</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=2"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab2 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=2"); $rowcount=mysqli_num_rows($ab2);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s24 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=2");$rowcount=mysqli_num_rows($s24);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_2" data-questionid="26496" data-value="2" data-2val="1" date-section="1">2</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=3"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab3 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=3"); $rowcount=mysqli_num_rows($ab3);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s25 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=3");$rowcount=mysqli_num_rows($s25);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_3" data-questionid="26499" data-value="3" data-2val="1" date-section="1">3</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=4"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab4 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=4"); $rowcount=mysqli_num_rows($ab4);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s26 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=4");$rowcount=mysqli_num_rows($s26);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_4" data-questionid="26508" data-value="4" data-2val="1" date-section="1">4</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=5"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab5 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=5"); $rowcount=mysqli_num_rows($ab5);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s27 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=5");$rowcount=mysqli_num_rows($s27);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_5" data-questionid="26510" data-value="5" data-2val="1" date-section="1">5</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=6"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab6 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=6"); $rowcount=mysqli_num_rows($ab6);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s28 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=6");$rowcount=mysqli_num_rows($s28);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_6" data-questionid="26512" data-value="6" data-2val="1" date-section="1">6</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=7"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab7 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=7"); $rowcount=mysqli_num_rows($ab7);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s29 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=7");$rowcount=mysqli_num_rows($s29);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_7" data-questionid="26520" data-value="7" data-2val="1" date-section="1">7</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=8"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab8 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=8"); $rowcount=mysqli_num_rows($ab8);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s30 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=8");$rowcount=mysqli_num_rows($s30);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_8" data-questionid="26524" data-value="8" data-2val="1" date-section="1">8</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=9"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];   $ab9 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=9"); $rowcount=mysqli_num_rows($ab9);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s31 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=9");$rowcount=mysqli_num_rows($s31);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_9" data-questionid="26528" data-value="9" data-2val="1" date-section="1">9</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=10"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab10 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=10"); $rowcount=mysqli_num_rows($ab10);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s32 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=10");$rowcount=mysqli_num_rows($s32);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_10" data-questionid="26531" data-value="10" data-2val="1" date-section="1">10</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=11"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab11 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=11"); $rowcount=mysqli_num_rows($ab11);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s33 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=11");$rowcount=mysqli_num_rows($s33);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_11" data-questionid="70300" data-value="11" data-2val="1" date-section="1">11</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=12"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab12 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=12"); $rowcount=mysqli_num_rows($ab12);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s34 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=12");$rowcount=mysqli_num_rows($s34);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_12" data-questionid="70303" data-value="12" data-2val="1" date-section="1">12</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=13"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab13 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=13"); $rowcount=mysqli_num_rows($ab13);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s35 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=13");$rowcount=mysqli_num_rows($s35);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_13" data-questionid="70305" data-value="13" data-2val="1" date-section="1">13</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=14"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab14 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=14"); $rowcount=mysqli_num_rows($ab14);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s36 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=14");$rowcount=mysqli_num_rows($s36);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_14" data-questionid="70335" data-value="14" data-2val="1" date-section="1">14</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=15"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab15 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=15"); $rowcount=mysqli_num_rows($ab15);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s37 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=15");$rowcount=mysqli_num_rows($s37);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_15" data-questionid="70340" data-value="15" data-2val="1" date-section="1">15</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=16"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab16 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=16"); $rowcount=mysqli_num_rows($ab16);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s38 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=16");$rowcount=mysqli_num_rows($s38);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_16" data-questionid="26558" data-value="16" data-2val="1" date-section="1">16</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=17"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab17 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=17"); $rowcount=mysqli_num_rows($ab17);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s39 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=17");$rowcount=mysqli_num_rows($s39);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_17" data-questionid="26559" data-value="17" data-2val="1" date-section="1">17</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=18"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab18 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=18"); $rowcount=mysqli_num_rows($ab18);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s40 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=18");$rowcount=mysqli_num_rows($s40);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_18" data-questionid="26560" data-value="18" data-2val="1" date-section="1">18</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=19"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab19 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=19"); $rowcount=mysqli_num_rows($ab19);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s41 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=19");$rowcount=mysqli_num_rows($s41);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_19" data-questionid="26561" data-value="19" data-2val="1" date-section="1">19</li></a>
               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=20"' ?>><li style="display: block; <?php  include 'includes/dbh.inc.php'; $eid=@$_GET['eid'];  $ab20 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn=20"); $rowcount=mysqli_num_rows($ab20);if(!$rowcount == 0){ echo'background-color: #10cc10';}else{$s42 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn=20");$rowcount=mysqli_num_rows($s42);if(!$rowcount == 0){ echo'background-color: #9b59b6'; } } ?>" class="section_1  questionlisting questionListing_20" data-questionid="26564" data-value="20" data-2val="1" date-section="1">20</li></a>
               </ul>
               </div>
               <div class="line-separator" style="display: block;"></div>
               <div class="displaybox show_when_exam_start" style="display: block;">
                   <h4 style="margin-top: 10px;margin-bottom: 10px;font-size: 18px;">Legend</h4>
                    <div class="displayboxhalf"><span class="boxlegend green"></span><span style="padding-top:15px;" class="boxlegend-text">Answered</span></div>
                    <div class="displayboxhalf"><span class="boxlegend purple" ></span><span style="padding-top:15px;" class="boxlegend-text">Marked</span></div>
                    <div class="displayboxhalf"><span class="boxlegend"></span><span style="padding-top:15px;" class="boxlegend-text">Not Answered</span></div>  
               </div>
               <div class="sidebarbuttons" style="display: block;">
                   <button type="button" onclick="document.getElementById('id01').style.display='block'" class='btn-theme btn 'style='margin-left: 15px;margin-right: 20px;' >QUESTION PAPER</button>
                   <button type="button" class='btn-theme btn'>INSTRUCTIONS</button>
              </div>
               
               </div>
               
               <?php }}?> 
               
               
           </div>
            
        </div>  
        <div id="footertest" >
            <div class="sidebarbuttons2" style="width: 1480px; margin-left: 30px">
                
               <a><button type="marked" name="marked" form="myform" class="btn-theme btn borderblack backg" >
                 Mark for Review & Next<i class="fa fa-long-arrow-right paddi5" aria-hidden="true"></i></button></a>

               
                 
                 <a  style="margin-left: 800px;"> <button type="submit" name="submit" form="myform" class="btn-theme btn borderblack backg" >
                 <span>Save & Next</span>
                 <i class="fa fa-long-arrow-right paddi5 " aria-hidden="true"></i></button></a>
                 
                 <a href="testcheck.php?eid=<?php
                                include 'includes/dbh.inc.php';
                                 $eid=@$_GET['eid'];
                                 
                                echo $eid;
                            ?>&z=1"> <button id="submit_test" type="submit" name="submit" class="btn-theme btn borderblack backg" style="float:right;width: 346px;height: 36px;margin-top: 7px;">
                 <span>Submit Test</span>
                 </button></a>
               
            </div>
      </div>
        
       </div>  
       <div id="id01" class="modal" > 
  
    
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
                <script>
                    document.getElementById('timer').innerHTML =
           20+ ":" + 00;
         startTimer();

         function startTimer() {
                             
           var presentTime = document.getElementById('timer').innerHTML;
           var timeArray = presentTime.split(/[:]+/);
           var m = timeArray[0];
           var s = checkSecond((timeArray[1] - 1));
           if(s==59){m=m-1}
           if(m==0 && s==0){
               document.getElementById('submit_test').click();}

           document.getElementById('timer').innerHTML =
             m + ":" + s;
           console.log(m)
           setTimeout(startTimer, 1000);
         }

         function checkSecond(sec) {
           if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
           if (sec < 0) {sec = "59"};
           return sec;
         }     
         </script>
         
         <script>
                var count = 1;
                function setColor(btn, color) {
                    var property = document.getElementById(btn);
                    if (count == 0) {
                        property.style.backgroundColor = "#FFFFFF"
                        count = 1;        
                    }
                    else {
                        property.style.backgroundColor = "#7FFF00"
                        count = 0;
                    }
                }
            </script>
            <SCRIPT type="text/javascript">
                    window.history.forward();
                    function noBack() { window.history.forward(); }
            </SCRIPT>

</body>
</html>