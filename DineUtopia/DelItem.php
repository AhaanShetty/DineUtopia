<?php
include("config.php");
$ids = $_POST["id"];
foreach($ids as $id){
    $sql="DELETE FROM Item WHERE Item_Id='$id'";
    if (mysqli_query($db, $sql)) {
    echo "";
    } 
    else {
    echo "";
}
}
?>