<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
  include('../include/check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <?php include('../include/head.php') ?>

   <style type="text/css">

      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
       .abtn
      {
      float: right;
      }
      #editable_table
      {
         width: 400px;
         float: left;
      }
   </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Stock by Category
        </li>
      </ol>
    <div class="container">
       <div class="abtn">
         <input type="button" value="View saved Reports" onclick="window.location='stock-category-view';" class="btn btn-primary btn-sm" />
       </div>
       <!-- View the category sum table php code start-->
       <?php

           $queryse ="SELECT 	 iteminfor.itemcategory as itemcategory , SUM(realgoodentry.r_quantity) as sumr_quantity FROM  iteminfor INNER JOIN  realgoodentry ON iteminfor.item_code= realgoodentry.r_itemcode GROUP BY iteminfor.itemcategory";
           $resultse =mysqli_query($conn,$queryse);
        ?>
       <!-- View the category sum table php code end-->
       <!-- View the category sum table start-->
       <table id="editable_table" class="table table-bordered">
          <thead>
           <tr>
            <th>Category</th>
            <th>Stock amount</th>
           </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            while($rowse = mysqli_fetch_array($resultse))
            {
             echo '
             <tr>
               <td>'.$rowse["itemcategory"].'</td>
               <td>'.$rowse["sumr_quantity"].'</td>
              </tr>';
             $i++;
            }
            ?>
         </tbody>
        </table>
       <!-- View the category count table end-->
       <!-- form for the search get the value from post method start-->
       <br>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group" style="margin-top: 14%;">
             <label for="email">Category</label>
               <div class="col-sm-4">
                 <select type="text" class="form-control form-control-sm"  name="rcategory" required="required" id="select1">
                   <option value="">Select</option>
                   <option value="Survey">Survey</option>
                   <option value="Labs">Labs</option>
                   <option value="Survey Spare Part">Survey Spare Part</option>
                   <option value="Labs Spare Part">Labs Spare Part</option>
                 </select>
               </div>
        </div>
        <!-- Generate Report button start-->
        <div class="form-group">
          <div class="col-sm-3">
             <input type="submit" value="Generate Report"  class="btn btn-primary btn-sm" name="cgeneratebtn" />
          </div>
        </div>
        <!-- Generate Report button end-->
      </form>
      <!-- form for the search get the value from post method end-->

      <!-- load the table start -->
      <!-- ....................................................................................................................... -->
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="col-sm-12">
          <?php
             if(isset($_POST['cgeneratebtn']))
             {

               $rcategory =$_POST['rcategory'];

               // Logic to  save the query items start
               $selectedc=array();
               foreach(array_keys($_POST) as $key)
               {
                  if($key=="rcategory")
                  {
                     $selectedc[$key]=$rcategory;
                  }
               }
               // arry  insert into  database code..........................................................
               $value = json_encode($selectedc);
               ?>
               <textarea type="hidden" style="display:none;"  name="ccol"><?php echo $value;?></textarea>

               <?php
               // arry  insert into  database code..........................................................

               // Logic to  save the query items end

               $queryr ="SELECT * FROM iteminfor WHERE 	itemcategory='$rcategory'";
               $resultr =mysqli_query($conn,$queryr);
               $getvalue =array();
               $i =1;
               while($rowr = mysqli_fetch_array($resultr))
               {
                 $getvalue[$i] =$rowr['item_code'];
                 $i++;
               }
               //$value = json_encode($getvalue);
               // echo $value;
               // ************************************************************************
               echo '
               <div class="row form-group col-sm-4" style="margin-top: 3%; margin-bottom:3%;">
                  <input type="text" class="form-control form-control-sm" placeholder="Report title" name="generatetitle" required="required" style="margin-right: 3%;"/>
                  ';?>
                  <input type="submit" value="Save"  class="btn btn-primary btn-sm" name="submitcreport"  style="margin-right: 2%;"/>
                  <input type="button" value="Cancel" onclick="window.location='stock-category';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
               <?php
               echo '
               </div>

               <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Item Code</th>
                  <th>Purchase description</th>
                  <th>Stock amount</th>
                 </tr>
                </thead>
                <tbody>
               ';
                for($y=1;$y<$i;$y++)
                {

                   $queryrc ="SELECT r_itemcode,r_purchasedisc, r_quantity as amount  FROM  realgoodentry WHERE r_itemcode='$getvalue[$y]'";
                   $resultrc =mysqli_query($conn,$queryrc);
                   $countrc =mysqli_num_rows($resultrc);



                   // Logic - include the items that are not in status of "Dispatched"
                   $query_check ="SELECT ditem_code FROM dispachinfor WHERE ditem_code='$getvalue[$y]'";
                   $result_check =mysqli_query($conn, $query_check);
                   $count =mysqli_num_rows($result_check);

                   while($rowc = mysqli_fetch_array($resultrc))
                   {
                      // echo $countrc;
                        if($count==0)
                        {
                           echo '<tr>';
                           if($rowc['r_itemcode']!=null){
                              echo '<td>'.$rowc['r_itemcode'].'</td>';
                           }
                           if($rowc['r_purchasedisc']!=null){
                              echo '<td>'.$rowc['r_purchasedisc'].'</td>';
                           }
                           if($rowc['amount']!=null){
                              echo '<td>'.$rowc['amount'].'</td>';
                           }

                           // echo '<td>'.$rowc['r_purchasedisc'].'</td>';
                           // echo '<td>'.$rowc['amount'].'</td>';
                           echo '</tr>';
                        }
                   }
                }
                echo '
                </tbody>
               </table>


              '; ?>

            <?php
             }
            ?>

         </div>
       </form>
       <br>
       <!-- ....................................................................................................................... -->
         <!-- load the table end -->
         <!-- report save php  code start -->
       <?php
         if(isset($_POST['submitcreport']))
         {
           $generatetitle =$_POST['generatetitle'];
           $ccol =$_POST['ccol'];
           $query ="INSERT INTO  categoryreportinfor (title,col)  VALUES (?,?)";

           $stmt =mysqli_stmt_init($conn);
           if(!mysqli_stmt_prepare($stmt,$query))
            {
                echo "SQL Error";
            }
          else
            {
                mysqli_stmt_bind_param($stmt,"ss",$generatetitle,$ccol);
                $result =  mysqli_stmt_execute($stmt);
                if(!$result)
                {
                   echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"stock-category\"</script>";
                }
                else
                {
                   echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"stock-category\"</script>";
                }
             }
         }
        ?>
        <!-- report save php  code end -->
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>   

  </div>
</body>

</html>
