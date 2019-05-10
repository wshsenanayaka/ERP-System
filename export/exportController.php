
<?php
    // Database Connection
    require '../include/config.php';
     
    // Logic Delete the Export Data use id start
    if (isset($_POST['remoeId']))
    {
        $remoeId = $_POST['remoeId'];
        $query ="DELETE FROM  exportdb WHERE id=?;";
        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
           echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"s",$remoeId);
            $result =  mysqli_stmt_execute($stmt);
        }
        
    }
    // Logic Delete the Export Data  use id end


    // Export Data form submit btn insert details php code strat
    if(isset($_POST['save']))
    {
        $supplier =mysqli_real_escape_string($conn ,$_POST['supplier']);
        $date =mysqli_real_escape_string($conn ,$_POST['date']);
        $proformaNo =mysqli_real_escape_string($conn ,$_POST['proformaNo']);
        $paymentCon =mysqli_real_escape_string($conn ,$_POST['paymentCon']);
        $situation =mysqli_real_escape_string($conn ,$_POST['situation']);

        date_default_timezone_set('Asia/Colombo');
        
        $date =date('Y-m-d');
        $time =date('H:i:s',time());

        $createdate =$date." (".$time.")";

        $query ="INSERT INTO exportdb (date,supplier,proformaNo,paymentCon,situation,createDate)  VALUES (?,?,?,?,?,?)";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ssssss",$date,$supplier,$proformaNo,$paymentCon,$situation,$createdate);
            $result =  mysqli_stmt_execute($stmt);
        }

    }

    // Past medical history form form submit btn update details php code strat
    if(isset($_POST['update']))
    {
        
        $id =mysqli_real_escape_string($conn ,$_POST['id']);
        $supplier =mysqli_real_escape_string($conn ,$_POST['supplier']);
        $date =mysqli_real_escape_string($conn ,$_POST['date']);
        $proformaNo =mysqli_real_escape_string($conn ,$_POST['proformaNo']);
        $paymentCon =mysqli_real_escape_string($conn ,$_POST['paymentCon']);
        $situation =mysqli_real_escape_string($conn ,$_POST['situation']);

        date_default_timezone_set('Asia/Colombo');

        $date =date('Y-m-d');
        $time =date('H:i:s',time());

        $updateDate =$date." (".$time.")";

        $query ="UPDATE  exportdb  SET date=?,supplier=?,proformaNo=?,paymentCon=?,situation=?,updateDate=? WHERE id=?;";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"sssssss",$date,$supplier,$proformaNo,$paymentCon,$situation,$updateDate,$id);
            $result =  mysqli_stmt_execute($stmt);
        }

    }





?>
