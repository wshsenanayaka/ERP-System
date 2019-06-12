<?php

  include('../include/check.php');

  if(isset($_POST['salesdiscView'])){

      $value =$_POST['salesdiscView'];
      $query1 = "SELECT * FROM  iteminfor";

      $result =mysqli_query($conn,$query1);
      while($row = mysqli_fetch_array($result))
      {
         $salesdisc0 =$row['salesdisc0'];
         $x = json_decode($salesdisc0, true);

         for($i=0; $i<sizeof($x);$i++)
         {
            $code=$x[$i]['salesdisc'];
            if($code == $value){

               $item_code =$row['item_code'];
               $purchasedisc =$row['purchasedisc'];
               
            }
         }		
      }   
  }
  
?>


         <div class="form-group">
             <label for="pwd">Item Code</label>
              <div class="col-sm-3">
                 <!-- <div id="show_product"> -->
                    <input type="text" id="showSelect" value="<?php if(isset($item_code)){ echo $item_code;}?>" class="form-control form-control-sm" name="ic" readonly/>
                 <!-- </div> -->
              </div>
          </div>
         <div class="form-group">
             <label for="pwd">Purchase disc</label>
              <div class="col-sm-3">
                 <!-- <div id="show_product"> -->
                    <input type="text" id="showSelect" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" class="form-control form-control-sm" name="pd" readonly style="width: 450px;"/>
                 <!-- </div> -->
              </div>
          </div>
         