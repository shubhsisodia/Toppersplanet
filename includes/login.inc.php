<?php

session_start();

if (isset($_POST['submit'])) 
{
    
        include 'dbh.inc.php';


        $uid   = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd   = mysqli_real_escape_string($conn, $_POST['pwd']);

       //For check empty fields
        if (empty($uid) || empty($pwd))
           {
               
                header("Location: ../Homepage.php?login=empty");
                   exit();
           }else {
                     $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                       $result = mysqli_query($conn, $sql);
                       $resultCheck = mysqli_num_rows($result);

                       if($resultCheck < 1)
                           {
                              if(@$_GET['w'])
                                {
                                  if(@$_GET['q'])
                                        {
                                               header("Location: ../Homepage.php?login=success");
                                                exit();
                                        }
                                    header("Location: ../Quiz.php?login=error&q=1&r=1");
                                    exit();
                                }
                              if(@$_GET['z'])
                                            {
                                                header("Location: ../Beclear.php?login=Perror&q=1");
                                                exit();
                                            }  
                             
                             header("Location: ../Homepage.php?login=error");
                             exit();
                           } else 
                               { $sql = "SELECT * FROM users WHERE user_pwd = '$pwd'";
                                  $result = mysqli_query($conn, $sql);
                                  $resultCheck = mysqli_num_rows($result);
                               

                                    if($resultCheck < 1)
                                        {
                                          if(@$_GET['w'])
                                            {
                                              if(@$_GET['q'])
                                                 {
                                                    header("Location: ../Homepage.php?login=success");
                                                    exit();
                                                     }
                                                header("Location: ../Quiz.php?login=Perror&q=1");
                                                exit();
                                            }
                                           if(@$_GET['z'])
                                            {
                                                header("Location: ../Beclear.php?login=Perror&q=1");
                                                exit();
                                            }  
                                                      header("Location: ../Signin.php?login=error");
                                          exit();
                                         }
                                           else {
                                                                  //Log in the user here
                                                             while($row=mysqli_fetch_array($result) ){
                                                                      $_SESSION['u_id'] = $row['user_id'];
                                                                      $_SESSION['u_first'] = $row['user_first'];
                                                                      $_SESSION['u_last'] = $row['user_last'];
                                                                      $_SESSION['u_uid'] = $row['user_uid'];
                                                             }
                                                                      if(@$_GET['w'])
                                                                        {
                                                                           if(@$_GET['q'])
                                                                                    {
                                                                                        header("Location: ../Homepage.php?login=success");
                                                                                        exit();
                                                                                    }
                                                                            header("Location: ../Quiz.php?login=success&q=1");
                                                                            exit();
                                                                        }
                                                                      if(@$_GET['z'])
                                                                        {
                                                                            header("Location: ../Beclear.php?login=success&q=1");
                                                                            exit();
                                                                        } 
                                                                      header("Location: ../epub/booksmenu.php?login=success");
                                                                      exit();
                                                }
                                         
                                    
                              }

                                }
                             
} 
else {
           header("Location: ../Homepage.php?login=error");
           exit();
      }
      
      
      
