<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">

      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
       .abtn
      {
      float: right;
      }
      .name
      {
        color: #043e77;
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
          Ordered Items of (Purchase order No : <?php if(isset($_GET['sedit_id'])){ echo $_GET['sedit_id'];}?>)
        </li>
      </ol>
    <div class="container">
       <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Item Code</th>
         <th>Sales desc</th>
         <th>Aleady dispatched</th>
         <th>Create date</th>
         <th>Order Quantity</th>
         <td> </td>
        </tr>
       </thead>
       <tbody>
        <input type="hidden" id="result"/>
      <?php
        require '../include/config.php';
        if(isset($_GET['sedit_id']))
         {
          $itemAvailable=array();//available items quantity with item code
          $sedit_id=$_GET['sedit_id'];
            $query ="SELECT itemcode as pitemcode , createdate as pcreatedate ,pid as ppid FROM purchaseorderinfor WHERE pid = '$sedit_id' ";

            $result = mysqli_query($conn ,$query);
            $count =mysqli_num_rows($result);
            if($count==1)
            {
                $row = mysqli_fetch_array($result);
                // $x = json_decode("\"".$row["pitemcode"]."\"");
                 $x="".$row["pitemcode"]."";
                 $x = json_decode($x,true);


                 for($i=0;$i<sizeof($x);$i++)
                 {
                      $code=$x[$i]['item_code'];
                      $code1=$x[$i]['sales_dis'];
                      $code2=$x[$i]['orderq'];
                      $query1="SELECT quantity,gsalesdisc FROM goodentry where item_code ='$code'";
                      $result1 = mysqli_query($conn ,$query1);
                      $row1 = mysqli_fetch_array($result1);
                      //var_dump($row1[0]);
                      $itemAvailable[$x[$i]['item_code']] = $row1[0];

                       $query2="SELECT alreadyd FROM dispachinfor where ditem_code ='$code' AND dsales='$code1' AND dpid='".$_GET['sedit_id']."' ORDER BY alreadyd DESC limit 1";
                       $result2=mysqli_query($conn ,$query2);
                       $row2 = mysqli_fetch_array($result2);

                          echo '
                            <tr>
                            <td>'.$code.'</td>
                            <td>'.$code1.'</td>
                            <td>';
                              if(isset($row2[0]))
                              {
                                echo $row2[0];
                              }
                              else
                              {
                                echo "0";
                              }
                          echo '
                            </td>
                            <td>'.$row['pcreatedate'].'</td>
                            <td>'.$code2.'</td>
                            <td><a href="aCreateNewAODSelect?dispach_id='.$row["ppid"].'&dsale='.$code1.'&itemcode='.$code.'&order='.$code2.'&sedit_id='.$sedit_id.'">Add to Dispatch</a></td>
                           </tr>';
                  }
             }
         }
      ?>
    </div>

    <div class="">
      <div class="table-responsive">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <table  class="table table-bordered table-striped table-responsive" width="1500px">
           <thead>
            <tr>
             <th>PO No</th>
             <th>Item code</th>
             <th>Sales</th>
             <th>Already dispathed amount</th>
             <th>Order quantity</th>
             <th>Available Qty</th>
             <th>Issue Quantity</th>
             <th>Serial number</th>
             <th>Status</th>
             <th>Return Qty</th>
             <th>Return Qty</th>
             <th>Dispatched date</th>
             <th></th>
              <th></th>
            </tr>
           </thead>
           <tbody>
          <div class="name">
          <b>Dispach Table<b><br><br>
          </div>
          <input type="hidden" id="result"/>
          <?php
            require '../include/config.php';
            if(isset($_GET['dispach_id']))
             {
              $itemAvailable=array();//available items quantity with item code
              $sedit_id=$_GET['dispach_id'];
              $dsale=$_GET['dsale'];
              $orgsales=$_GET['dsale'];
              $code=$_GET['itemcode'];
              $order=$_GET['order'];
                $query ="SELECT itemcode as pitemcode , createdate as pcreatedate ,pid as ppid FROM purchaseorderinfor WHERE pid = '$sedit_id' ";

                $result = mysqli_query($conn ,$query);



                 $query_r ="SELECT * FROM  realgoodentry WHERE r_itemcode='$code' AND r_salesdisc='$dsale'";
                 $result_r =mysqli_query($conn,$query_r);

                 while ($row_r=mysqli_fetch_array($result_r))
                 {
                      $quantity =$row_r['r_quantity'];

                 }

                  $queryad ="SELECT * FROM dispachinfor WHERE ditem_code='$code' AND  dsales='$dsale' AND dpid='".$_GET['sedit_id']."'";
                  $resultad =mysqli_query($conn,$queryad);
                   while ($row=mysqli_fetch_array($resultad))
                   {
                        $alreadyd =$row['alreadyd'];

                   }

                 echo '
                          <tr>
                           <td>'.$sedit_id.'</td>
                           <input type="hidden" name="po_number" value="'.$sedit_id.'"/>
                           <td>'.$code.'</td>
                           <input type="hidden" name="itemcode" value='.$code.'>
                           <td>'.$dsale.'</td>
                           <textarea type="hidden" style="display:none;"  name="dsales">'.$dsale.'</textarea>
                          ';?>
                            <td>
                              <?php
                              if(isset($alreadyd)){
                                  if($alreadyd!="")
                                  {
                                      echo $alreadyd;
                                  }
                                }
                                  else
                                  {
                                    echo "0";
                                  }


                              ?>
                            </td>
                 <?php
                 echo '
                           <td>'.$order.'</td>
                           <input type="hidden" name="doq" value='.$order.'>
                           <td>'.$quantity.'</td>
                           <input type="hidden" name="daq" value='.$quantity.'>
                           <td><input type="number" name="issue_qunatity" class="form-control form-control-sm" min="0" step="0"/></td>
                           <td><textarea type="text" name="sn" class="form-control form-control-sm"></textarea></td>
                           <td>Pedning</td>
                           <td><select type="text" class="form-control form-control-sm" name="srq">
                              <option value="">Select</option>
                              <option value="Full Return">Full Return</option>
                              <option value="Partial Return">Partial Return</option>
                           </select> </td>
                           <td><input type="number" name="rq"  class="form-control form-control-sm" min="0"/></td>
                           <td><input type="text" name="ddate"  class="form-control form-control-sm" value='.date("Y-m-d").' readonly/></td>
                           <td><input type="submit" value ="Dispatch" name="dsave" class="btn btn-primary btn-sm" required="required"/></td>
                           <td><input type="button" value ="Delete" onclick="goBack()"  name="dsave" class="btn btn-primary btn-sm" /></td>

                          </tr>

                          ';
               }

          ?>
        </tbody>

        </table>
       </form>
        <input type="button" value="Go Back" onclick="window.location='./aCreateNewAODCreate';" class="btn btn-primary btn-sm" />
      </div>
     </div>
     <br>

     </div>

     <?php
     if(isset($_POST['dsave']))
       {
          $issue_qunatity =mysqli_real_escape_string($conn,$_POST['issue_qunatity']);
          $rq =mysqli_real_escape_string($conn ,$_POST['rq']);
          if(strpos($issue_qunatity,".") !== false || strpos($rq,".") !== false)
          {
             echo "<script type='text/javascript'>alert('Not alive Decimal value as Qunatity');window.history.back();</script>";
          }
          else
          {
               $state ="Approved";
               $po_number =mysqli_real_escape_string($conn ,$_POST['po_number']);
               $itemcode =mysqli_real_escape_string($conn,$_POST['itemcode']);
               $dsales =mysqli_real_escape_string($conn ,$_POST['dsales']);
               $doq =mysqli_real_escape_string($conn ,$_POST['doq']);
               $daq =mysqli_real_escape_string($conn ,$_POST['daq']);

               $issue_qunatity =mysqli_real_escape_string($conn,$_POST['issue_qunatity']);
               $sn =mysqli_real_escape_string($conn ,$_POST['sn']);
               $srq =mysqli_real_escape_string($conn,$_POST['srq']);
               $rq =mysqli_real_escape_string($conn ,$_POST['rq']);
               $ddate =mysqli_real_escape_string($conn ,$_POST['ddate']);

               $queryad ="SELECT * FROM dispachinfor WHERE ditem_code='$itemcode' AND dsales='$dsales'";
               $resultad =mysqli_query($conn,$queryad);
               $count =mysqli_num_rows($resultad);
               if($count>0)
               {
                  while ($row=mysqli_fetch_array($resultad))
                         {
                              $alreadyd =$row['alreadyd'];

                         }
               }
               else
               {
                  $alreadyd=0;
               }

               if($daq>=$doq)
               {
                     if($doq>=$issue_qunatity)
                      {

                          if($doq>=$alreadyd)
                          {
                            if($issue_qunatity!="" && $rq!="")
                            {
                               echo "<script type='text/javascript'>alert('Do one operation'); window.history.back();</script>";
                            }
                            else
                            {
                              $query ="INSERT INTO  dispachinfor ( dpid, ditem_code, dsales,  alreadyd, doq,  daq ,diq,dsn, status,dsrq,drq,ddate)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

                              $stmt =mysqli_stmt_init($conn);
                              if(!mysqli_stmt_prepare($stmt,$query))
                              {
                                 echo "SQL Error";
                              }
                              else
                              {
                                  mysqli_stmt_bind_param($stmt,"ssssssssssss",$po_number,$itemcode,$dsales,$alreadyd,$doq, $daq,$issue_qunatity,$sn,$state,$srq,$rq,$ddate);
                                  $result =  mysqli_stmt_execute($stmt);
                                   if(!$result)
                                    {
                                       echo "<script type='text/javascript'>alert('Is faild');window.history.back();</script>";
                                    }
                                    else
                                    {
                                       echo "<script type='text/javascript'>alert('Successfully Dispatch');window.history.back();</script>";
                                    }
                               }
                            }
                          }
                          else
                          {

                            echo "<script type='text/javascript'>alert('Already dispatch quantity greater than Order quantity');window.history.back();</script>";
                          }
                      }
                      else
                      {
                        echo "<script type='text/javascript'>alert('Issue quantity greater than Order quantity');window.history.back();</script>";

                      }
                }
                else
                {
                  echo "<script type='text/javascript'>alert('Order quantity greater than available quantity');window.history.back();</script>";
                }
          }


     }

     ?>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

   
  </div>
</body>

</html>
<script type="text/javascript">
  function goBack() {
    window.history.back();
}
</script>
