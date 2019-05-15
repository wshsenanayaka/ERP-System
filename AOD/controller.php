<?php
    include('../include/check.php'); 


    if(isset($_POST['dispach_id'])){

    $dispach_id =mysqli_real_escape_string($conn ,$_POST['dispach_id']);
    $dsale =mysqli_real_escape_string($conn ,$_POST['dsale']);
    $itemcode =mysqli_real_escape_string($conn ,$_POST['itemcode']);
    $order =mysqli_real_escape_string($conn ,$_POST['order']);
    $sedit_id =mysqli_real_escape_string($conn ,$_POST['sedit_id']);

    $query_r ="SELECT * FROM  realgoodentry WHERE r_itemcode='$itemcode' AND r_salesdisc='$dsale'";
    $result_r =mysqli_query($conn,$query_r);

    while ($row_r=mysqli_fetch_array($result_r))
    {
            $quantity =$row_r['r_quantity'];
    }

    $queryad ="SELECT * FROM dispachinfor WHERE poNo='".$dispach_id."'";
    $resultad =mysqli_query($conn,$queryad);
    while ($row=mysqli_fetch_array($resultad))
    {
        $details =$row['details'];

        $x = json_decode($details, true);

        for($i=0;$i<sizeof($x);$i++)
         {
             $itemCodeGet=$x[$i]['itemCode'];
             $salesGet=$x[$i]['sales'];
             if($itemCodeGet == $itemcode && $salesGet ==$dsale){

                $alreadyd=$x[$i]['alreadyDispathedAmount'];
             }
        }
    }

    if(isset($alreadyd)){

        $alreadyDispathedAmount = $alreadyd;

    }else{
        $alreadyDispathedAmount = 0;
    }

    $null = "null";
    $selectView = true;



    $queryCheck ="SELECT * FROM aodView WHERE itemCode='$itemcode' AND sales='$dsale' AND poNo ='$dispach_id'";
    $resultCheck =mysqli_query($conn,$queryCheck);

        if(mysqli_num_rows($resultCheck) == 0)
        {

            $query ="INSERT INTO  aodView (poNo,itemCode,sales,alreadyDispathedAmount,orderQyt,availableQty,issueQty,serialNumber,status,returnQtyType,returnQty,dispatchedDate,selectView)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
                echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"sssssssssssss",$dispach_id,$itemcode,$dsale,$alreadyDispathedAmount,$order,$quantity,$null,$null,$null,$null,$null,$null,$selectView);
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

   

    if(isset($_POST['delete_id']))
    {
        $val =$_POST['delete_id'];
        $query ="DELETE FROM  aodView WHERE id=?;";

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
        $newArray = $_POST["newArray"];

        $date =date('Y-m-d');
        $createDate =$date;

        $query ="INSERT INTO  dispachinfor (poNo,details,createDate)  VALUES (?,?,?)";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"sss",$poNo,$newArray,$createDate);
            $result =  mysqli_stmt_execute($stmt);
            if($result){

                $dValue  = 1;
                $query ="DELETE FROM  aodView WHERE selectView=?;";

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


     // form submit btn update details php code strat
     if(isset($_POST['editID']))
     {
         $id =mysqli_real_escape_string($conn ,$_POST['editID']);
         $newUpdateArray = $_POST['newUpdateArray'];
        
         $query ="UPDATE dispachinfor  SET details=? WHERE id=?;";
 
         $stmt =mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$query))
         {
            echo "SQL Error";
         }
         else
         {
             mysqli_stmt_bind_param($stmt,"ss",$newUpdateArray,$id);
             $result =  mysqli_stmt_execute($stmt);
             if($result){
                echo "Successful update data";
             }
             
          }
 
     }
    //form submit btn update details php code end
   







    