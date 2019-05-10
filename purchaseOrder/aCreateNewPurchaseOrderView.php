<?php

  include('../include/check.php');

   // if(isset($_POST['item_code']))
  if(isset($_POST['item_code']))
   {
        $value =$_POST['item_code'];
        $query1 ="SELECT * FROM customerinfor WHERE name='".$value."'";
        $result =mysqli_query($conn,$query1);
        while($row = mysqli_fetch_array($result))
        {
                $cid = $row['cid'];

        }
   }
?>

<div class="form-group" id="show_product_text">
         <label for="pwd">Customer Address</label>
          <div class="col-sm-3">
             <!-- <input type="text" class="form-control form-control-sm" name="customeraddress" value="<?php if(isset($_SESSION['add1'])){ echo $_SESSION['add1'];}?>" required="required"/>  -->
            <select type="text" class="form-control form-control-sm" name="customeraddress" required="required">
                    <option value="">Select</option>
                    <?php
                    $query ="SELECT  *  FROM caddsiteinfor WHERE cusno='".$cid."'";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {

                      echo "<option value='".$row['address']."'>".$row['address']."</option>";

                    }
                   ?>
             </select>

          </div>
      </div>
      <div class="form-group" id="show_product_text">
         <label for="pwd">Customer Site</label>
          <div class="col-sm-3">
             <!-- <input type="text" class="form-control form-control-sm" name="customersite" value="<?php if(isset($site1)){ echo $site1;}?>" required="required"/>  -->
             <select type="text" class="form-control form-control-sm" name="customersite" required="required">
                      <option value="">Select</option>
                      <?php
                      $query ="SELECT  *  FROM caddsiteinfor WHERE cusno='".$cid."'";
                      $result =mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result))
                      {

                        echo "<option value='".$row['site']."'>".$row['site']."</option>";

                      }
                     ?>
            </select>
          </div>
      </div>
