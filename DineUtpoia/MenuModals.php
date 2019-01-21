<?php
include("config.php");
?>

<div class="modal fade" id="starterModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color:azure">
<div class="modal-header" style="border:none">
          <h4 class="modal-title" style="padding-left:3em">STARTERS</h4>
          <button type="button" class="close" style="margin-left:0px" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
            <div style="text-align:center">
            <ul style="list-style:none; padding-left:0px">
                <?php
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Veg' and Description LIKE '%Starter%' ";
                echo "<h6><img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'> VEG Starter</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Non-Veg' and Description LIKE '%Starter%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'> NON-VEG Starter</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                ?>
            </ul>
            </div>
            </div>
</div>
        </div>
        </div>
        
        <div class="modal fade" id="MCModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color:azure">
<div class="modal-header" style="border:none">
          <h4 class="modal-title" style="padding-left:3em">Main Course</h4>
          <button type="button" class="close" style="margin-left:0px" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
            <div style="text-align:center">
            <ul style="list-style:none; padding-left:0px">
                <?php
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Veg' and Description LIKE '%Main Course%' ";
                echo "<h6><img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'> VEG Main Course</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Non-Veg' and Description LIKE '%Main Course%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'> NON-VEG Main Course</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                ?>
            </ul>
            </div>
            </div>
</div>
        </div>
        </div>
        
        <div class="modal fade" id="saladModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color:azure">
<div class="modal-header" style="border:none">
          <h4 class="modal-title" style="padding-left:3em">Salads</h4>
          <button type="button" class="close" style="margin-left:0px" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
            <div style="text-align:center">
            <ul style="list-style:none; padding-left:0px">
                <?php
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Veg' and Description LIKE '%Salad%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'> VEG Salads</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Non-Veg' and Description LIKE '%Salad%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'> NON-VEG Salads</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                ?>
            </ul>
            </div>
            </div>
</div>
        </div>
        </div>
        
        <div class="modal fade" id="desertModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color:azure">
<div class="modal-header" style="border:none">
          <h4 class="modal-title" style="padding-left:3em">Desserts</h4>
          <button type="button" class="close" style="margin-left:0px" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
            <div style="text-align:center">
            <ul style="list-style:none; padding-left:0px">
                <?php
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Veg' and Description LIKE '%Dessert%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'> VEG Dessert</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Non-Veg' and Description LIKE '%Dessert%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'> NON-VEG Dessert</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                ?>
            </ul>
            </div>
            </div>
</div>
        </div>
        </div>
        
        <div class="modal fade" id="drinksModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color:azure">
<div class="modal-header" style="border:none">
          <h4 class="modal-title" style="padding-left:3em">Drinks</h4>
          <button type="button" class="close" style="margin-left:0px" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
            <div style="text-align:center">
            <ul style="list-style:none; padding-left:0px">
                <?php
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Soft Drinks' and Description LIKE '%Drinks%' ";
                echo "<br><h6><img src='https://png.icons8.com/cotton/24/000000/orange-soda-bottle.png'> Soft Drinks</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Mocktail' and Description LIKE '%Drinks%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/24/000000/no-alcohol.png'> Mocktails</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                        
                $sql = "SELECT * FROM Item WHERE Type LIKE 'Cocktail' and Description LIKE '%Drinks%' ";
                echo "<br><h6><img src='https://png.icons8.com/color/24/000000/cocktail.png'> Cocktails</h6>";
                $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                           echo "<li>";
                           echo $row['Name'];
                           echo "</li>";
                        }
                ?>
            </ul>
            </div>
            </div>
</div>
        </div>
        </div>