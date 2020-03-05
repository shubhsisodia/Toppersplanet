<?php

session_start();
 if (isset($_POST['submit'])) 
{
     
     include 'includes/dbh.inc.php';
        
        $eid=@$_GET['eid'];
        $sn=@$_GET['sn'];
        
       if (empty($_POST["ans"]))
       {
           
        header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();   
       }
       
       if($_POST['ans']){
                       $optionchoose = $_POST['ans'];
                      
                        $q21 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn='$sn'");
                        $rowcount=mysqli_num_rows($q21);
                        if(!$rowcount == 0)
                        {
                            $q22 =mysqli_query($conn,"UPDATE tempanswer SET optionid='$optionchoose' where sn='$sn'");
                             if($sn<20){
                               $n=++$sn;
                                   header("Location: teststart.php?eid=$eid&sn=$n");
                                    exit();        
                               }
                               
                               if($sn==20){
                               header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();        
                               }
                        }
                        else {
                           $sql =mysqli_query($conn,"INSERT INTO tempanswer VALUES('$eid','$sn','$optionchoose')");
                       
                      
                               
                               if($sn<20){
                               $n=++$sn;
                                   header("Location: teststart.php?eid=$eid&sn=$n");
                                    exit();        
                               }
                               
                               if($sn==20){
                               header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();        
                               }
                        }    
             }
            
                
                 
             
             
           
                               
}

if (isset($_POST['marked'])) {
    include 'includes/dbh.inc.php';
        
        $eid=@$_GET['eid'];
        $sn=@$_GET['sn'];
        
        
        $m21 =mysqli_query($conn,"SELECT * FROM tempanswer WHERE eid='$eid' AND sn='$sn'");
                        $rowco=mysqli_num_rows($m21);
        if($rowco == 0)
            {
                  $q26 =mysqli_query($conn,"SELECT * FROM marked WHERE eid='$eid' AND sn='$sn'");
                        $rowcount=mysqli_num_rows($q26);
                        if(!$rowcount == 0)
                        {
                            if($sn<20){
                               $n=++$sn;
                                   header("Location: teststart.php?eid=$eid&sn=$n");
                                    exit();        
                               }
                               
                               if($sn==20){
                               header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();        
                               }
                        }
                        else {
                           $q28 =mysqli_query($conn,"INSERT INTO marked VALUES('$eid','$sn','1')");
      
                            if($sn<20){
                               $n=++$sn;
                                   header("Location: teststart.php?eid=$eid&sn=$n");
                                    exit();        
                               }
                               
                               if($sn==20){
                               header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();        
                               }
                        } 
                        
           }
          else
          {
              if($sn<20){
                               $n=++$sn;
                                   header("Location: teststart.php?eid=$eid&sn=$n");
                                    exit();        
                               }
                               
                               if($sn==20){
                               header("Location: teststart.php?eid=$eid&sn=$sn");
                                    exit();  
                               }  
          }
}

if(@$_GET['z']==1)
              {
              
               include 'includes/dbh.inc.php';
        
        $eid=@$_GET['eid'];
        $sn=@$_GET['sn']; 
              
                  $right=0;
                  $wrong=0;
                    $q1 =mysqli_query($conn,"SELECT * FROM tempanswer");
                    while($row=mysqli_fetch_array($q1))
                            {
                                   $snT=$row['sn'];
                                   $optionT=$row['optionid'];
                               $q2 =mysqli_query($conn,"SELECT * FROM answer where eid='$eid' AND sn='$snT'");
                                 while($row=mysqli_fetch_array($q2))    
                                 {
                                          $optionidA= $row['ansid'];
                                          if($optionidA==$optionT)
                                          {
                                              $right= $right + 1;
                                          }
                                          else
                                          {
                                              $wrong = $wrong + 1;
                                          }
                                 }
                            }
                    
                      $score= 2*$right - $wrong;      
                            
                     $Fname = $_SESSION['u_first'];
                     $Lname = $_SESSION['u_last'];
                     $email = $_SESSION['u_uid'];
                     if($eid=='fad8b9aa')
                     {     $quizname = 'PHYSICS 11th';} else if($eid=='9f571dfa'){$quizname = 'CHEMISTRY 11th';}else if($eid=='3aee51b5'){$quizname = 'MATHS 11th';}else if($eid=='736647db'){$quizname = 'PHYSICS 12th';}else if($eid=='f9229d6c'){$quizname = 'CHEMISTRY 12th';}else if($eid=='2c5b4697'){$quizname = 'MATHS 12th';}
                      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                      $rand=substr(str_shuffle($permitted_chars), 0, 8);
                     $q3 =mysqli_query($conn,"INSERT INTO history VALUES('$rand','$Fname $Lname','$email','$quizname','$score','$right','$wrong',NOW() )");
                     $q4 =mysqli_query($conn,"DELETE FROM tempanswer WHERE eid='$eid'");
                     $sy =mysqli_query($conn,"DELETE FROM marked WHERE eid='$eid'");
                    
                            header("Location: resultshow.php?p=1&eid=$eid&w=$rand");
                                    exit();   
                 
             }   

/* CHECK ERROR */
/* if (!mysqli_query($conn,"SELECT * FROM tempanswer"))
                            {
                            echo("Error description: " . mysqli_error($conn));
                            }
*/
?>
                               