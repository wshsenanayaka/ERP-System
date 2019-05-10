<head>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<?php

  include('../include/check.php');

  if(isset($_POST['item_code']))
  {
     $value =$_POST['item_code'];
     $query1 ="SELECT * FROM iteminfor WHERE item_code='$value'";
     $_SESSION['check']=true;
     $result =mysqli_query($conn,$query1);
      while($row = mysqli_fetch_array($result))
      {
        $purchasedisc = $row['purchasedisc'];

      }
  }
?>

 <?php
          if (isset($_POST['update']))
          {

            if($_SESSION['check']==true)
            {
          	   $quantity =mysqli_real_escape_string($conn ,$_POST['quantityval']);
            }
            else
            {
              $quantity =mysqli_real_escape_string($conn ,$_POST['quantity']);
            }
          	if($quantity>=0)
          	{
                $purchaseid =mysqli_real_escape_string($conn,$_POST['pid']);
                $suppliername =mysqli_real_escape_string($conn,$_POST['sn']);
                $supplierinvoiceno =mysqli_real_escape_string($conn ,$_POST['sno']);
                $item_code =mysqli_real_escape_string($conn,$_POST['ic']);
                if($_SESSION['check']==true)
                {

                  $purchasedisc =mysqli_real_escape_string($conn ,$_POST['$purchasediscval']);
                //  echo $purchasedisc;
                  $salesdisc =mysqli_real_escape_string($conn ,$_POST['salesdiscval']);
                  //echo $salesdisc;
                }
                else
                {
                  $purchasedisc =mysqli_real_escape_string($conn ,$_POST['$purchasedisc']);
                //  echo $purchasedisc;
                  $salesdisc =mysqli_real_escape_string($conn ,$_POST['salesdisc']);
                  //echo $salesdisc;
                }
                // echo $quantity;
            // echo $salesdisc;
            // echo $quantity;
               $query_r ="SELECT * FROM realgoodentry WHERE r_purchasedisc='$purchasedisc' AND 	r_salesdisc='$salesdisc'";
       		     $result_r =mysqli_query($conn,$query_r);
               $count_r =mysqli_num_rows($result_r);

               if($count_r>0)
               {
         		     while ($row_r=mysqli_fetch_array($result_r))
         		     {
         		         $quantity1_r =$row_r['r_quantity'];
         		     }
               }
               else
               {
                 $quantity1_r="0";
               }
      		     $query ="SELECT * FROM goodentry WHERE purchaseid='$purchaseid' AND gsalesdisc='$salesdisc'";
      		     $result =mysqli_query($conn,$query);
               $count =mysqli_num_rows($result);
                if($count>0)
                {
          		     while ($row=mysqli_fetch_array($result))
          		     {
          		         $quantity1 =$row['quantity'];
          		     }
                }
                else
                {
                  $quantity1="0";
                }

             $quantitynew =$quantity+$quantity1;
             $quantitynew_r =$quantity+$quantity1_r;

             $query1 ="UPDATE  realgoodentry  SET r_quantity='$quantitynew_r' WHERE 	r_itemcode='$item_code' AND r_purchasedisc='$purchasedisc' AND r_salesdisc='$salesdisc'";
             mysqli_query($conn,$query1);

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
                    $_SESSION['check'] =null;

  	               if(!$result)
  	                  {
  	                     echo "<script type='text/javascript'>alert('Update is faild');window.location = \"addnewgoodentry\"</script>";
  	                  }
  	                  else
  	                  {
  	                     echo "<script type='text/javascript'>alert('Update successfully');window.location = \"addnewgoodentry\"</script>";
  	                  }
  	            }
	          }
	          else
	          {
	          	echo "<script type='text/javascript'>alert('Not alive minus value');window.history.back();</script>";
	          }
          }



 ?>
          <div class="form-group">
             <label for="pwd">Purchase disc</label>
              <div class="col-sm-3">
                 <div id="show_product">
                  <input type="text" id="show_text" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" class="form-control form-control-sm" name="$purchasediscval" readonly/>
                 </div>
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Sales disc</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="salesdiscval" id="selectvalu1"  required="required">
                    <option value="">Select</option>
                    <?php
                         $querysee ="SELECT salesdisc0 FROM iteminfor WHERE item_code='$value'";
                         $resultsee =mysqli_query($conn,$querysee);
                         $row1 = mysqli_fetch_array($resultsee);
                         $x="".$row1[0]."";
                         $x = json_decode($x,true);

                         for($i=0; $i<sizeof($x);$i++)
                        {
                          $code=$x[$i]['salesdisc'];
                          echo '<option value="'.$code.'">'.$code.'</option>';
                        }
                    ?>
                   </select>
              </div>
           </div>
           <div class="form-group">
              <label for="pwd">Quantity</label>
               <div class="col-sm-3">
                <input type="number" class="form-control form-control-sm" name="quantityval" id="show_text"   min="0"/>
               </div>
               <div class="col-sm-3" id="remindertext">
                 <div class="form-inline">
                  <label for="pwd">Already Exit Amount: <div id="show_quantity"></div></label>
                </div>
               </div>
           </div>
           <script type="text/javascript">

               $(document).ready(function(){
                $('#selectvalu1').change(function(){
                     var salesdisc = $(this).val();
                     $.ajax({
                          url:"addnewgoodentryEditQ",
                          method:"POST",
                          data:{salesdisc:salesdisc},
                          success:function(data){
                               $('#show_quantity').html(data);

                          }
                     });

                });
           });
           </script>
