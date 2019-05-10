<?php

   include('../include/check.php');
   
   if(isset($_POST['delete_id']))
   {
      $val =$_POST['delete_id'];
      
      $query ="DELETE FROM  temp WHERE id=?;";

      $stmt =mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$query))
      {
         echo "SQL Error";
      }
      else
      {
            mysqli_stmt_bind_param($stmt,"s",$val);
            $result =  mysqli_stmt_execute($stmt);
      }  
   }
?>