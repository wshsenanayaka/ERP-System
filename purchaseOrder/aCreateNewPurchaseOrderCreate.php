<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <!-- <script src="js/jquery-3.2.1.js"></script> -->
   <style type="text/css">
      .column-left{ float: left; width: 50%; height: 450px; }
      .column-right{ float: right; width: 33%; height: 490px; }
      .column-center{ display: inline-block; width: 33%; }
      .abtn
      {
        margin-left: 15px;
      }
      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
      .align
      {
        height: 450px;
      }
      .itable
      {
         margin-left: 15px;
      }

      .list_unstyled{

        overflow: auto;
        background-color: #eaecef;
        color: beige;
        font-size: 15px;
        padding: 1%;
        max-height: 91px;
        width: 450px;

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
          <a href="#">Create New Purchase Order</a>
        </li>
      </ol>

    <div class="container">
        <form action="aCreateNewPurchaseOrderCont" method="POST">
           <input type="hidden" id="myitems" name="myitems"/>
           <div class="align">
             <div class="column-left">
               <div class="form-group">
                   <label for="pwd">Purchase ID</label>
                   <div class="col-sm-3">
                    <?php
                      $query ="SELECT pid FROM purchaseorderinfor ORDER BY pid ASC";
                      $result =mysqli_query($conn, $query);
                      if(mysqli_num_rows($result) == 0){
                        $pidNext = 1;
                      }else{
                        while($row = mysqli_fetch_array($result))
                        {
                            $pid =  $row['pid'];
                            $pidNext = $pid+1;   
                        }
                      }
                     
                     ?>
                    <input type="text" class="form-control form-control-sm" name="purchaseid" value="<?php  echo $pidNext; ?>" required="required" readonly/>
                   </div>
               </div>
              <div class="form-group">
                  <label for="pwd">Customer Order's No</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="customerorderno" required="required"/>
                  </div>
              </div>
              <div class="form-group">
               <label for="pwd">Customer Name</label>
                <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" name="customername" id="selectCustomer" style="width: 450px;"/>
                      <div id="userlistCustomer" class="auto-view"></div>
                     <!-- <select type="text" class="form-control form-control-sm" name="customername" id="select1" required="required">
                      <option value="">Select</option>
                      <?php
                      $query ="SELECT name FROM customerinfor";
                      $result =mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<option value='".$row['name']."'>".$row['name']."</option>";
                      }
                     ?>
                     </select> -->
                </div>
             </div>
             <div id="show_product_text">

             </div>

           </div>

           <div class="column-right">
              <div class="form-group">
                  <label for="pwd">Create By</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="createby" value="<?php  echo $email;?>" required="required" readonly/>
                  </div>
              </div>
              <div class="form-group">
                <label for="pwd">Create Date</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" value ="<?php echo date("Y-m-d")  ?>" name="createdate" required="required" readonly/>
                </div>
             </div>
              <div class="form-group">
                  <label for="pwd">PO Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="podate" required="required"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">PO Received Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="poreceiveddate" required="required"/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">Deadline Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" name="deadlinedate" required="required"/>
                  </div>
              </div>
              <div class="abtn">
                 <input type="submit" name="addsup" value="Create Po" class="btn btn-primary btn-sm"/>
                 <input type="button" name="serchsubep"  onclick="goBack()"  value="Cancle" class="btn btn-primary btn-sm"/>
             </div>
           </div>
          </div>
          <br>
      </form>

      <?php include('../include/footer.php') ?>

      <?php include('../include/modal.php') ?>   
  
</div>
</body>

</html>
<script>

  function goBack() {
      window.history.back();
  }



  $(document).on('click', '#userlistCustomer li', function(){

    var idvalue=$(this).attr('id');

    
    $('#selectCustomer').val(idvalue);
    $('#customerSE').css("display", "none");
    $.ajax({
        url:"./aCreateNewPurchaseOrderView",
        method:"POST",
        data:{item_code:idvalue},
        success:function(data){

              $('#show_product_text').html(data);
              // $('#viewIC').css("display", "none");

        }
    });
  });

  $("body").click(function () {
    $('#userlistCustomer li').fadeOut();
    $('#customerSE').css("display", "none");
  });

  $('#selectCustomer').keyup(function(){

      var query =$(this).val();
        $.ajax({
          url:"./aCreateNewPurchaseOrderCont",
          method:"POST",
          data:{customerView:query},
          success:function(data)
            {
              $('#userlistCustomer').fadeIn();
              $('#userlistCustomer').html(data);
            }
        }); 
    });

</script>
