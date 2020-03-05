 <?php  
                           
       include 'includes/dbh.inc.php';
       
       $nameid = $_POST['datapost'];
       
       $q= "SELECT * FROM ques_bank WHERE ques_id='$nameid' ";
       $result = mysqli_query($conn,$q);
               
       $resultcheck = mysqli_num_rows($result);

                                     if($resultcheck > 0)
                                         {
                                           while( $row = mysqli_fetch_assoc($result))
                                               {
                                              echo $row['question'];
                                              }
                                         }
       ?>              