<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

     include('../include/check.php'); 
  
     if(isset($_GET['aedit_id'])){

     $id =$_GET['aedit_id'];
    // $_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM  dispachinfor WHERE did='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $did =$row['did'];
        $dpid =$row['dpid'];
        $ditem_code =$row['ditem_code'];
        $dsales =$row['dsales'];
        $alreadyd =$row['alreadyd'];
        $doq =$row['doq'];
        $daq =$row['daq'];
        $diq =$row['diq'];
        $dsn =$row['dsn'];
        $status =$row['status'];
        $dsrq =$row['dsrq'];
        $drq =$row['drq'];
        $ddate =$row['ddate'];

     }

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('../include/head.php') ?>

   <style type="text/css">
      .column-left{ float: left; width: 50%; height: 400px; }
      .column-right{ float: right; width: 33%; height: 400px; }
      .column-center{ display: inline-block; width: 33%; }
      .aodbtn
      {
         margin-left: 15px;
         margin-bottom: 10px;

      }
      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
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
          <a href="#">Edit AOD</a>
        </li>
      </ol>
    <div class="container">
        <form action="aCreateNewAODCont.php" method="POST">
       <div class="column-left">
          <div class="form-group" id="show_product_text">
              <label for="pwd">PO No</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="dpid" value="<?php if(isset($dpid)){ echo $dpid;}?>"  required="required" readonly/>
              </div>
          </div>
          <div class="form-group" id="show_product_text">
              <label for="pwd">Item code</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="ditem_code" value="<?php if(isset($ditem_code)){ echo $ditem_code;}?>"  required="required" readonly/>
              </div>
          </div>
          <div class="form-group" id="show_product_text">
              <label for="pwd">Sales</label>
              <div class="col-sm-3">
              <!--  <input type="text" class="form-control form-control-sm" name="dsales" value="<?php if(isset($dsales)){ echo $dsales;}?>"  required="required"/>  -->

               <select type="text" class="form-control form-control-sm" name="dsales" required="required">
                 <?php
                 if(isset($dsales))
                     {
                         echo "<option value='".$dsales."'>".$dsales."</option>";
                     }
                 ?>
                   <?php
                         $querysee ="SELECT salesdisc0 FROM iteminfor WHERE item_code='$ditem_code'";
                         $resultsee =mysqli_query($conn,$querysee);
                         $row1 = mysqli_fetch_array($resultsee);
                         $x="".$row1[0]."";
                         $x = json_decode($x,true);

                         for($i=0; $i<sizeof($x);$i++)
                        {
                          $code=$x[$i]['salesdisc'];
                          if($dsales!=$code)
                          {
                            echo '<option value="'.$code.'">'.$code.'</option>';
                          }
                        }
                    ?>
               </select>
              </div>
          </div>
          <div class="form-group" id="show_product_text">
              <label for="pwd">Already dispathed amount</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="alreadyd" value="<?php if(isset($alreadyd)){ echo $alreadyd;}?>" readonly />
              </div>
          </div>
          <div class="form-group" id="show_product_text">
              <label for="pwd">Order quantity</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="doq" value="<?php if(isset($doq)){ echo $doq;}?>" readonly />
              </div>
          </div>
          <div class="form-group" id="show_product_text">
              <label for="pwd">Available Qty</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="daq" value="<?php if(isset($daq)){ echo $daq;}?>" readonly/>
              </div>
          </div>
          <div class="form-group">
              <label for="pwd">Dispatched date</label>
              <div class="col-sm-3">
               <input type="date" class="form-control form-control-sm" value="<?php if(isset($ddate)){ echo $ddate;}?>" name="ddate" required="required"/>
              </div>
           </div>
           <div class="aodbtn">
              <input type="submit" name="aodedit" value="Edit AOD" class="btn btn-primary btn-sm"/>
              <input type="button" value="Back" onclick="window.location='./aCreateNewAOD';" class="btn btn-primary btn-sm" />
           </div>
         </div>
       <div class="column-right">
          <div class="form-group">
              <label for="pwd">Issue Quantity</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="diq" value="<?php if(isset($diq)){ echo $diq;}?>" />
              </div>
           </div>
           <div class="form-group">
              <label for="pwd">Serial number</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($dsn)){ echo $dsn;}?>" name="dsn" />
              </div>
           </div>


          <?php if ($email =="userm"): ?>
          
           <!-- <div class="form-group">
              <label for="pwd">Status</label>
              <div class="col-sm-3">
                <select type="text" class="form-control form-control-sm" name="status" required="required">
                   <?php
                    if(isset($status))
                        {
                            echo "<option value='".$status."'>".$status."</option>";
                        }
                    ?>
                    <option value="">Select</option>
                    <?php
                    if($status!="Pedning")
                    {
                      echo ' <option value="Pedning">Pedning</option>';
                    }
                    if($status!="Approved")
                    {
                      echo ' <option value="Approved">Approved</option>';
                    }
                    if($status!="Rejected")
                    {
                      echo ' <option value="Rejected">Rejected</option>';
                    }
                 ?>
                 </select>
              </div>
           </div> -->

           <?php else: ?>

           <?php endif ?>



           <div class="form-group">
              <label for="pwd">Return Qty</label>
              <div class="col-sm-3">
               <select type="text" class="form-control form-control-sm" name="dsrq" >
                 <?php
                    if(isset($dsrq))
                        {
                            echo "<option value='".$dsrq."'>".$dsrq."</option>";
                        }
                    ?>
                    <option value="">Select</option>
                    <?php
                    if($dsrq!="Full Return")
                    {
                      echo ' <option value="Full Return">Full Return</option>';
                    }
                    if($dsrq!="Partial Return")
                    {
                      echo ' <option value="Partial Return">Partial Return</option>';
                    }
                 ?>
                 </select>
              </div>

           </div>
           <div class="form-group">
              <label for="pwd">Return Qty</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($drq)){ echo $drq;}?>" name="drq"/>
              </div>
           </div>
            <div class="col-sm-3">
                <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($did)){ echo $did;}?>"  name="did"/>
            </div>
       </div>
      </form>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

</div>
</body>

</html>
