<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">
      .column-left{ float: left; width: 50%; height: 400px; }
      .column-right{ float: right; width: 33%; height: 450px; }
      .column-center{ display: inline-block; width: 33%; }

      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
      .aodbtn
      {
         margin-left: 15px;

      }
      .tablealign
      {
        margin-left: 15px;
        margin-right: 15px;
        margin-top: 15px;
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
          <a href="#">Purchase Orders</a>
        </li>
      </ol>
    <div class="container">
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <div class="column-left">

          <div class="form-group">
             <label for="pwd">PO Number</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="po_number" id="select1" >

                    <option value="">Select</option>
                    <?php
                    $query ="SELECT pid FROM  purchaseorderinfor";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                         echo "<option value='".$row['pid']."'>".$row['pid']."</option>";
                    }
                   ?>
                   </select>
              </div>
           </div>
         <!--   <div id="show_product_text">

           </div> -->
          <div class="form-group">
              <label for="pwd">Customer Order's No</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="customerorderno" />
              </div>
          </div>
           <div class="form-group">
              <label for="pwd">Customer Name</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="customername" />
              </div>
          </div>
          <div class="form-group">
              <label for="pwd">Customer Address</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="customeraddress" />
              </div>
          </div>
          <div class="form-group">
              <label for="pwd">Customer Site</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="customersite"/>
              </div>
          </div>

         </div>

          <div class="column-right">
             <div class="form-group">
                  <label for="pwd">Create By</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="createby" />
                  </div>
              </div>
              <div class="form-group">
                <label for="pwd">Create Date</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" name="createdate" />
                </div>
             </div>
              <div class="form-group">
                  <label for="pwd">PO Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="podate"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">PO Received Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="poreceiveddate"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">Deadline Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="deadlinedate" />
                  </div>
              </div>
               <div class="aodbtn">
              <input type="submit" name="searchsup" value="Search" class="btn btn-primary btn-sm"/>

           </div>

       </div>

      </form>
    </div>

  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>

</body>

</html>
<?php


    require '../include/config.php';
    if(isset($_POST['searchsup']))
    {
       $po_number =mysqli_real_escape_string($conn,$_POST['po_number']);
       $customerorderno =mysqli_real_escape_string($conn ,$_POST['customerorderno']);
       $customername =mysqli_real_escape_string($conn,$_POST['customername']);

       $customeraddress =mysqli_real_escape_string($conn ,$_POST['customeraddress']);
       $customersite =mysqli_real_escape_string($conn ,$_POST['customersite']);
       $createby =mysqli_real_escape_string($conn ,$_POST['createby']);

       $createdate =mysqli_real_escape_string($conn ,$_POST['createdate']);
       $podate =mysqli_real_escape_string($conn ,$_POST['podate']);
       $poreceiveddate =mysqli_real_escape_string($conn ,$_POST['poreceiveddate']);
       $deadlinedate =mysqli_real_escape_string($conn ,$_POST['deadlinedate']);

       $query = " SELECT * FROM purchaseorderinfor WHERE pid='$po_number' OR customerorderno='$customerorderno' OR  customername='$customername' OR   customeraddress='$customeraddress' OR customersite=' $customersite' OR  createby='$createby' OR createdate='$createdate' OR   podate='$podate' OR poreceiveddate='$poreceiveddate' OR deadlinedate ='$deadlinedate'";

    }
    else
    {
        $query = " SELECT * FROM purchaseorderinfor ";
    }
    $result = mysqli_query($conn ,$query);
    ?>
    <div class="tablealign">
     <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Purchase ID</th>
         <th>Cus Order No</th>
         <th>Cus Name</th>
         <th>Cus Address</th>
         <th>Site</th>
         <th>Create Date</th>
         <th>Create By</th>
         <th>PO Date</th>
         <th>PO Receive Date</th>
         <th>Deadline</th>

         <td> </td>

        </tr>
       </thead>
       <tbody>
       <?php
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["pid"].'</td>
         <td>'.$row["customerorderno"].'</td>
         <td>'.$row["customername"].'</td>
         <td>'.$row["customeraddress"].'</td>
         <td>'.$row["customersite"].'</td>
         <td>'.$row["createdate"].'</td>
         <td>'.$row["createby"].'</td>
         <td>'.$row["podate"].'</td>
         <td>'.$row["poreceiveddate"].'</td>
         <td>'.$row["deadlinedate"].'</td>
         <td><a href="aCreateNewAODSelect?sedit_id='.$row["pid"].'">Select</a></td>


        </tr>
        ';
       }
       ?>
       </tbody>
      </table>
    </div>