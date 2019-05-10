<?php

      include('../include/check.php'); 
      error_reporting(0);
    
      if(isset($_POST['addsup']))
      {
        $purchaseid =mysqli_real_escape_string($conn ,$_POST['purchaseid']);

        $sql ="SELECT * FROM purchaseorderinfor WHERE pid = '$purchaseid'";
        $result=mysqli_query($conn,$sql);
        $count =mysqli_num_rows($result);

        if($count!=0){
           echo "<script type='text/javascript'>alert('Purchase ID already exist');window.location = \"aCreateNewPurchaseOrderCreate\"</script>";
        }
        else {

          $purchaseid =mysqli_real_escape_string($conn ,$_POST['purchaseid']);
          $customerorderno =mysqli_real_escape_string($conn ,$_POST['customerorderno']);
          $customername =mysqli_real_escape_string($conn ,$_POST['customername']);
          $customeraddress =mysqli_real_escape_string($conn ,$_POST['customeraddress']);
          $customersite =mysqli_real_escape_string($conn ,$_POST['customersite']);
          $item_code =mysqli_real_escape_string($conn ,$_POST['myitems']);
        //  $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
          $createby =mysqli_real_escape_string($conn ,$_POST['createby']);
          $createdate =mysqli_real_escape_string($conn ,$_POST['createdate']);
          $podate =mysqli_real_escape_string($conn ,$_POST['podate']);
          $poreceiveddate =mysqli_real_escape_string($conn ,$_POST['poreceiveddate']);
          $deadlinedate =mysqli_real_escape_string($conn ,$_POST['deadlinedate']);

          $query ="INSERT INTO  purchaseorderinfor (pid,customerorderno ,customername,customeraddress, customersite,itemcode,createby,createdate,podate,poreceiveddate,deadlinedate)  VALUES (?,?,?,?,?,?,?,?,?,?,?)";

           $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {

                 mysqli_stmt_bind_param($stmt,"sssssssssss",$purchaseid,$customerorderno,$customername,$customeraddress,$customersite,$item_code,$createby,$createdate,$podate,$poreceiveddate,$deadlinedate);
                 $result =mysqli_stmt_execute($stmt);

                 $queryse ="SELECT * FROM purchaseorderinfor WHERE customerorderno='$customerorderno'";
                  $resultse =mysqli_query($conn,$queryse);
                  while ($row=mysqli_fetch_array($resultse))
                  {
                      $pid =$row[0];
                  }
                  // echo $pid;

                   if(!$result)
                    {
                       echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"aCreateNewPurchaseOrderCreate\"</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"copyp?pid=".$pid."\"</script>";
                    }
              }
        }



      }


         if(isset($_POST['myitemjson']))
         {
             $test=$_POST['myitemjson'];
            //var_dump(json_decode($test));
             $query ="UPDATE  purchaseorderinfor  SET  itemcode='$test' WHERE pid='".$_POST['pid']."'";
             $result =mysqli_query($conn ,$query);

             $queryde ="DELETE FROM temp WHERE id IS NOT NULL";
             $result1 =mysqli_query($conn ,$queryde);

             if(!$result && $result1)
                    {
                       echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"aCreateNewPurchaseOrder\"</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"aCreateNewPurchaseOrder\"</script>";
                    }

         }
         if(isset($_POST['editsup']))
         {
              $pid =mysqli_real_escape_string($conn ,$_POST['id']);
              $customerorderno =mysqli_real_escape_string($conn ,$_POST['customerorderno']);
              $customername =mysqli_real_escape_string($conn ,$_POST['customername']);
              $customeraddress =mysqli_real_escape_string($conn ,$_POST['customeraddress']);
              $customersite =mysqli_real_escape_string($conn ,$_POST['customersite']);

              $item_code =$_POST['itemjson'];
             // $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
              $createby =mysqli_real_escape_string($conn ,$_POST['createby']);
              $createdate =mysqli_real_escape_string($conn ,$_POST['createdate']);
              $podate =mysqli_real_escape_string($conn ,$_POST['podate']);
              $poreceiveddate =mysqli_real_escape_string($conn ,$_POST['poreceiveddate']);
              $deadlinedate =mysqli_real_escape_string($conn ,$_POST['deadlinedate']);

              $query ="UPDATE  purchaseorderinfor  SET customerorderno=?,customername=?,customeraddress=?,customersite=?,itemcode =?, createby=?, createdate=?, podate=?, poreceiveddate=? ,deadlinedate=? WHERE pid=?;";

              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else
              {
                   mysqli_stmt_bind_param($stmt,"sssssssssss",$customerorderno,$customername,$customeraddress,$customersite ,$item_code,$createby,$createdate,$podate,$poreceiveddate,$deadlinedate,$pid);
                  $result =  mysqli_stmt_execute($stmt);
                  if(!$result)
                    {
                       echo "<script type='text/javascript'>alert('Update is faild');window.location = \"aCreateNewPurchaseOrder\"</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'>alert('Update successfully');window.location = \"aCreateNewPurchaseOrder\"</script>";
                    }
               }

         }
         if(isset($_POST['pudelete_id']))
         {
             $delvalue =$_POST['pudelete_id'];
             $querypd ="DELETE FROM  purchaseorderinfor WHERE pid ='".$delvalue."'";
             $resulpd =mysqli_query($conn ,$querypd);

             if(!$resulpd)
              {
                 echo "Delete is faild";
              }
              else
              {
                 echo "Delete successfully";
              }

         }

?>
    