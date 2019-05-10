<?php
       require '../include/config.php';

       if(isset($_POST['savebtn']))
       {
             $item_code =mysqli_real_escape_string($conn,$_POST['item_code']);
             $purchasedisc =mysqli_real_escape_string($conn ,$_POST['purchasedisc']);
          
             $itemcategory =mysqli_real_escape_string($conn,$_POST['itemcategory']);
             $reorderlevel =mysqli_real_escape_string($conn,$_POST['reorderlevel']);
             $subitemreminder =mysqli_real_escape_string($conn,$_POST['subitemreminder']);

             $querycheck ="SELECT * FROM iteminfor WHERE  item_code='$item_code'";

             $resultcheck=mysqli_query($conn,$querycheck);
             $count =mysqli_num_rows($resultcheck);

           if($count==0)
           {

             $query ="INSERT INTO   iteminfor (item_code,purchasedisc, itemcategory,reorderlevel,subitemreminder)  VALUES (?,?,?,?,?)";

             $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"sssss",$item_code,$purchasedisc,$itemcategory,$reorderlevel,$subitemreminder);
                 $result =  mysqli_stmt_execute($stmt);
                 $number =count($_POST["name"]);
                   //echo $number;
                   if($number>0)
                   {
                    $objCollection =array();
                      for($i=0;$i<$number;$i++)
                      {
                          if(trim($_POST["name"][$i])!=''){
                            $obj['salesdisc']=$_POST["name"][$i];
                             array_push($objCollection, $obj);
                          }
                      }
                      $saledis =json_encode($objCollection);
                      $query ="UPDATE iteminfor  SET salesdisc0='".$saledis."'  WHERE item_code='".$item_code."';";
                      $result =mysqli_query($conn,$query);
                      //var_dump($objCollection);

                   }
                  if(!$result)
                   {
                      echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"addchecklistitem\"</script>";
                   }
                  else
                   {
                       echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"addchecklistitem\"</script>";
                   }
              }
            }
            else
            {
               echo "<script type='text/javascript'>alert('Item Code Already Exit Try Again');window.location = \"addchecklistitemCreate\"</script>";
            }
       }

       if(isset($_POST['cupdate']))
       {
         $id =mysqli_real_escape_string($conn,$_POST['id']);
   	   $item_code =mysqli_real_escape_string($conn,$_POST['item_code']);
         $purchasedisc =mysqli_real_escape_string($conn ,$_POST['purchasedisc']);
         $itemcategory =mysqli_real_escape_string($conn,$_POST['itemcategory']);
         $reorderlevel =mysqli_real_escape_string($conn,$_POST['reorderlevel']);
         $subitemreminder =mysqli_real_escape_string($conn,$_POST['subitemreminder']);
         $salesdisc =$_POST['itemjson'];

         $query ="UPDATE  iteminfor  SET item_code=?,purchasedisc=?,itemcategory=?,reorderlevel=?,subitemreminder=? ,salesdisc0=? WHERE id=?;";

         $stmt =mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$query))
         {
            echo "SQL Error";
         }
         else
         {
               mysqli_stmt_bind_param($stmt,"sssssss",$item_code,$purchasedisc,$itemcategory,$reorderlevel,$subitemreminder,$salesdisc,$id);
               $result =  mysqli_stmt_execute($stmt);
               if(!$result)
               {
                  echo "Update is faild";
               }
               else
               {
                  echo "Update successfully";
               }
         }

       }

       if (isset($_GET['edit_id']))
         {
            $id = $_GET['edit_id'];
          
            $query ="DELETE FROM  iteminfor WHERE id=?;";

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
                     echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"addchecklistitem\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"addchecklistitem\"</script>";
                 }
            }
          }

    ?>
