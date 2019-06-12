<?php

  include('../include/check.php');

  if(isset($_POST['item_code'])){
  $value =$_POST['item_code'];
   $query1 ="SELECT * FROM iteminfor WHERE item_code='$value'";

   $result =mysqli_query($conn,$query1);
    while($row = mysqli_fetch_array($result))
    {
          $purchasedisc = $row['purchasedisc'];
    }
  }
?>

          <div class="form-group">
             <label for="pwd">Purchase disc</label>
              <div class="col-sm-3">
                 <!-- <div id="show_product"> -->
                    <input type="text" id="show_product_text" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" class="form-control form-control-sm" name="pd" readonly style="width: 450px;"/>
                 <!-- </div> -->
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Sales disc</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="salesdisc" id="show_product_text" style="width: 450px;">
                    <option value="">Select</option>
                    <?php
                         $querysee ="SELECT salesdisc0 FROM iteminfor WHERE item_code='$value'";
                         $resultsee =mysqli_query($conn,$querysee);
                         $row1 = mysqli_fetch_array($resultsee);
                         $x="".$row1[0]."";
                         $x = json_decode($x,true);

                         for($i=0; $i<sizeof($x);$i++)
                        {
                          $code=$x[$i]['salesdisc'];
                          echo '<option value="'.$code.'">'.$code.'</option>';
                        }
                    ?>
                   </select>
              </div>
         </div>
