<?php
include("config.php");
if(isset($_POST["startertype"]))
{
$sql = "Select * from Item where Type LIKE '".$_POST["startertype"]."' and Description LIKE 'Starter'";
$result = mysqli_query($db,$sql);
		if($_POST["startertype"] != "")
		{
			echo "<form action='' method='post'>";
		    $type = $_POST["startertype"];
		    echo '<div class="veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">'.$type.'</div>';
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
					{

							$name=$row['Name'];
							$price=$row['Price'];
							$id = $row['Item_Id'];
							echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							echo "<input type='checkbox' name='id[]' value='".$id."'>"; 
							if($type=="Veg")
							echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
							echo " ".$name."<br>";
							echo "</input>";
							echo "&#8377;".$price;
							echo "</div>";
					}
					echo"<button type='submit' class='btn btn-danger'>Delete</button>";
			echo "</form>";
		}
		else
		{
		    echo '<div class="non_veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">Select An Option!</div>';
		}
}
//Mains

if(isset($_POST["mainstype"]))
{
$sql = "Select * from Item where Type LIKE '".$_POST["mainstype"]."' and Description LIKE 'Main Course'";
$result = mysqli_query($db,$sql);
		if($_POST["mainstype"] != "")
		{
		    echo "<form action='' method='post'>";
		    $type = $_POST["mainstype"];
		    echo '<div class="veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">'.$type.'</div>'; 
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
					{
							$name=$row['Name'];
							$price=$row['Price'];
	                        $id = $row['Item_Id'];
							echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							echo "<input type='checkbox' name='id[]' value='".$id."'>"; 
							if($type=="Veg")
							echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
							echo " ".$name."<br>";
							echo "</input>";
							echo "&#8377;".$price;
							echo "</div>";
					}
					echo"<button type='submit' class='btn btn-danger' >Delete</button>";
			echo "</form>";
		}
		else
		{
		    echo '<div class="non_veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">Select An Option!</div>';
		}
}
//Salads
if(isset($_POST["saladtype"]))
{
$sql = "Select * from Item where Type LIKE '".$_POST["saladtype"]."' and Description LIKE 'Salad'";
$result = mysqli_query($db,$sql);
		if($_POST["saladtype"] != "")
		{
		    echo "<form action='' method='post'>";
		    $type = $_POST["saladtype"];
		    echo '<div class="veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">'.$type.'</div>'; 
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
					{
							$name=$row['Name'];
							$price=$row['Price'];
	                        $id = $row['Item_Id'];
							echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							echo "<input type='checkbox' name='id[]' value='".$id."'>";
							if($type=="Veg")
							echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
							echo " ".$name."<br>";
							echo "</input>";
							echo "&#8377;".$price;
							echo "</div>";
					}
					echo"<button type='submit' class='btn btn-danger' >Delete</button>";
			echo "</form>";
		}
		else
		{
		    echo '<div class="non_veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">Select An Option!</div>';
		}
}
//Dessert
if(isset($_POST["desserttype"]))
{
$sql = "Select * from Item where Type LIKE '".$_POST["desserttype"]."' and Description LIKE 'Dessert'";
$result = mysqli_query($db,$sql);
		if($_POST["desserttype"] != "")
		{
		    echo "<form action='' method='post'>";
		    $type = $_POST["desserttype"];
		    echo '<div class="veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">'.$type.'</div>'; 
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
					{
							$name=$row['Name'];
							$price=$row['Price'];
	                       $id = $row['Item_Id'];
							echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							echo "<input type='checkbox' name='id[]' value='".$id."'>";
							if($type=="Veg")
							echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
							echo " ".$name."<br>";
							echo "</input>";
							echo "&#8377;".$price;
							echo "</div>";
					}
					echo"<button type='submit' class='btn btn-danger' >Delete</button>";
			echo "</form>";
		}
		else
		{
		    echo '<div class="non_veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">Select An Option!</div>';
		}
}

//Drinks

if(isset($_POST["drinktype"]))
{
$sql = "Select * from Item where Type LIKE '".$_POST["drinktype"]."' and Description LIKE 'Drinks'";
$result = mysqli_query($db,$sql);
		if($_POST["drinktype"] != "")
		{
		    echo "<form action='' method='post'>";
		    $type = $_POST["drinktype"];
		    echo '<div class="veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">'.$type.'</div>'; 
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
					{
							$name=$row['Name'];
							$price=$row['Price'];
	                       $id = $row['Item_Id'];                 
							echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							echo "<input type='checkbox' name='id[]' value='".$id."'>";
							if($type=="Soft drinks")
							echo "<img src='https://png.icons8.com/cotton/24/000000/orange-soda-bottle.png'>";
							else if($type=="Mocktail")
							echo "<img src='https://png.icons8.com/color/24/000000/no-alcohol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/24/000000/cocktail.png'>";
							echo " ".$name."<br>";
							echo "</input>";
							echo "&#8377;".$price;
							echo "</div>";
					}
					echo"<button type='submit' class='btn btn-danger' >Delete</button>";
			echo "</form>";
		}
		else
		{
		    echo '<div class="non_veg_title" style="height=50px;background-color:#c6c6c4;font-size:25px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #c6c6c4;">Select An Option!</div>';
		}
}
?>
      

<script>
            $(document).ready(function() {
$('form').submit(function(e) {
     e.preventDefault();
    $.ajax({
  type: 'POST',
  url: 'DelItem.php',
  data: $('form').serialize(),
  success: function() {
                alert("Item Deleted Successfully");
                window.location.replace("http://easydine.000webhostapp.com/Manager.php");
            },
            error: function() {
                alert("Error in Deleting Item");
            }
});
document.getElementsByTagName("form").reset();
});
});
            
        </script>
        
 