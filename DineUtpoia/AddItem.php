<?php
include("config.php");
$name = $_POST["name"];
$price = $_POST["price"];
$type = $_POST["type"];
$desc = $_POST["desc"];
$sql = "SELECT MAX(Item_Id) AS MAXID FROM Item where Description LIKE '$desc'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$nextid=$row['MAXID'] + 1;
$avail = 1;
$add = "INSERT INTO Item VALUES('$nextid','$name','$price','$avail','$type','$desc')";
if (mysqli_query($db, $add)) {
    echo "";
} else {
    echo "";
}
?>