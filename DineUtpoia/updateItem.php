<?php

include("config.php");
$id = $_POST['id'];
$sql = "Select * from Item where Item_Id='$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_BOTH);
$name = $row['Name'];
echo "
<form action='' id='AddItem'>
<input type='hidden' id='id' name='id' value='".$row['Item_Id']."'>
    <div class='form-group'>
      <label for='name'>Item Name:</label>
      <input type='text' class='form-control' id='name' placeholder='Enter Item Name' name='name' value='$name' required>
    </div>
    <div class='form-group'>
      <label for='price'>Price:</label>
      <input type='number' class='form-control' id='price' placeholder='Enter Price' name='price' value='".$row['Price']."' required>
    </div> ";
	if($row['Type'] == "Veg"){
		echo "
    <div class='form-check-inline'>
  <label class='form-check-label'>
    <input type='radio' class='form-check-input' name='type' value='Veg' checked required>Veg
  </label>
    </div>
    <div class='form-check-inline'>
        <label class='form-check-label'>
        <input type='radio' class='form-check-input' name='type' value='Non-Veg'>Non-Veg
        </label>
    </div>";
	}
	else{
		echo "
    <div class='form-check-inline'>
  <label class='form-check-label'>
    <input type='radio' class='form-check-input' name='type' value='Veg' required>Veg
  </label>
    </div>
    <div class='form-check-inline'>
        <label class='form-check-label'>
        <input type='radio' class='form-check-input' name='type' checked value='Non-Veg'>Non-Veg
        </label>
    </div>";
	}
	echo "
    <div class='form-group'>
      <label for='desc'><br>Description:</label>
      <input type='text' class='form-control' id='desc' placeholder='Enter Item Description' name='desc' value='".$row['Description']."' required>
    </div>
    <button type='submit' class='btn btn-success' id='Updatebtn'>Confirm Update Item</button>
  </form>
";
?>

<script>
            $(document).ready(function() {
$('form').submit(function(e) {
     e.preventDefault();
    $.ajax({
  type: 'POST',
  url: 'cnfUpdate.php',
  data: $('form').serialize(),
  success: function() {
                alert("Item Updated Successfully");
                window.location.replace("http://easydine.000webhostapp.com/Manager.php");
            },
            error: function() {
                alert("Error in Updating Item");
            }
});
});
});
            
        </script>