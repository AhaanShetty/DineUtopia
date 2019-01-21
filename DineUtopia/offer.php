<?php
session_start();
include("config.php");

if(isset($_POST['offer']))
{
  $offer_name=$_POST['offer'];
   $sql = "Select * from Offer where name LIKE '$offer_name' ";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_BOTH);
   $count = mysqli_num_rows($result);
   if($count == 1)
   {
       $offer_id=$row['offer_id'];
       $cus_email=$_SESSION['user_email'];
        $sql1 = "Update Customer Set offer_id = '$offer_id' where Email_Id='$cus_email'";
         $result1 = mysqli_query($db,$sql1);
         
       $rate=$row['dis_per'];
       $_SESSION['discount']=$rate;
        echo "<script>
        alert('Offer Successfully Applied');
        window.location.href='http://easydine.000webhostapp.com/cart.php'        
        </script>";
   }
   else
   {
       echo "<script>
        alert('Invalid Offer');
        window.location.href='http://easydine.000webhostapp.com/cart.php'        
        </script>";
   }
}

?>