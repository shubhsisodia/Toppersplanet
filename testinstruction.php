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
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.6">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="css/w3school.css">
<title>
Toppersplanet
</title>

</head>
<body>
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
        
        <div id="test" style="height: 1255px">
           <div id="leftpart" style="height: 1255px; width:75%; float: left ">
               <div id="instruction" style="margin-top: 25px;">
              <h2 style="text-align:center;"><b>Please read instructions carefully</b></h2>
              <div style="padding-left: 30px;">
                <h4><b>General Instructions:</b></h4>
                <ul>
                  <li>The total duration of the examination is 20 minutes.</li>

                  <li>The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available to you for completing the examination. When the timer reaches zero, the examination will end by itself. You will not be required to end or submit your examination.</li>

                  <li>The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols:
                      <ul>
                          <ol>
                            <li>Answered questions in green colour. </li>
                               <li>Marked for review questions in violet colour</li>
                            <li>Unanswered questions in sky blue colour. </li>
                         
                          </ol>

                      </ul>
                  </li>

                  <li>Marked for review status for a question simply indicates that you would like to review the question again.</li>
                  <li>Please note that if a question is answered and ‘marked for review’, your answer for that question will be considered in the evaluation. </li>
                  <li>You can click on the question palette to navigate faster across questions. </li>

                </ul>


                <table class="static_table dark_background tbl_border table table-striped" border="1" style="width: 80%; border-color: #000000; background-color: #fff; background-color: #E8E8E8; border:1px; border-color: #A9A9A9; border-style: solid; background-color: #E8E8E8;">
                    <tbody>
                      <tr class="text-center dark_bg_table" style="background-color: #1A448C;">
                        <td>
                          <p class="white_text" style="color: #fff;">Subject</p>
                        </td>
                        <td>
                          <p class="white_text" style="color: #fff;">No of questions</p>
                        </td>
                        <td>
                          <p class="white_text" style="color: #fff;">Maximum Marks</p>
                        </td>
                        <td>
                          <p class="white_text" style="color: #fff;">Total Time</p>
                        </td>
                      </tr>

                      <tr class="light_background text-center" style="background-color: #F6F6F6;">
                        <td>
                          <p>Physics</p>
                        </td>
                        <td>
                          <p>20</p>
                        </td>
                        <td>
                          <p>40</p>
                        </td>
                        <td>
                          <p>20 Minutes</p>
                        </td>
                      </tr>

                      <tr class="light_background text-center" style="background-color: #F6F6F6;">
                        <td>
                          <p>Chemistry</p>
                        </td>
                        <td>
                          <p>20</p>
                        </td>
                        <td>
                          <p>40</p>
                        </td>   
                        <td>
                          <p>20 Minutes</p>
                        </td>             
                      </tr>

                      <tr class="light_background text-center" style="background-color: #F6F6F6;">
                        <td>
                          <p>Mathematics</p>
                        </td>
                        <td>
                          <p>20</p>
                        </td>
                        <td>
                          <p>40</p>
                        </td>
                        <td>
                          <p>20 Minutes</p>
                        </td>
                      </tr>

                      <tr class="light_background text-center" style="background-color: #F6F6F6;">
                        <td>
                          <p>Total</p>
                        </td>
                        <td>
                          <p>60</p>
                        </td>
                        <td>
                          <p>120</p>
                        </td>
                        <td>
                          <p>60 min</p>
                        </td>
                      </tr>

                    </tbody>
                  </table>


                  <h4><b>Answering a Question:</b></h4>
                  <ul>
                    <li>Procedure for answering multiple-choice type questions:
                    <ol>
                      <li>To select your answer, click on the button of one of the options.</li>
                      <li>To deselect your chosen answer, click again on the button of the chosen option again or click on the <b>Clear&nbsp;Response</b> button.</li>
                      <li>To change your chosen answer, click on the button of another option.</li>
                      <li>To save your answer, you MUST click on the <b>Save Next</b>&nbsp;button.</li>
                    </ol>
                    </li>
                    <li>To mark a question for review, click on the&nbsp;<b>Mark for Review &amp; Next</b>&nbsp;button.</li>
                    <li>To change answer to a question that has already been answered, select that question from the Question Palette and then follow the procedure for answering that type of question.</li>
                    <li>Note that ONLY questions for which answers are either saved or marked for review after answering, will be considered for evaluation.</li>
                  </ul>

                   <ul>
                    <li> To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</li>
                    <li>Note that ONLY Questions for which answers are saved or marked for review after answering will be considered for evaluation.</li>
                  </ul>
                  <h4><b>Navigating through sections:</b></h4>
                  <ul>
                    <li>Click on the question number in the Question Palette at the right of your screen to go to a question.</li>
                    <li><b>Note that using this option does NOT save your answer.</b></li>
                    <li>Click on&nbsp;<b>Save &amp; Next&nbsp;</b> to save your answer for a question and then move to the next question.</li>
                    <li>If you want to keep a question marked for review, click on&nbsp;the button <b>Mark for Review &amp; Next</b>&nbsp;to save your answer for the current question and then proceed to the next question.</li>
                  </ul>
             

               </div>
           </div>
           </div>
            
           <div id="rightpart" style="height: 1255px; width: 25%; float: right">
               <div style="padding: 0 14px 0;">
               <div class="row-attampt come_in_center" style="text-align: center;    margin: 11px 0px 15px 0px;">
                   <span class="displayblock" style="display: block; margin-bottom: 10px;"><img width="114px;" height="113px;" src="PICTURES/user-icon.png"></span>
                    <span style="text-align: center;"><?php 
                                
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
                                      ?></span> 
                </div> 
               <div class="line-separator"></div>
           </div>
        </div>
          
     </div>
        
        <div id="footertest" >
            <div style="width: 1100px; margin-left: 30px">
               <a href="Homepage.php">
                    <button type="button" class="button-previous hover1"><span class="icon"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</button></a>

               <a <?php $eid=@$_GET['eid']; echo'href="teststart.php?eid='.$eid.'&sn=1"' ?>> <button type="button" class="button-next hvr" style="float:right">
               <span class="temp-text ">I'm ready to begin</span>
               <span class="icon"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                    </button></a>
            </div>
      </div>
                
        </div>    
</div>
</body>
</html>

