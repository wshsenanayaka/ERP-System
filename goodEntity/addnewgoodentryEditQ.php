<?php

  include('../include/check.php'); 

  if(isset($_POST['salesdisc']))
  {
    $val= $_POST['salesdisc'];
    $query1 ="SELECT * FROM realgoodentry WHERE r_salesdisc='$val'";

    $result =mysqli_query($conn,$query1);
     while($row = mysqli_fetch_array($result))
     {
        $quantity = $row['r_quantity'];

     }
     if(isset($quantity)){
      echo $quantity;
     }
     else {
       echo "0";
     }
  }




 ?>
