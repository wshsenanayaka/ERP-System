<?php
      // $_SESSION['id'] =null;
       require '../include/config.php';
       $i=1;
      if(isset($_POST['addsup']))
      {
        $name =mysqli_real_escape_string($conn ,$_POST['name']);
        $phone =mysqli_real_escape_string($conn ,$_POST['phone']);
        $email =mysqli_real_escape_string($conn ,$_POST['email']);
        $regdate =mysqli_real_escape_string($conn ,$_POST['regdate']);

        $query ="INSERT INTO  customerinfor (name ,phone,email, reg_date)  VALUES (?,?,?,?)";

         $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
          else
            {

               mysqli_stmt_bind_param($stmt,"ssss",$name,$phone,$email,$regdate);
               $result =mysqli_stmt_execute($stmt);
               if(!$result)
                {
                   echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"aRegisterNewCustomer\"</script>";
                }
                else
                {

                  $queryse ="SELECT * FROM customerinfor WHERE name='$name' AND phone='$phone' AND email='$email' AND reg_date='$regdate'";
                  $resultse =mysqli_query($conn,$queryse);
                  while ($rowse=mysqli_fetch_array($resultse))
                   {
                      $cid =$rowse['cid'];
                   }
                   echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"aRegisterNewCustomerAddSite?prop_id=".$cid."\"</script>";
                }
            }


         }
      if(isset($_POST['rupdate']))
       {

        $id =mysqli_real_escape_string($conn ,$_POST['id']);
        $name =mysqli_real_escape_string($conn ,$_POST['name']);
        $phone =mysqli_real_escape_string($conn ,$_POST['phone']);
        $email =mysqli_real_escape_string($conn ,$_POST['email']);
        $regdate =mysqli_real_escape_string($conn ,$_POST['regdate']);

          $query ="UPDATE  customerinfor  SET name=?,phone=?,email=?,reg_date=? WHERE cid=?;";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"sssss",$name,$phone,$email,$regdate,$id);
                $result =  mysqli_stmt_execute($stmt);
                if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Update is faild');window.location = \"aRegisterNewCustomer\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Update successfully');window.location = \"aRegisterNewCustomerAddSiteEdit?update_id=".$id."\"</script>";
                  }
             }

       }
       if (isset($_POST['removeID']))
         {
            $id = $_POST['removeID'];

            $query ="DELETE FROM  customerinfor WHERE cid=?;";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
            else
            {
               mysqli_stmt_bind_param($stmt,"s",$id);
               $result =  mysqli_stmt_execute($stmt);
                  if(!$result)
                  {
                     echo "Delete is faild";
                  }
                  else
                  {
                     echo "Delete successfully";
                  }
             }

          }

          if(isset($_GET['rupdate_id']))
          {
                 $id =$_GET['rupdate_id'];
                 $address =$_GET['address'];
                 $site =$_GET['site'];
                 echo $id.$address.$site;
                 $queryup ="UPDATE caddsiteinfor SET  address='".$address."',site ='".$site."' WHERE id ='".$id."'";
                 $resultup =mysqli_query($conn,$queryup);
                 if(!$resultup)
                 {

                 }
                 else
                 {
                  // echo "<script type='text/javascript'>window.history.back();</script>";

                 }
          }
          if (isset($_GET['rdelete_id']))
            {
                 $id = $_GET['rdelete_id'];

                 $query ="DELETE FROM  caddsiteinfor WHERE id=?;";
                 $stmt =mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$query))
                 {
                    echo "SQL Error";
                 }
                 else
                 {
                     mysqli_stmt_bind_param($stmt,"s",$id);
                     $result =  mysqli_stmt_execute($stmt);
                     echo "<script type='text/javascript'>window.history.back();</script>";
                    if(!$result)
                     {
                        echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"aRegisterNewCustomerAddSiteEdit\"</script>";
                     }

                 }

             }

        ?>
