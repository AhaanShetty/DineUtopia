<?php
session_start();
include("config.php");
$flag=0;
$count=0;
$total=0;
$item_array_id = 0;
$item_array_quantity =0;
$item_array_price = array();
$item_array_total=0;
        if($_SESSION['Total'] == 0){
        $item_array_id=$_POST["hidden_id"];
        //array_push($_SESSION['Item_id'],$_POST["hidden_id"]);
	    $item_array_quantity=$_POST["quantity"];
	    array_push($item_array_price,$_POST["hidden_price"]);
    	$item_array_total=$_POST["hidden_price"]*$_POST["quantity"];
		$order_id=$_SESSION['Order_Id'];
		    $id= $item_array_id;
		    $sql = "INSERT INTO Contains VALUES('$order_id','$id','$item_array_quantity','$item_array_total')";
            if(mysqli_query($db,$sql)){
                $flag=1;
               echo "<script>window.location='order.php'</script>";
            }
        $total = $total + $item_array_total;
    $_SESSION['Total']=$total;
    $_SESSION['Item_total'] = array();
    $_SESSION['Item_id'] = array();
    array_push($_SESSION['Item_id'],$item_array_id);
    array_push($_SESSION['Item_total'],$item_array_total);
        }
        
        else{
		//$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
		if(in_array($_POST["hidden_id"],$_SESSION['Item_id']))
		{
			//$item_array = array(
			//	'item_id' => $_POST["hidden_id"]
			//	);
			//echo "<script>alert('Item already added')</script>";
		//echo "<script>window.location='order.php'</script>";
		$item_array_id=$_POST["hidden_id"];
	//	array_push($_SESSION['Item_id'],$_POST["hidden_id"]);
	    $item_array_quantity=$_POST["quantity"];
	    array_push($item_array_price,$_POST["hidden_price"]);
		$order_id=$_SESSION['Order_Id'];
		    $id= $item_array_id;
		$sql1 = "Select Quantity from Contains where order_Id = '$order_id' and item_id = '$id'";
		$result = mysqli_query($db,$sql1);
		$row = mysqli_fetch_array($result,MYSQLI_BOTH);
		$item_array_total=$_POST["hidden_price"]*$item_array_quantity;
		 $_SESSION['Total']=$_SESSION['Total']+$item_array_total;
		$item_array_quantity = $item_array_quantity + $row['Quantity'];
		$item_array_total=$_POST["hidden_price"]*$item_array_quantity;
		$sql2="UPDATE Contains SET Quantity = '$item_array_quantity' , sub_total='$item_array_total'  where order_Id = '$order_id' and Item_id = '$id'";
		if(mysqli_query($db,$sql2)){
                echo "<script>window.location='order.php'</script>";
            }
		
		}
	else
	{
		$item_array_id=$_POST["hidden_id"];
	//	array_push($_SESSION['Item_id'],$_POST["hidden_id"]);
	    $item_array_quantity=$_POST["quantity"];
	    array_push($item_array_price,$_POST["hidden_price"]);
	    $item_array_total=$_POST["hidden_price"]*$_POST["quantity"];
		$order_id=$_SESSION['Order_Id'];
		    $id= $item_array_id;
		    $sql = "INSERT INTO Contains VALUES('$order_id','$id','$item_array_quantity','$item_array_total')";
		  $_SESSION['Total']=$_SESSION['Total']+$item_array_total;
            if(mysqli_query($db,$sql)){
                $flag=1;
                echo "<script>window.location='order.php'</script>";
            }
	}
 array_push($_SESSION['Item_id'],$item_array_id);
    array_push($_SESSION['Item_total'],$item_array_total);
        }
    
?>


