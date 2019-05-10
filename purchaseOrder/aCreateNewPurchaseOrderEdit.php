<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
   
     include('../include/check.php');

     if(isset($_GET['pedit_id'])){

     $id =$_GET['pedit_id'];
    // $_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM  purchaseorderinfor WHERE pid='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $pid =$row['pid'];
        $customerorderno =$row['customerorderno'];
        $customername =$row['customername'];
        $customeraddress =$row['customeraddress'];
        $customersite =$row['customersite'];
        $item_code =$row['itemcode'];
        $quantity =$row['pquantity'];
        $createby =$row['createby'];
        $createdate =$row['createdate'];
        $podate =$row['podate'];
        $poreceiveddate =$row['poreceiveddate'];
        $deadlinedate =$row['deadlinedate'];
     }

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">
      .column-left{ float: left; width: 50%; height: 450px; }
      .column-right{ float: right; width: 33%; height: 450px; }
      .column-center{ display: inline-block; width: 33%; }
      .abtn
      {
        /* margin-left: 15px; */
      }
      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
      .alldiv
      {
        width: 100%;
        height: 475px;
      }
      input:disabled {
         background: red;
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
          Edit Purchase Order No :<?php echo $id;?>
        </li>
      </ol>
    <div class="container">
        <form action="aCreateNewPurchaseOrderCont.php" method="POST" id="itemEditForm" enctype="application/json">
          <input type="hidden" id="itemjson" name="itemjson"/>
          <div class="alldiv">
             <div class="column-left">
               <div class="form-group">
                   <label for="pwd">Purchase ID</label>
                   <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" value="<?php if(isset($pid)){ echo $pid;}?>" name="" required="required" readonly/>
                   </div>
               </div>
              <div class="form-group">
                  <label for="pwd">Customer Order's No</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" value="<?php if(isset($customerorderno)){ echo $customerorderno;}?>" name="customerorderno" required="required"/>
                  </div>
              </div>
              <div class="form-group">
               <label for="pwd">Customer Name</label>
                <div class="col-sm-3">
                    <select type="text" class="form-control form-control-sm" name="customername"  required="required">
                       <?php
                      if(isset($customername))
                        {
                          echo "<option value='".$customername."'>".$customername."</option>";
                        }
                      ?>
                      <option value="">Select</option>
                      <?php
                      $query ="SELECT name FROM customerinfor";
                      $result =mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result))
                      {
                        if($row['name']!=$customername)
                         {
                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                         }
                      }
                     ?>
                    </select>
                </div>
             </div>
             <div class="form-group" >
                <label for="pwd">Customer Address</label>
                <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="customeraddress" required="required">
                    <?php
                    if(isset($customeraddress))
                      {
                        echo "<option value='".$customeraddress."'>".$customeraddress."</option>";
                      }
                    ?>
                    <option value="">Select</option>
                    <?php
                    $queryse ="SELECT  *  FROM customerinfor WHERE name='".$customername."'";
                    $resultse =mysqli_query($conn, $queryse);
                    while($rowse = mysqli_fetch_array($resultse))
                    {
                       $cid =$rowse['cid'];
                    }
                    $queryses ="SELECT  *  FROM caddsiteinfor WHERE cusno='".$cid."'";
                    $resultses =mysqli_query($conn, $queryses);
                    while($rowses = mysqli_fetch_array($resultses))
                    {

                      echo "<option value='".$row['address']."'>".$row['address']."</option>";

                    }
                   ?>
             </select>
                </div>
            </div>
            <div class="form-group" >
             <label for="pwd">Customer Site</label>
              <div class="col-sm-3">
                 <select type="text" class="form-control form-control-sm" name="customersite" required="required">
                  <?php
                    if(isset($customersite))
                      {
                        echo "<option value='".$customersite."'>".$customersite."</option>";
                      }
                  ?>
                  <option value="">Select</option>
                    <?php
                    $queryse1 ="SELECT  *  FROM customerinfor WHERE name='".$customername."'";
                    $resultse1 =mysqli_query($conn, $queryse1);
                    while($rowse1 = mysqli_fetch_array($resultse1))
                    {
                       $cid =$rowse1['cid'];
                    }
                    $queryses1 ="SELECT  *  FROM caddsiteinfor WHERE cusno='".$cid."'";
                    $resultses1 =mysqli_query($conn, $queryses1);
                    while($rowses1 = mysqli_fetch_array($resultses1))
                    {

                      echo "<option value='".$rowses1['site']."'>".$rowses1['site']."</option>";

                    }
                 ?>
                 </select>
                </div>
            </div>
           <!--  <div class="form-group">
               <label for="pwd">Item Code</label>
                <div class="col-sm-3">
                     <select type="text" class="form-control form-control-sm" name="item_code" required="required">
                      <?php
                      if(isset($item_code))
                        {
                          echo "<option value='".$item_code."'>".$item_code."</option>";
                        }
                      ?>
                      <option value="">Select</option>
                      <?php
                      $query ="SELECT  item_code,purchasedisc FROM  iteminfor";
                      $result =mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result))
                      {
                        if($row['item_code']!=$item_code)
                        {
                          echo "<option value='".$row['item_code']."'>".$row['item_code']." ".$row['purchasedisc']."</option>";
                        }
                      }
                     ?>
                     </select>
                </div>
             </div> -->
          <!-- <div class="form-group">
              <label for="pwd">Quantity</label>
              <div class="col-sm-3">
               <input type="number" class="form-control form-control-sm" value="<?php if(isset($quantity)){ echo $quantity;}?>"  name="quantity" required="required"/>
              </div>
          </div>  -->

           </div>

           <div class="column-right">
              <div class="form-group">
                  <label for="pwd">Create By</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="createby" value ="<?php if(isset($createby)){ echo $createby;} if(!isset($createby)){ echo $email;}   ?>" required="required" readonly/>
                  </div>
              </div>
              <div class="col-sm-3">
                <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($pid)){ echo $pid;}?>"  name="id"/>
              </div>
              <div class="form-group">
                <label for="pwd">Create Date</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm"  value ="<?php if(isset($createdate)){ echo $createdate;} if(!isset($createdate)){ echo date("m/d/Y");}   ?>" name="createdate" required="required" readonly/>
                </div>
             </div>
              <div class="form-group">
                  <label for="pwd">PO Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($podate)){ echo $podate;}?>" name="podate" required="required"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">PO Received Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($poreceiveddate)){ echo $poreceiveddate;}?>" name="poreceiveddate" required="required"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">Deadline Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($deadlinedate)){ echo $deadlinedate;}?>" name="deadlinedate" required="required"/>
                  </div>
              </div>
           </div>
          </div>

          <table id="uptableitems" class="table table-bordered table-striped table-responsive" >
           <thead>
            <tr>
             <th>Item Code</th>
             <th>Sales disc</th>
             <th>Order Quantity</th>
             <th>Available QWuantity</th>
             <th></th>
            </tr>
           </thead>
           <tbody>
           <?php
                 require '../include/config.php';

                 $queryse ="SELECT * FROM  purchaseorderinfor WHERE pid='$id'";
                 $resultse =mysqli_query($conn,$queryse);

                 while ($rowse=mysqli_fetch_array($resultse))
                 {
                   $item_code =$rowse["itemcode"];
                 }

                 $x=$item_code;

                //  $x = json_decode($x);

                 for($i=0;$i<sizeof($x);$i++)
                  {

                      echo "1";
                      $code=$x[$i]['item_code'];
                      $code1=$x[$i]['sales_dis'];
                      $code2=$x[$i]['orderq'];
                      $code4=$x[$i]['available_quantity'];
                      // $code5=$x[$i]['reminder'];

                      echo '
                          <tr id="rowno'.$i.'">
                          <td>
                          '.$code.'
                          <input type="hidden" class="form-control form-control-sm" value ='.$code.' name="itemcode" required="required" readonly/>
                          </td>
                          <td>
                           '.$code1.'
                           <textarea  type="hidden" class="form-control form-control-sm" value = name="sales" required="required" style="display:none;" readonly>'.$code1.'</textarea>
                          </td>

                          <td>
                          <input type="text" class="form-control form-control-sm" value ='.$code2.' name="order" required="required"/>
                          </td>
                          <td>
                          '.$code4.'
                          <input type="hidden" class="form-control form-control-sm" value ='.$code4.' name="available_quantity" required="required" readonly/>
                          </td>
                          <td>';
                           $queryse ="SELECT * FROM dispachinfor WHERE ditem_code='$code' AND dsales='$code1'";
                           $resultse =mysqli_query($conn,$queryse);
                           $countse =mysqli_num_rows($resultse);
                           if($countse==0){
                            echo '<input type="submit" value="Delete" onclick="remove_items('.$i.')" class="btn btn-primary btn-sm"/>';
                           }
                           else
                           {
                             echo '<input type="submit" value="Delete" onclick="remove_items('.$i.')" class="btn btn-primary btn-sm" disabled/>';
                           }
                          echo '</td>';
                          echo '</tr>';
                  }

              ?>
            </tbody>
          </table>

          <div class="abtn">
             <input type="submit" name="editsup" value="Edit PO" class="btn btn-primary btn-sm" onclick="edit_items()"/>
             <input type="button" name="serchsubep"  onclick="goBack()"  value="Cancle" class="btn btn-primary btn-sm"/>
         </div>
      </form>
    </div>
    <br><br>
    
     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>  
 
</div>
</body>

</html>
<script type="text/javascript">
  function remove_items(no)
  {
    $('#rowno'+no).remove();
  }
</script>
<script type="text/javascript">

  var array=[];


   // jQuery methods go here...
   function edit_items()
   {

      var table = $("#uptableitems");

      table.find('tr:gt(0)').each(function (i) {

      var $tds = $(this).find('td'),
      item_code = $tds.eq(0).find("input").val();
      sales_dis = $tds.eq(1).find("textarea").val();
      orderq =$tds.eq(2).find("input").val();
      available_quantity = $tds.eq(3).find("input").val();

       //alert(item_code);
       var z={"item_code":item_code,"sales_dis":sales_dis,"orderq":orderq,"available_quantity":available_quantity};

       array.push({item_code:item_code,sales_dis:sales_dis,orderq:orderq,available_quantity:available_quantity});

     });
     console.log(JSON.stringify(array, null, 1));
       $('#itemjson').val(JSON.stringify(array));
        $('#itemEditForm').submit();

      // alert("Your Data "+cdate+" "+orderq+" "+JSON.stringify(array, null,1));
    }
</script>
<script type="text/javascript">
  function goBack() {
    window.history.back();
}
</script>
