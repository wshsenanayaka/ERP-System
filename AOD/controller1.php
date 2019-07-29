<?php
    include('../include/check.php'); 

    if(isset($_POST['itemCode'])){

    $itemCode =mysqli_real_escape_string($conn ,$_POST['itemCode']);
    $salesDisc =mysqli_real_escape_string($conn ,$_POST['salesDisc']);

    $selectView = true;

    $queryCheck ="SELECT * FROM aodViewM WHERE itemCode='$itemCode' AND sales='$salesDisc'";
    $resultCheck =mysqli_query($conn,$queryCheck);

        if(mysqli_num_rows($resultCheck) == 0)
        {
            $query ="INSERT INTO  aodViewM (itemCode,sales,selectView)  VALUES (?,?,?)";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
                echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"sss",$itemCode,$salesDisc,$selectView);
                $result =  mysqli_stmt_execute($stmt);
                if($result){
                    echo "Successful Insert data";
                }else{
                    echo $result;
                }
            }

        }else{
            echo "Data Already Exit";
        }

    }

    if(isset($_POST['deleteId']))
    {
        $val =$_POST['deleteId'];
        $query ="DELETE FROM  aodViewM WHERE id=?;";

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


    if(isset($_POST['newArray'])){

        $poNo =mysqli_real_escape_string($conn ,$_POST['poNo']);
        $customerName =mysqli_real_escape_string($conn ,$_POST['customerName']);
        $other =mysqli_real_escape_string($conn ,$_POST['other']);

        $details = $_POST["newArray"];

        $date =date('Y-m-d');
        $createDate =$date;

        $query ="INSERT INTO  aodManual (pno,customerName,other,details,createDate)  VALUES (?,?,?,?,?)";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"sssss",$poNo,$customerName,$other,$details,$createDate);
            $result =  mysqli_stmt_execute($stmt);
            if($result){

                $dValue  = 1;
                $query ="DELETE FROM  aodViewM WHERE selectView=?;";

                $stmt =mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$query))
                {
                    echo "SQL Error";
                }
                else
                {
                    mysqli_stmt_bind_param($stmt,"s",$dValue);
                    $result =  mysqli_stmt_execute($stmt);

                    if($result){
                        echo "Successful Insert data";
                    }
                }  

            }else{
                echo "Error  data";
            }
        }

    }


    //  // form submit btn update details php code strat
     if(isset($_POST['editID']))
     {
         $id =mysqli_real_escape_string($conn ,$_POST['editID']);

         $poNo =mysqli_real_escape_string($conn ,$_POST['poNo']);
         $customerName =mysqli_real_escape_string($conn ,$_POST['customerName']);   
         $other =mysqli_real_escape_string($conn ,$_POST['other']);

         $newUpdateArray = $_POST['newUpdateArray'];
        
         $query ="UPDATE aodManual  SET pno=?,customerName=?,other=?,details=? WHERE id=?;";
 
         $stmt =mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$query))
         {
            echo "SQL Error";
         }
         else
         {
             mysqli_stmt_bind_param($stmt,"sssss",$poNo,$customerName,$other,$newUpdateArray,$id);
             $result =  mysqli_stmt_execute($stmt);
             if($result){
                echo "Successful update data";
             }else{
                 echo "Erorr";
             }
             
          }
 
     }
    //form submit btn update details php code end
   







    