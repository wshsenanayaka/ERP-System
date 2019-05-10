<?php
 
   include('../include/check.php');
   
  // Get the item code and Purchase disc and Sales disc view the php code start
  if($_POST['item_code_r'])
  {
    $val =$_POST['item_code_r'];
    $queryr ="SELECT * FROM iteminfor WHERE item_code='$val'";
    $resultr =mysqli_query($conn,$queryr);
    while ($rowr=mysqli_fetch_array($resultr))
    {
       $purchasedisc =$rowr['purchasedisc'];
    }
  }
  //Get the item code and Purchase disc and Sales disc view the php code end
  ?>
  <!-- view in div show_product_items start -->
  <div class="form-group">
     <label for="pwd">Purchase disc</label>
      <div class="col-sm-3">
         <div id="show_product">
          <input type="text" id="show_product_items" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" class="form-control form-control-sm" name="rpurchasedisc" readonly/>
         </div>
      </div>
  </div>
  <div class="form-group">
     <label for="pwd">Sales disc</label>
      <div class="col-sm-3">
           <select type="text" class="form-control form-control-sm" name="rsalesdisc" id="show_product_items"  required="required">
            <option value="">Select</option>
            <?php
                 $querysee ="SELECT salesdisc0 FROM iteminfor WHERE item_code='$val'";
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
   <!-- view in div show_product_items end -->
