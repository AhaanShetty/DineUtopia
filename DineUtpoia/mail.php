<?php

if(isset( $_POST['txtName']))
  $name = $_POST['txtName'];
if(isset( $_POST['txtEmail']))
  $email = $_POST['txtEmail'];
if(isset( $_POST['txtMsg']))
  $message = $_POST['txtMsg'];
if(isset( $_POST['txtSubject']))
  $subject = $_POST['txtSubject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "shivashish987@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "<script>
        alert('Message received successfully');
        window.location.href='http://easydine.000webhostapp.com/cont.php';
    </script>";

?>