<?php
       require '../include/config.php';

      if(isset($_POST['addsup']))
      {
         $name =mysqli_real_escape_string($conn,$_POST['name']);
         $address =mysqli_real_escape_string($conn ,$_POST['address']);
         $phone =mysqli_real_escape_string($conn,$_POST['phone']);
         $email =mysqli_real_escape_string($conn ,$_POST['email']);
         $date =mysqli_real_escape_string($conn ,$_POST['date']);

         $query ="INSERT INTO  supplierinfor (name ,address,phone,email, date_value)  VALUES (?,?,?,?,?)";

         $stmt =mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
          else
            {

               mysqli_stmt_bind_param($stmt,"sssss",$name,$address,$phone,$email,$date);
               $result =mysqli_stmt_execute($stmt);
               if(!$result)
                {
                   echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"addnewsupplier\"</script>";
                }
                else
                {
                   echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"addnewsupplier\"</script>";
                }
            }
      }
      if(isset($_POST['supdate']))
       {
         $id =mysqli_real_escape_string($conn,$_POST['id']);
         $name =mysqli_real_escape_string($conn,$_POST['name']);
         $address =mysqli_real_escape_string($conn ,$_POST['address']);
         $phone =mysqli_real_escape_string($conn,$_POST['phone']);
         $email =mysqli_real_escape_string($conn ,$_POST['email']);
         $date =mysqli_real_escape_string($conn ,$_POST['date']);


          $query ="UPDATE  supplierinfor  SET name=?,address=?,phone=?,email=?, date_value=? WHERE id=?;";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"ssssss",$name,$address,$phone,$email,$date,$id);
                $result =  mysqli_stmt_execute($stmt);
                if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Update is faild');window.location = \"addnewsupplier\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Update successfully');window.location = \"addnewsupplier\"</script>";
                  }
             }

       }
       if (isset($_POST['removeID']))
         {
            $id = $_POST['removeID'];
         
            $query ="DELETE FROM  supplierinfor WHERE id=?;";

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
    ?>
