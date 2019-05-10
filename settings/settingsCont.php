<?php
 
  include('../include/check.php');

  if(isset($_GET['sprop_id']))
  {
	  $_SESSION['sid']=$_GET['sprop_id'];
	  header("Location:settings");
  }
  
    if(isset($_POST['dupdate']))
     {
       $aid =mysqli_real_escape_string($conn ,$_POST['aid']);
       $tablename1 =mysqli_real_escape_string($conn ,$_POST['tablename1']);
       $abs =mysqli_real_escape_string($conn ,$_POST['abs']);
       $aba =mysqli_real_escape_string($conn ,$_POST['aba']);
       $amm =mysqli_real_escape_string($conn ,$_POST['amm']);
       $atrv =mysqli_real_escape_string($conn ,$_POST['atrv']);
       $aacco =mysqli_real_escape_string($conn ,$_POST['aacco']);

       $aadd1 =mysqli_real_escape_string($conn ,$_POST['aadd1']);
       $aadd2 =mysqli_real_escape_string($conn ,$_POST['aadd2']);

       $query ="UPDATE $tablename1  SET bs=?, ba=?,mm=?, trv =?,acco=?,add1=?,add2=? WHERE id=?;";

       $stmt =mysqli_stmt_init($conn);

       if(!mysqli_stmt_prepare($stmt,$query))
         {
           echo "SQL Error";

         }
         else
          {
              mysqli_stmt_bind_param($stmt,"ssssssss",$abs,$aba,$amm,$atrv,$aacco,$aadd1,$aadd2,$aid );
              $resultadd =  mysqli_stmt_execute($stmt);
          }

  	    $did =mysqli_real_escape_string($conn ,$_POST['did']);
  	    $tablename2 =mysqli_real_escape_string($conn ,$_POST['tablename2']);
        $depf =mysqli_real_escape_string($conn ,$_POST['depf']);
        $dsa =mysqli_real_escape_string($conn ,$_POST['dsa']);
        $dsl =mysqli_real_escape_string($conn ,$_POST['dsl']);
        $dded1 =mysqli_real_escape_string($conn ,$_POST['dded1']);
        $dded2 =mysqli_real_escape_string($conn ,$_POST['dded2']);



        $query ="UPDATE $tablename2  SET epf=?, sa=?,sl=?, ded1 =?,ded2=? WHERE id=?;";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
          {
            echo "SQL Error";
          }
          else
           {
               mysqli_stmt_bind_param($stmt,"ssssss",$depf,$dsa,$dsl,$dded1,$dded2,$did);
              $resultdd =  mysqli_stmt_execute($stmt);
                if(!$resultadd AND !$resultdd)
                {
                    echo "<script type='text/javascript'>alert('Update is faild');window.location = \"settings\"</script>";
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Update successfully');window.location = \"settings\"</script>";
                }
             }


      }
      // Company Delete php Code
      if (isset($_GET['cdelete_id']))
       {
           $id = $_GET['cdelete_id'];
           $query ="DELETE FROM  companyinfor WHERE id=?;";
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
                    echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"settings\"</script>";
                 }
                 else
                 {
                    echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"settings\"</script>";
                 }
           }
       }
       // Account Delete php Code
       if (isset($_GET['accdelete_id']))
        {
            $id = $_GET['accdelete_id'];
            $query ="DELETE FROM  accountinfor WHERE id=?;";
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
                     echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"settings\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"settings\"</script>";
                  }
            }
        }

?>
