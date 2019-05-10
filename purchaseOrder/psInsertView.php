<?php

    include('../include/check.php');

	if(isset($_POST['selectID']))
	{

			$selectID =$_POST['selectID'];

			$query ="SELECT * FROM realgoodentry WHERE id='$selectID'";
			$result =mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result))
			{
					$r_itemcode =  $row['r_itemcode'];
					$r_salesdisc =  $row['r_salesdisc'];
					$r_quantity =  $row['r_quantity'];
			}

			date_default_timezone_set('Asia/Colombo');

			$date =date('Y-m-d');
			$time =date('H:i:s',time());

			$createDate =$date." (".$time.")";
		
		
			$query1 ="INSERT INTO  temp (item_code,sales_dis,create_date,quantity,available_quantity)  VALUES ('$r_itemcode','$r_salesdisc','$createDate','','$r_quantity')";
			$result1=mysqli_query($conn,$query1);

			}

?>
