<?php 
session_start();
unset($_SESSION['Order_Id']);
unset($_SESSION['Total']);
unset($_SESSION['Item_id']);
unset($_SESSION['Item_total']);
echo "<script>window.location.href='http://easydine.000webhostapp.com/order.php';</script>";
?>