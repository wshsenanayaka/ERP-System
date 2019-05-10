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
      .dtable
      {
        width: 950px;
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
          <a href="#">Dispach</a>
        </li>
      </ol>
   
     <div class="table-responsive">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <table  class="table table-bordered table-striped" width="1500px">
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
          <input type="hidden" id="result"/>
          <?php
            require 'config.php';
            if(isset($_GET['dispach_id']))
             {
              $itemAvailable=array();//available items quantity with item code
              $sedit_id=$_GET['dispach_id'];
              $dsale=$_GET['dsale'];
              $code=$_GET['itemcode'];
               $order=$_GET['order'];
                $query ="SELECT itemcode as pitemcode , createdate as pcreatedate ,pid as ppid FROM purchaseorderinfor WHERE pid = '$sedit_id' ";

                $result = mysqli_query($conn ,$query); 
                // $count =mysqli_num_rows($result);
                // if($count==1){
                //     $row = mysqli_fetch_array($result);
                //      $x = json_decode("\"".$row["pitemcode"]."\"");
                //      $x = json_decode($x,true) ;

                //      for($i=0;$i<sizeof($x);$i++){
                //           $code=$x[$i]['item_code'];
                //           $code1=$x[$i]['quantity'];
                //           $query1="SELECT quantity,gsalesdisc FROM goodentry where item_code ='$code'";
                //           $result1 = mysqli_query($conn ,$query1); 
                //          // $row1 = mysqli_fetch_array($result1);
                //           //var_dump($row1[0]);
                //          // $itemAvailable[$x[$i]['item_code']] = $row1[0];
                //      }
                //  }
                 $query ="SELECT * FROM goodentry WHERE item_code='$code'";
                 $result =mysqli_query($conn,$query);
                 while ($row=mysqli_fetch_array($result)) 
                 {
                      $quantity =$row['quantity'];
                 }
                 
                  $queryad ="SELECT * FROM dispachinfor WHERE ditem_code='$code'";
                  $resultad =mysqli_query($conn,$queryad);
                   while ($row=mysqli_fetch_array($resultad)) 
                   {
                        $alreadyd =$row['alreadyd'];
                        
                   } 

                 echo '
                          <tr>
                           <td>'.$sedit_id.'</td>
                           <input type="hidden" name="po_number" value='.$sedit_id.'/>
                           <td>'.$code.'</td>
                           <input type="hidden" name="itemcode" value='.$code.'>
                          <td>'.$dsale.'</td>
                            <input type="hidden" name="dsales" value='.$dsale.'>
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
                           <td><input type="text" name="issue_qunatity" class="form-control form-control-sm"/></td>
                           <td><input type="text" name="sn" class="form-control form-control-sm"/></td>
                           <td>Pedning</td>
                           <td><select type="text" class="form-control form-control-sm" name="srq">
                              <option value="">Select</option>
                              <option value="Full Return">Full Return</option>
                              <option value="Partial Return">Partial Return</option>
                           </select> </td>
                           <td><input type="text" name="rq"  class="form-control form-control-sm"/></td>
                           <td><input type="date" name="ddate"  class="form-control form-control-sm" required="required"/></td>
                           <td><input type="submit" value ="Dispatch" name="dsave" class="btn btn-primary btn-sm" required="required"/></td>
                           <td><input type="submit" value ="Delete" onclick="goBack()"  name="dsave" class="btn btn-primary btn-sm" /></td>
                           
                          </tr>
                          ';
               }
             
          ?>
        </tbody>
        
        </table>
       </form>

      </div>
     </div>
     <br>
     <div class="col-sm-3">
        <input type="submit" value ="Go back" onclick="goBack()"  name="dsave" class="btn btn-primary btn-sm" />
     </div>
     </div>

     <?php
     if(isset($_POST['dsave']))
       {
         $state ="Pedning";
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
                  if($issue_qunatity!="" && $rq!="")
                  {
                     echo "<script type='text/javascript'>alert('Do one operation');window.location = \"aCreateNewAODSelect\"</script>"; 
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
                             echo "<script type='text/javascript'>alert('Is faild');window.location = \"aCreateNewAOD\"</script>";
                          }
                          else
                          {
                             echo "<script type='text/javascript'>alert('Successfully Dispatch');window.location = \"aCreateNewAOD\"</script>";    
                          }
                     }
                  }
                }
                else
                {
                  echo "<script type='text/javascript'>alert('Issue quantity greater than Order quantity');window.history.back();</script>"; 

                }
          }
          else
          {
            echo "<script type='text/javascript'>alert('Order quantity greater than available quantity');window.location = \"aCreateNewAODSelect\"</script>"; 
          }


     }

     ?>

  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>
 
</body>

</html>
<script type="text/javascript">
  function goBack() {
    window.history.back();
}
</script>

  
