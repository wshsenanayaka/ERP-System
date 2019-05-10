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
          <a href="#">Create New AOD</a>
        </li>
      </ol>
    <div class="container">
      <div class="abtn">
         <input type="submit" value="Create PO" onclick="window.location='aCreateNewPurchaseOrderCreate';" class="btn btn-primary btn-sm" />
     </div>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <div class="column-left">
          <!-- <div class="form-group">
              <label for="pwd">AOD No</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="phone" required="required"/>
              </div>
          </div> -->
          <div class="form-group">
             <label for="pwd">Purchase ID</label>
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
            <!--   <div class="form-group">
                <label for="pwd">Create Date</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" name="createdate" />
                </div>
             </div> -->
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
      <div id="snackbar"><p id="msg_view"></p></div>

    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>   
   
</div>
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

       //$createdate =mysqli_real_escape_string($conn ,$_POST['createdate']);
       $podate =mysqli_real_escape_string($conn ,$_POST['podate']);
       $poreceiveddate =mysqli_real_escape_string($conn ,$_POST['poreceiveddate']);
       $deadlinedate =mysqli_real_escape_string($conn ,$_POST['deadlinedate']);

       $query = "SELECT * FROM purchaseorderinfor WHERE pid='$po_number' OR customerorderno='$customerorderno' OR  customername='$customername' OR   customeraddress='$customeraddress' OR customersite=' $customersite' OR  createby='$createby' OR  podate='$podate' OR poreceiveddate='$poreceiveddate' OR deadlinedate ='$deadlinedate'";

    }
    else
    {
        $query = " SELECT * FROM purchaseorderinfor ";
    }
    $result = mysqli_query($conn ,$query);
    ?>
    <div class="tablealign" id="psTable">
     <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Purchase ID</th>
         <th>Cus Order No</th>
         <th>Cus Name</th>
         <th>Cus Address</th>
         <th>Site</th>
        <!--  <th>Create Date</th> -->
         <th>Create By</th>
         <th>PO Date</th>
         <th>PO Receive Date</th>
         <th>Deadline</th>
         <th></th>
         <th></th>



        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["pid"].'</td>
         <td>'.$row["customerorderno"].'</td>
         <td>'.$row["customername"].'</td>
         <td>'.$row["customeraddress"].'</td>
         <td>'.$row["customersite"].'</td>
         <td>'.$row["createby"].'</td>
         <td>'.$row["podate"].'</td>
         <td>'.$row["poreceiveddate"].'</td>
         <td>'.$row["deadlinedate"].'</td>
         <td><a href="aCreateNewPurchaseOrderEdit?pedit_id='.$row["pid"].'&update=true">Edit</a></td>
         <td><a href="#" onclick="confirmation(event,'.$row["pid"].')">Delete</a></td>

        </tr>
        ';
        $i++;
       }
       ?>
       </tbody>
      </table>
      
    </div>
<script>

  function confirmation(e,id) {
       var answer = confirm("Are you sure you want to permanently delete this record?")
    if (!answer){
      e.preventDefault();
      return false;
    }else{
      deleteForm(id)
    }
  }

   // Remove  javascript
   function deleteForm(id){

      $.ajax({
            url:"./aCreateNewPurchaseOrderCont",
            method:"POST",
            data:{pudelete_id:id},
            success:function(data){

              $('#msg_view').html(data);
              myMzg();
            }
      });
    }

    // Message success view
    function myMzg() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

      // Location refech
      setTimeout(function(){

        $("#psTable").load(window.location.href + " #psTable");
       },3000);
    }

  </script>

