<?php
    // Database Connection
    include('../include/check.php');
     
    if(isset($_POST['salesSelect']))
    {
        $value =$_POST['salesSelect'];
        $query1 ="SELECT * FROM realgoodentry WHERE r_salesdisc='".$value."'";
        $result =mysqli_query($conn,$query1);
        while($row = mysqli_fetch_array($result))
        {
              $r_purchasedisc = $row['r_purchasedisc'];
              $r_quantity = $row['r_quantity'];
        }
  
    }

?>

<div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
    <div class="col-sm-2">
      <label for="pwd">Description</label>
    </div>
    <div class="col-sm-6">
        <input type="text" style="width: 100%;" class="form-control form-control-sm" id="description" value="<?php if(isset($r_purchasedisc)){ echo $r_purchasedisc;}?>" readonly/>
        <label id="errorDescription" class="error" style="display: none; font-size: small;">This field is required.</label>
    </div>
</div>
<div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
    <div class="col-sm-2">
      <label for="pwd">Quantity</label>
    </div>
    <div class="col-sm-6">
        <input type="text" style="width: 100%;" class="form-control form-control-sm" id="quantity"/>
        <input type="hidden" id="availableQuantity" value="<?php if(isset($r_quantity)){ echo $r_quantity;}?>"/>
        <label id="errorQuantity" class="error" style="font-size: small;">Available Quantity :  <?php if(isset($r_quantity)){ echo $r_quantity;}?></label>
    </div>
</div>

