<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>
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
          Supplied Items
        </li>
      </ol>
    <div class="container">
       <div class="abtn">
         <input type="button" value="View saved Reports" onclick="window.location='./supplied-items-view';" class="btn btn-primary btn-sm" />
       </div>
       <!-- form for the search get the value from post method start-->
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
             <label for="email">Items Code</label>
               <div class="col-sm-4">
                 <select type="text" class="form-control form-control-sm"  name="ritemcode" required="required" id="select1">
                  <option value="">Select</option>
                  <?php
                  $query ="SELECT item_code FROM iteminfor";
                  $result =mysqli_query($conn, $query);

                  while($row = mysqli_fetch_array($result))
                  {
                    // Logic - include the items that are not in status of "Dispatched"
                    $query_check ="SELECT ditem_code FROM dispachinfor WHERE ditem_code='".$row['item_code']."'";
                    $result_check =mysqli_query($conn, $query_check);
                    $count =mysqli_num_rows($result_check);

                    if($count==0)
                    {
                        echo "<option value='".$row['item_code']."'>".$row['item_code']."</option>";
                    }
                  }
                 ?>
                 </select>
               </div>
        </div>
        <!-- jquery auto  complete box and select box start-->
        <div id="show_product_items">
        </div>
        <!-- jquery auto  complete box and select box end-->

        <!-- Generate Report button start-->
        <div class="form-group">
          <div class="col-sm-3">
             <input type="submit" value="Generate Report"  class="btn btn-primary btn-sm" name="sgeneratebtn" />
             
          </div>
        </div>
        <!-- Generate Report button end-->
      </form>
      <!-- form for the search get the value from post method end-->
      <!-- load the table start -->

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="col-sm-12">
          <?php
             if(isset($_POST['sgeneratebtn']))
             {

               $ritemcode =$_POST['ritemcode'];
               $rpurchasedisc =$_POST['rpurchasedisc'];
               $rsalesdisc =$_POST['rsalesdisc'];

               // Logic to  save the query items start
               $selectedr =array();
               foreach(array_keys($_POST) as $key)
               {
                  if($key=="ritemcode")
                  {
                     $selectedr[$key]=$ritemcode;
                  }
                  if($key=="rpurchasedisc")
                  {
                     $selectedr[$key]=$rpurchasedisc;
                  }
                  if($key=="rsalesdisc")
                  {
                     $selectedr[$key]=$rsalesdisc;
                  }

               }
               // arry  insert into  database code..........................................................
               $value = json_encode($selectedr);
               ?>
               <textarea type="hidden" style="display:none;"  name="rcol"><?php echo $value;?></textarea>

               <?php
               // arry  insert into  database code..........................................................

               // Logic to  save the query items end

               $queryr ="SELECT * FROM purchaseorderinfor";
               $resultr =mysqli_query($conn,$queryr);

               echo '
               <div class="form-group">
                  <input type="text" class="form-control form-control-sm" placeholder="Report title" name="generatetitle" required="required"/>
               </div>
               <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                 <tr>
                  <th>Item Code</th>
                  <th>Sales desc</th>
                  <th>PO number</th>
                  <th>Customer name</th>
                 </tr>
                </thead>
                <tbody>
               ';
                 while($row = mysqli_fetch_array($resultr))
                 {
                     $x="".$row['itemcode']."";
                     $x = json_decode($x,true);
                     for($i=0; $i<sizeof($x);$i++)
                     {
                      $code=$x[$i]['item_code'];
                      $code1=$x[$i]['sales_dis'];
                      // echo '<option value="'.$code.'">'.$code.'</option>';
                        if($ritemcode==$code && $rsalesdisc==$code1)
                        {
                           echo '<tr>';
                           echo '<td>'.$code.'</td>';
                           echo '<td>'.$code1.'</td>';
                           echo '<td>'.$row['pid'].'</td>';
                           echo '<td>'.$row['customername'].'</td>';
                           echo '</tr>';
                        }
                     }
                  }
                echo '
                </tbody>
               </table>
              <input type="submit" value="Save"  class="btn btn-primary btn-sm" name="submitsreport" />



              '; ?>
                <input type="button" value="Cancel" onclick="window.location='http://localhost:81/bhoomitech/supplied-items';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
            <?php
             }
            ?>

         </div>
       </form>
         <!-- load the table end -->
         <!-- report save php  code start -->
       <?php
         if(isset($_POST['submitsreport']))
         {
           $generatetitle =$_POST['generatetitle'];
           $rcol =$_POST['rcol'];
           $query ="INSERT INTO  suppliedreportinfor (title,col)  VALUES (?,?)";

           $stmt =mysqli_stmt_init($conn);
           if(!mysqli_stmt_prepare($stmt,$query))
            {
                echo "SQL Error";
            }
          else
            {
                mysqli_stmt_bind_param($stmt,"ss",$generatetitle,$rcol);
                $result =  mysqli_stmt_execute($stmt);
                if(!$result)
                {
                   echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"supplied-items\"</script>";
                }
                else
                {
                   echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"supplied-items\"</script>";
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
<script type="text/javascript">
     $(document).ready(function(){
      $('#select1').change(function(){
           var item_code = $(this).val();
           $.ajax({
                url:"supplied-items-post",
                method:"POST",
                data:{item_code_r:item_code},
                success:function(data){
                     $('#show_product_items').html(data);
                }
           });
      });
    });
</script>
