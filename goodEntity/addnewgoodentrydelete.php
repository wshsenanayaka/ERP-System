<?php

 include('../include/check.php');

if (isset($_GET['delete_id'])) 
 {
      $id = $_GET['delete_id'];
      $query ="DELETE FROM   goodentry WHERE purchaseid=?;";
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
                 echo "<script type='text/javascript'>window.history.back();</script>";
              }
              else
              {
                 echo "<script type='text/javascript'>window.history.back();</script>";	
              }
        }  
	            
 }
?>