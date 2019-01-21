<?php
// include("config.php");
 ?>
 <div class="modal fade" id="quantity_Modal" role="dialog">

      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal with Dynamic Content</h4>
            </div>
            <div class="modal-body">
                <?php
                include("typeselect.php");
            	echo "<div class='v_s' style='height=50px;background-color:white;font-size:18px;border-top: 1px solid #e7e7e7; border-bottom: 1px solid #e7e7e7'>";
							echo "<div class='col-md-10' style=''>";
							if($type=="Veg")
							echo "<img src='https://png.icons8.com/color/20/000000/vegetarian-food-symbol.png'>";
							else
							echo "<img src='https://png.icons8.com/color/20/000000/non-vegetarian-food-symbol.png'>";
							echo " ".$name."<br>";
							echo "&#8377;".$price;
							echo "</div>";
							echo "</div>";
							?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
        
</div>

       