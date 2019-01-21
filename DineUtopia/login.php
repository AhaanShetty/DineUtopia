<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $cus_type=$_POST['cus_type'];  
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['login_pswd']); 
      if($cus_type=='customer'){
      $sql = "SELECT * FROM Customer WHERE Email_Id = '$myemail' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          $_SESSION['user_email'] = $row['Email_Id'];
         $_SESSION['login_user'] = $row['Name'];
         $_SESSION['type'] = $cus_type;
         header("location: http://easydine.000webhostapp.com/");
      }else {
         echo '<script type="text/javascript">'; 
         echo 'alert("Invalid Credentials");'; 
         echo 'window.location.href = "index.php";'; 
         echo '</script>';
      }
   }
   else
   {
       $sql = "SELECT Name FROM Manager WHERE Email_Id = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $row['Name'];
         header("location: http://easydine.000webhostapp.com/");
      }else {
         echo '<script type="text/javascript">'; 
         echo 'alert("Invalid Credentials");'; 
         echo 'window.location.href = "index.php";'; 
         echo '</script>';
      }
   }
   }
?>