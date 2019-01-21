<?php
$user='id6678808_root';
$pass='123456789';
$db='id6678808_easydine';
$conn =  new mysqli('localhost',$user,$pass,$db);
if($conn->connect_errno > 0)
 {
		die("Unable to connect to database [" . $conn->connect_errno . "]");
 }
	//Create variables
$contact= $_POST['con_num'];
$name= $_POST['name'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$code = $_POST['code'];
//Query
if($code=="ManagerCode")
$sql = "INSERT INTO Manager (Email_Id, Name, Contact_no, password) VALUES ('$email', '$name', '$contact', '$pswd');";
else
$sql = "INSERT INTO Customer (Name, Phone_number, Email_Id, Password) VALUES ('$name', '$contact', '$email', '$pswd');";

//Execute Query
if ($conn->query($sql) === TRUE) {
    header('Location: http://easydine.000webhostapp.com/');
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>