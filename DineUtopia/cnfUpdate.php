<?php
include("config.php");
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$type = $_POST["type"];
$desc = $_POST["desc"];
    $sql="UPDATE `Item` SET Name = '$name' , Price = '$price' , Type = '$type' , Description = '$desc' WHERE Item_Id ='$id'";
    if (mysqli_query($db, $sql)) {
    echo "";
    } 
    else {
    echo "";
}
?>