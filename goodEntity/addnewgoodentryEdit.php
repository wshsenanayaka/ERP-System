<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
     include('../include/check.php') ;

     if(isset($_GET['update']))
     {
       $update =$_GET['update'];
     }
     else
     {
       $update =false;
     }

     if(isset($_GET['prop_id'])){

     $id =$_GET['prop_id'];

     //$_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM goodentry WHERE purchaseid='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $purchaseid =$row['purchaseid'];
        $suppliername =$row['suppliername'];
        $supplierinvoiceno =$row['supplierinvoiceno'];
        $item_code =$row['item_code'];
        $purchasedisc =$row['purchasedisc'];
        $salesdisc =$row['gsalesdisc'];
        $quantity =$row['quantity'];

     }
     $query_r ="SELECT * FROM realgoodentry WHERE r_itemcode='$item_code' AND r_purchasedisc='$purchasedisc' AND r_salesdisc='$salesdisc'";
     $result_r =mysqli_query($conn,$query_r);
     while ($row_r=mysqli_fetch_array($result_r))
     {
        $item_code_r =$row_r['r_itemcode'];
        $purchasedisc_r =$row_r['r_purchasedisc'];
        $salesdisc_r =$row_r['r_salesdisc'];
        $quantity_r =$row_r['r_quantity'];
     }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">
     .addsb
     {
      margin-left: 16px;
     }
     .salign
     {
      margin-left: 25px;
      margin-right: 25PX;
     }
     #remindertext
     {
      color: red;
     }

   </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Edit Good Entry No : <?php if(isset($purchaseid)){ echo $purchaseid;}  ?>
        </li>
      </ol>

      <div class="form-group">
       <form action="addnewgoodentryEditCont.php" method="POST">
           <div class="form-group">
             <label for="pwd">Supplier Name</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="sn" value="" required="required">

                    <?php
                    if(isset($suppliername))
                    {
                        echo "<option value='".$suppliername."'>".$suppliername."</option>";
                    }
                    ?>
                    <option value="">Select</option>
                    <?php
                    $query ="SELECT name FROM supplierinfor";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                       if($row['name']!=$suppliername)
                       {
                         echo "<option value='".$row['name']."'>".$row['name']."</option>";
                       }
                    }
                   ?>
                   </select>
              </div>
           </div>

           <div class="form-group">
             <label for="pwd">Supplier's Invoice No</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="sno" value="<?php if(isset($supplierinvoiceno)){ echo $supplierinvoiceno;}?>"  required="required"/>
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Item Code</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="ic" id="selectval" required="required">
                    <?php
                    if(isset($item_code_r))
                    {
                        echo "<option value='".$item_code_r."'>".$item_code_r."</option>";
                    }
                    ?>
                    <option value="">Select</option>
                    <?php
                    $query ="SELECT item_code FROM  iteminfor";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                       if($row['item_code']!=$item_code_r)
                       {
                         echo "<option value='".$row['item_code']."'>".$row['item_code']."</option>";
                       }
                    }
                   ?>
                   </select>
              </div>
           </div>
           <div id="show_text">

           </div>
           <div class="defalutval">
              <div class="form-group">
                 <label for="pwd">Purchase disc</label>
                  <div class="col-sm-3">
                     <div id="show_product">
                      <input type="text"  value="<?php if(isset($purchasedisc_r)){ echo $purchasedisc_r;}?>" class="form-control form-control-sm" name="$purchasedisc" readonly>
                     </div>
                  </div>
              </div>
             <div class="form-group">
               <label for="pwd">Sales disc</label>
                <div class="col-sm-3">
                    <input type="text"  value="<?php if(isset($salesdisc_r)){ echo $salesdisc_r;}?>" class="form-control form-control-sm" name="salesdisc"/>
                     <!-- <select type="text" class="form-control form-control-sm" name="salesdisc"  required="required">
                       <?php
                           $querysee ="SELECT salesdisc0 FROM iteminfor WHERE item_code='$item_code_r'";
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
                     </select> -->
                </div>
             </div>
          <div class="form-group">
             <label for="pwd">Quantity</label>
              <div class="col-sm-3">
               <input type="number" class="form-control form-control-sm" name="quantity"  min="0"/>
              </div>
              <div class="col-sm-3" id="remindertext">
                 <label for="pwd">Already Existing Amount: <?php if(isset($quantity_r)){ echo $quantity_r;}?></label>
              </div>
          </div>
         </div>
          <div class="form-group">
              <div class="col-sm-3">
               <input type="hidden" class="form-control form-control-sm" name="pid" value="<?php if(isset($purchaseid)){ echo $purchaseid;}?>" required="required"/>
              </div>
          </div>
          <div class="addsb">
              <?php if ($update == true): ?>
                <input type="submit" name="update" class="btn btn-primary btn-sm" value="update"/>
              <?php else: ?>
                <input type="submit" name="addsup" value="Save" class="btn btn-primary btn-sm"/>
              <?php endif ?>

            <input type="reset" name="serchsubep" value="Cancle" onclick="window.location='./addnewgoodentry';" class="btn btn-primary btn-sm"/>
          </div>
       </form>
     </div>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>

 <script type="text/javascript">

     $(document).ready(function(){
      $('#selectval').change(function(){
           var item_code = $(this).val();
           //alert(item_code);
           $.ajax({
                url:"addnewgoodentryEditCont",
                method:"POST",
                data:{item_code:item_code},
                success:function(data){
                     $('#show_text').html(data);

                }
           });
        $(".defalutval").hide();
      });
 });
</script>
