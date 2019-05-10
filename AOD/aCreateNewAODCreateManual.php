<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

    include('../include/check.php');
   
    if(isset($_GET['update']))
     {
       $update =$_GET['update'];
     }
     else
     {
       $update =false;
     }

     if(isset($_GET['prop_id'])){

     $id =$_GET['prop_id'];
     $_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM exportdb WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $id =$row['id'];
        $date =$row['date'];
        $supplier =$row['supplier'];
        $proformaNo	=$row['proformaNo'];
        $paymentCon =$row['paymentCon'];
        $situation =$row['situation'];

     }

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
   <?php include('../include/head.php') ?>

   <style type="text/css">
     .addsb
     {
      margin-left: 16px;
     }
     .error{
        color: red;
     }

      /* snackbar css strat */
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
        }
        
        #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        
        @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }
        
        @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }
        
        @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
        
        @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
        /* snackbar css end */

        .auto-view{
            background-color: #eaecef; 
            height: 55%; 
            overflow-y: auto;  
            width: 100%;
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
           <?php if ($update == true): ?>
              Edit Export Items : <?php echo $id; ?>
           <?php else: ?>
              Create New AOD Create Manual
           <?php endif ?>
        </li>
      </ol>
     <form action="" id="aodManualForm">
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">No</label>
              </div>
              <div class="col-sm-6">
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
                <input type="text" style="width: 100%;" class="form-control form-control-sm" value="<?php if(isset($pidNext)){ echo $pidNext;}?>"  id="no" readonly/>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Date</label>
              </div>
              <div class="col-sm-6">
                <input type="date" style="width: 100%;" class="form-control form-control-sm" value="<?php echo date('Y-m-d');?>"  id="date" required="required"/>
                <label id="errorDate" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Customer Name</label>
              </div>
              <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="customerName" />
                <div id="customerNameList" class="auto-view" style="display: none;"></div> 
                <label id="errorCustomerName" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Sales disc</label>
              </div>
              <div class="col-sm-6">
              <select type="text" class="form-control form-control-sm" style="width: 100%;" id="salesSelect" required="required">
            
                <option value="">Select</option>
                <?php
                $query ="SELECT r_salesdisc FROM realgoodentry";
                $result =mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result))
                {
                   
                    echo "<option value='".$row['r_salesdisc']."'>".$row['r_salesdisc']."</option>";
                    
                }
                ?>
                </select>
                <label id="errorSales" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>

          <div id="showSalesSelect">

          </div>

        
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <!-- <label for="pwd">Situation</label> -->
              </div>
              <div class="col-sm-6">
                  <?php if ($update == true): ?>
                    <input type="button" value="Update" name="update" id ="update" onclick="onFromUpdate()" class="btn btn-primary btn-sm" />
                  <?php else: ?>
                    <input type="button" value="Save" name="save" id="save" onclick="onFromAdd()" class="btn btn-primary btn-sm" />
                  <?php endif ?>
                    <input type="button" value="Clear" onclick="onFromClear()" class="btn btn-primary btn-sm" />
                    <input type="button" value="Back" onclick="goBack()" class="btn btn-primary btn-sm"/>
                    <p></p>
                    <p style="color: red; font-size: small;">* All fields are required</p>
              </div>
          </div>
      </div>
     </form>
     <div id="snackbar"><p id="msgText"></p></div>


     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>
 
  </div>
</body>

</html>
<script type="text/javascript" language="javascript" >


 // *****************************  fields validation  *****************************

$(document).ready(function(){


     $('#salesSelect').change(function(){
        var salesSelect = $(this).val();
        $.ajax({
                url:"./aCreateNewAODCreateManualView",
                method:"POST",
                data:{salesSelect:salesSelect},
                success:function(data){
                    $('#showSalesSelect').html(data);
                }
        });
     });
       

      $('#date').change(function(){
          
        var datavVal =$(this).val();
        if(datavVal!=''){
            $('#errorDate').css("display", "none");
          }

      });
      $('#customerName').keyup(function(){

          var customerNameVal =$(this).val();
          if(customerNameVal!=''){
            $('#errorCustomerName').css("display", "none");
          }

      });
      $('#salesSelect').change(function(){

        var salesSelectVal =$(this).val();
        if(salesSelectVal!=''){
            $('#errorSales').css("display", "none");
          }

      });
      $('#description').keyup(function(){

          var descriptionVal =$(this).val();
          if(descriptionVal!=''){
            $('#errorDescription').css("display", "none");
          }
      });

      $('#quantity').keyup(function(){

          var quantityVal =$(this).val();
          if(quantityVal!=''){
            $('#errorQuantity').css("display", "none");
          }
      });

});

    //Customer Name auto complete  jquery 
    $('#customerName').keyup(function(){
        var query =$(this).val();

        $.ajax({
            url: "aCreateNewAODCreateManualController",
            method:"POST",
            data:{dicdcode_val:query},
            success:function(data)
            {
                $('#customerNameList').fadeIn();
                $('#customerNameList').html(data);
            }
        }); 
    });

    $(document).on('click', '#customerNameList li', function(){

        var idvalue_dia =$(this).attr('id');
        $('#customerName').val(idvalue_dia);
        $('#customerNameUL').css("display", "none");
        $('#customerNameList').css("display", "none");

        });

        $("body").click(function () {
        $('#customerNameList li').fadeOut();
        $('#customerNameUL').css("display", "none");
        $('#customerNameList').css("display", "none");

    });


// *****************************  Inset Form function  *****************************

function onFromAdd(){

    var no =document.getElementById('no').value;
    var date =document.getElementById('date').value;
    var customerName =document.getElementById('customerName').value;
    var salesSelect =document.getElementById('salesSelect').value;

    if(salesSelect !==""){
        var description =document.getElementById('description').value;
        var quantity =document.getElementById('quantity').value;
        var availableQuantity =document.getElementById('availableQuantity').value;
    }
   
    var save =document.getElementById('save').name;

    var count = 0;

    if(date==''){
        $('#errorDate').css("display", "inherit");
        count++
    }
    if(customerName==''){
        $('#errorCustomerName').css("display", "inherit");
        count++
    }

    if(salesSelect==''){
        $('#errorSales').css("display", "inherit");
        count++
    }
    if(description==''){
        $('#errorDescription').css("display", "inherit");
        count++
    }
    if(quantity==''){
        $('#errorQuantity').css("display", "inherit");
        count++
    }

    if(count ==0){

      $.ajax({
          url:"./aCreateNewAODCreateManualController",
          method:"POST",
          data:{no:no,date:date,customerName:customerName,salesSelect:salesSelect,description:description,quantity:quantity,availableQuantity:availableQuantity,save:save},
          success:function(data){
            
              $('#aodManualForm').trigger("reset");  
               //alert("Successful Insert data");
               $('#msgText').html("successfully inserted data");
               myMzg();    
          }
    });

    }
 }

 // *****************************  Update Form function  *****************************

function onFromUpdate(){

    var id =document.getElementById('id').value;
    var supplier =document.getElementById('supplier').value;
    var date =document.getElementById('date').value;
    var proformaNo =document.getElementById('proformaNo').value;
    var paymentCon =document.getElementById('paymentCon').value;
    var situation =document.getElementById('situation').value;
    var update =document.getElementById('update').name;

    var count = 0;

    if(date==''){
        $('#errorDate').css("display", "inherit");
        count++
    }
    if(supplier==''){
        $('#errorSupplier').css("display", "inherit");
        count++
    }

    if(proformaNo==''){
        $('#errorProformaNo').css("display", "inherit");
        count++
    }
    if(paymentCon==''){
        $('#errorPaymentCon').css("display", "inherit");
        count++
    }
    if(situation==''){
        $('#errorSituation').css("display", "inherit");
        count++
    }

    if(count ==0){

      $.ajax({
          url:"./exportController",
          method:"POST",
          data:{supplier:supplier,date:date,proformaNo:proformaNo,paymentCon:paymentCon,situation:situation,update:update,id:id},
          success:function(data){
            
            //   $('#exportForm').trigger("reset");  
               //alert("Successful Insert data");
               $('#msgText').html("successfully updated data");
               myMzg();    
          }
      });
    }
 }

 // *****************************  Form Clear function  *****************************

 function onFromClear() {
   $('#aodManualForm').trigger("reset");  
 }

  // Message success view
  function myMzg() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

     // Location refech
     setTimeout(function(){location.reload(); },3000);
  }


 // ***************************** Back button function  *****************************
 function goBack() {
    window.history.back();
  }
 
</script>
