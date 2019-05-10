
<?php
    // Database Connection
    include('../include/check.php'); 
     
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
        $no =mysqli_real_escape_string($conn ,$_POST['no']);
        $date =mysqli_real_escape_string($conn ,$_POST['date']);
        $customerName =mysqli_real_escape_string($conn ,$_POST['customerName']);
        $salesSelect =mysqli_real_escape_string($conn ,$_POST['salesSelect']);
        $description =mysqli_real_escape_string($conn ,$_POST['description']);
        $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
        $availableQuantity =mysqli_real_escape_string($conn ,$_POST['availableQuantity']);

        date_default_timezone_set('Asia/Colombo');
        
        $date =date('Y-m-d');
        $time =date('H:i:s',time());

        $createdate =$date." (".$time.")";

        $query ="INSERT INTO aodManual (no,date,customerName,salesDisc,description,quantity,createDate)  VALUES (?,?,?,?,?,?,?)";

        $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query))
        {
            echo "SQL Error";
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"sssssss",$no,$date,$customerName,$salesSelect,$description,$quantity,$createdate);
            $result =  mysqli_stmt_execute($stmt);

            $net =$availableQuantity-$quantity;
            $queryiq1 ="UPDATE realgoodentry SET  r_quantity='$net' WHERE 	r_purchasedisc='$description' AND  r_salesdisc='$salesSelect'";
            mysqli_query($conn,$queryiq1);
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

    // Auto Completed Search php  code Diagnosis
    if(isset($_POST["dicdcode_val"]))
    {

        $output = '';
        $query = "SELECT  DISTINCT name FROM  customerinfor WHERE name LIKE '%".$_POST["dicdcode_val"]."%'";
        $result = mysqli_query($conn, $query);
        $output = '<ul class="list-unstyled" id="customerNameUL" style="max-height: 91px;">';

        while($row = mysqli_fetch_array($result))
        {
                $output .= '<li id="'.$row["name"].'">'.$row["name"].'</li>';
        }

        $output .= '</ul>';
        echo $output;
    }
?>


