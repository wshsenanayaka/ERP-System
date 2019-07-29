<?php

  include('../include/check.php');

  if($_SESSION['email'] == "admin@gmail.com" ){
		$userRole = "admin";
  }else{
	   $userRole = $_SESSION['email'];
  }
?>

 <?php

      if(isset($_POST['addsup']))
      {
      	$quantity =mysqli_real_escape_string($conn ,$_POST['qu']);
      	if($quantity>=0)
      	{
         $suppliername =mysqli_real_escape_string($conn,$_POST['sn']);
         $supplierinvoiceno	 =mysqli_real_escape_string($conn ,$_POST['sno']);
         $item_code =mysqli_real_escape_string($conn,$_POST['ic']);
         $purchasedisc =mysqli_real_escape_string($conn ,$_POST['pd']);
         $salesdisc =mysqli_real_escape_string($conn ,$_POST['salesdisc']);
         $quantity =mysqli_real_escape_string($conn ,$_POST['qu']);

         $query_check ="SELECT * FROM realgoodentry WHERE r_itemcode='$item_code' AND r_purchasedisc='$purchasedisc' AND r_salesdisc='$salesdisc'";
         $result_check =mysqli_query($conn,$query_check);
			$count_r =mysqli_num_rows($result_check);
			

			$currentDate = date("Y-m-d");

         if($count_r==0)
         {
           $query_r ="INSERT INTO  realgoodentry (r_itemcode,r_purchasedisc,r_salesdisc,r_quantity)  VALUES ('$item_code','$purchasedisc','$salesdisc','$quantity')";
           $result_r =mysqli_query($conn,$query_r);
         }
         else
         {
            while ($row_r=mysqli_fetch_array($result_check))
            {
              $id =$row_r['id'];
              $r_quantity =$row_r['r_quantity'];

            }
            $new_quantity =$r_quantity+$quantity;
            $query_u ="UPDATE realgoodentry  SET r_itemcode='$item_code',r_purchasedisc='$purchasedisc',r_salesdisc='$salesdisc',r_quantity='$new_quantity' WHERE id='$id'";
            $result_u =mysqli_query($conn,$query_u);
         }
         $query ="INSERT INTO  goodentry (suppliername ,supplierinvoiceno,item_code,purchasedisc,gsalesdisc, quantity ,createDate ,createBy)  VALUES (?,?,?,?,?,?,?,?)";

	       $stmt =mysqli_stmt_init($conn);
	        if(!mysqli_stmt_prepare($stmt,$query))
	          {
	             echo "SQL Error";
	          }
	        else
	          {

	             mysqli_stmt_bind_param($stmt,"ssssssss",$suppliername,$supplierinvoiceno,$item_code,$purchasedisc,$salesdisc,$quantity,$userRole,$currentDate);
	             $result =mysqli_stmt_execute($stmt);
	             if(!$result)
	              {
	                 echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"addnewgoodentry\"</script>";
	              }
	              else
	              {
	                 echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"addnewgoodentry\"</script>";
	              }
	          }
	       }
	       else
	       {
	       	  echo "<script type='text/javascript'>alert('Not alive minus value');window.history.back();</script>";
	       }

        }
        if(isset($_POST['addmore']))
	      {
				  $quantity =mysqli_real_escape_string($conn ,$_POST['qu']);
				  
				  $currentDate = date("Y-m-d");

              if($quantity>=0)
              {

			         $suppliername =mysqli_real_escape_string($conn,$_POST['sn']);
			         $supplierinvoiceno	 =mysqli_real_escape_string($conn ,$_POST['sno']);
			         $item_code =mysqli_real_escape_string($conn,$_POST['ic']);
			         $purchasedisc =mysqli_real_escape_string($conn ,$_POST['pd']);
			         $salesdisc =mysqli_real_escape_string($conn ,$_POST['salesdisc']);
			         $quantity =mysqli_real_escape_string($conn ,$_POST['qu']);

               $query_check ="SELECT * FROM realgoodentry WHERE r_itemcode='$item_code' AND r_purchasedisc='$purchasedisc' AND r_salesdisc='$salesdisc'";
               $result_check =mysqli_query($conn,$query_check);
               $count_r =mysqli_num_rows($result_check);
               if($count_r==0)
               {
                 $query_r ="INSERT INTO  realgoodentry (r_itemcode,r_purchasedisc,r_salesdisc,r_quantity)  VALUES ('$item_code','$purchasedisc','$salesdisc','$quantity')";
                 $result_r =mysqli_query($conn,$query_r);
               }
               else
               {
                  while ($row_r=mysqli_fetch_array($result_check))
                  {
                    $id =$row_r['id'];
                    $r_quantity =$row_r['r_quantity'];

                  }
                  $new_quantity =$r_quantity+$quantity;
                  $query_u ="UPDATE realgoodentry  SET r_itemcode='$item_code',r_purchasedisc='$purchasedisc',r_salesdisc='$salesdisc',r_quantity='$new_quantity' WHERE id='$id'";
                  $result_u =mysqli_query($conn,$query_u);
               }

			         $query ="INSERT INTO  goodentry (suppliername ,supplierinvoiceno,item_code,purchasedisc,gsalesdisc, quantity,createDate,createBy)  VALUES (?,?,?,?,?,?,?,?)";

				       $stmt =mysqli_stmt_init($conn);
				        if(!mysqli_stmt_prepare($stmt,$query))
				          {
				             echo "SQL Error";
				          }
				        else
				          {

				             mysqli_stmt_bind_param($stmt,"ssssssss",$suppliername,$supplierinvoiceno,$item_code,$purchasedisc,$salesdisc,$quantity,$userRole,$currentDate);
				             $result =mysqli_stmt_execute($stmt);
				             if(!$result)
				              {
				                 echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"addnewgoodentryCreate\"</script>";
				              }
				              else
				              {
				                 echo "<script type='text/javascript'>window.location = \"addnewgoodentryCreate?gname=".$suppliername."&gsupno=".$supplierinvoiceno."\"</script>";
				              }
				          }
				   }
				   else
				   {
				   	 echo "<script type='text/javascript'>alert('Not alive minus value');window.history.back();</script>";
				   }

	        }
         if (isset($_GET['edit_id']))
         {
              $id = $_GET['edit_id'];
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
	                     echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"addnewgoodentry\"</script>";
	                  }
	                  else
	                  {
	                     echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"addnewgoodentry\"</script>";
	                  }
	            }

          }

          if (isset($_POST['update']))
          {
          	$quantity =mysqli_real_escape_string($conn ,$_POST['qu']);
          	if($quantity>=0)
          	{
	          $purchaseid =mysqli_real_escape_string($conn,$_POST['pid']);
	          $suppliername =mysqli_real_escape_string($conn,$_POST['sn']);
	          $supplierinvoiceno =mysqli_real_escape_string($conn ,$_POST['sno']);
	          $item_code =mysqli_real_escape_string($conn,$_POST['ic']);
            $purchasedisc =mysqli_real_escape_string($conn ,$_POST['pd']);
            $salesdisc =mysqli_real_escape_string($conn ,$_POST['salesdisc']);
          //  echo $purchasedisc;



		     $query ="SELECT * FROM goodentry WHERE purchaseid='$purchaseid'";
		     $result =mysqli_query($conn,$query);
		     while ($row=mysqli_fetch_array($result))
		     {
		         $quantity1 =$row['quantity'];
		     }
             $quantitynew =$quantity+$quantity1;
	           $query ="UPDATE  goodentry  SET suppliername=?,supplierinvoiceno=?,item_code=?,purchasedisc=?,gsalesdisc=?,quantity=? WHERE purchaseid=?;";

	            $stmt =mysqli_stmt_init($conn);
	            if(!mysqli_stmt_prepare($stmt,$query))
	            {
	               echo "SQL Error";
	            }
	            else
	            {
	                mysqli_stmt_bind_param($stmt,"sssssss",$suppliername,$supplierinvoiceno,$item_code,$purchasedisc,$salesdisc,$quantitynew,$purchaseid);
	                $result =  mysqli_stmt_execute($stmt);
	                if(!$result)
	                  {
	                    // echo "<script type='text/javascript'>alert('Update is faild');window.location = \"addnewgoodentry\"</script>";
	                  }
	                  else
	                  {
	                    // echo "<script type='text/javascript'>alert('Update successfully');window.location = \"addnewgoodentry\"</script>";
	                  }
	             }
	          }
	          else
	          {
	          	echo "<script type='text/javascript'>alert('Not alive minus value');window.history.back();</script>";
	          }

			 }
			 
			 // Auto Completed Search php  code Investigations
			 if(isset($_POST["itemVal"]))
			 {
				  $output = '';
				  $query = "SELECT  DISTINCT 	item_code FROM  iteminfor WHERE item_code LIKE '%".$_POST["itemVal"]."%'";
				  $result = mysqli_query($conn, $query);
				  $output = '<ul class="list_unstyled" id="itemVal" >';
		
					while($row = mysqli_fetch_array($result))
					{
							$output .= '<a href="#" style="color: #060606;"><li id="'.$row["item_code"].'">'.$row["item_code"].'</li> </a>';
					}
		
				  $output .= '</ul>';
				  echo $output;
			 }

			// Auto Completed Search php  code 
			if(isset($_POST["salesDisc"]))
			{
				$output = '';
				$query = "SELECT * FROM  iteminfor ";
				$result = mysqli_query($conn, $query);
				$output = '<ul class="list_unstyled" id="salesDiscSE"  style="width: 450px;">';
		
					while($row = mysqli_fetch_array($result))
					{
						$salesdisc0 =$row['salesdisc0'];
						$x = json_decode($salesdisc0, true);
						for($i=0; $i<sizeof($x);$i++)
						{
							$code=$x[$i]['salesdisc'];
							if(stripos($code, $_POST["salesDisc"]) !== FALSE ){
								$output .= '<a href="#" style="color: #060606;"><li id="'.$code.'">'.$code.'</li> </a>';
							} 
						}		
					}
			
				$output .= '</ul>';
				echo $output;
			}

 ?>


        