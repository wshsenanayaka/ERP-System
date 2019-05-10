<?php
   require 'config.php';
   if (isset($_GET['edit_id'])) 
   {
      $id = $_GET['edit_id'];
      $query ="DELETE FROM   purchaseorderinfor WHERE pid=?;";
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
               echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"aCreateNewPurchaseOrder\"</script>";
            }
            else
            {
               echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"aCreateNewPurchaseOrder\"</script>";    
            }
      }  
      
   } 


?>
