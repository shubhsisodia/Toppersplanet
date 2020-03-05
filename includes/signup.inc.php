<?php

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
   $first = mysqli_real_escape_string($conn, $_POST['first']);
   $last  = mysqli_real_escape_string($conn, $_POST['last']);
   $uid   = mysqli_real_escape_string($conn, $_POST['uid']);
   $pwd   = mysqli_real_escape_string($conn, $_POST['pwd']);
   
   //For check empty fields
   if (empty($first) || empty($last) || empty($uid) || empty($pwd))
   {
       header("Location: ../signup.php?signup=empty");
       exit();
   } else {
        // Check if input Characters are valid
       if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
       {
           header("Location: ../signup.php?signup=invalid");
           exit();
       }else{
           //check if email is valid
           if(!filter_var($uid, FILTER_VALIDATE_EMAIL)){
               header("Location: ../signup.php?signup=email");
               exit();
           }else{
               $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
               $result = mysqli_query($conn, $sql);
               $resultCheck = mysqli_num_rows($result);
               
               if($resultCheck > 0){
                   header("Location: ../signup.php?signup=usertaken");
                   exit();
               }else{
                   //Hashing the password
                  // $hashedPwd = password_hash( $pwd, PASSWORD_DEFAULT);
                   //Insert user into database
                   $sql = "INSERT INTO users( user_first, user_last, user_uid, user_pwd) VALUES ('$first','$last','$uid','$pwd');";
                   mysqli_query($conn,$sql);
                   header("Location: ../Homepage.php?signup=success");
                   exit();
                   
               }
           }
       }
   }
}

else{
    header("Location: ../signup.php");
    exit();
}