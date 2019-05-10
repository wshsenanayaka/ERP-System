<?php
   // database connection
   require '../include/config.php';
   // Logic Delete the supplied report use id start
   if (isset($_POST['delete_id']))
    {
        $id = $_POST['delete_id'];
        $query ="DELETE FROM  suppliedreportinfor WHERE id=?;";
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
    // Logic Delete the supplied report use id end

 ?>
