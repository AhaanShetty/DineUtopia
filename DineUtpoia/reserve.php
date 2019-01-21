<?php
session_start();
include("config.php");
$date = $_POST["r_date"];
$time = $_POST["r_time"];
$num = $_POST["no_people"];
$id=0;
$capa=0;
    $sql="Select * from _Table ORDER BY Capacity ASC";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        if(($num <= $row['Capacity']) && ($row['Availability'] == "1")){
            $capa= $row['Capacity'];
            $id=$row['table_id'];
            break;
        }
    }
    if($capa!=0){
    $sql1 = "SELECT MAX(r_id) AS MAXID FROM Reserve";
$result1 = mysqli_query($db,$sql1);
$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
$nextid=$row1['MAXID'] + 1;
     $user=$_SESSION['user_email'];
    $res="INSERT INTO Reserve Values('$nextid','$time','$date','$num','$user','$id')";
    if (mysqli_query($db, $res)) {
        $resu=mysqli_query($db, "UPDATE _Table SET Availability = 0 WHERE table_id = $id");
    echo '<script type="text/javascript">'; 
         echo 'alert("Reservation Successfull!!!!!");'; 
         echo 'window.location.href = "index.php";'; 
         echo '</script>';
    } 
    }
    else {
    echo '<script type="text/javascript">'; 
         echo 'alert("Reservation Unsuccessfull, No Table Available. Please Try Again Later!");'; 
         echo '</script>';
}
?>