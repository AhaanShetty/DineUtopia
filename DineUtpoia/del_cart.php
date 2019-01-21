<?php
session_start();
include("config.php");
$order_id=$_SESSION['Order_Id'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['hidden_id'];
    /*
    foreach($_SESSION['Item_id'] as $keys => $values)
    {
        if($id == $values)
        {
             $sql="DELETE FROM Contains WHERE Item_Id='$id'";
             if (mysqli_query($db, $sql)) {
                echo "<script>window.location='cart.php'</script>";
                } 
            else {
            echo "";
             }
        }
    }
    */
    if(in_array($id,$_SESSION['Item_id']))
    {
        $sql="DELETE FROM Contains WHERE item_Id='$id' and order_id='$order_id'";
        $sql1 = "SELECT sub_total from Contains WHERE item_id='$id' and order_Id='$order_id'";
        $result = mysqli_query($db,$sql1);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $total=$row['sub_total'];
        $_SESSION['Total'] = $_SESSION['Total'] - $total;
             if (mysqli_query($db, $sql)) {
                echo "<script>window.location='cart.php'</script>";
                } 
            else {
            echo "hgjhgj";
             }
    }
}
?>