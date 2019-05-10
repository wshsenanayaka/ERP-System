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
              Export Item Create
           <?php endif ?>
        </li>
      </ol>
     <form action="" id="exportForm">
          <input type="hidden"  value="<?php if(isset($id)){ echo $id;}?>"  id="id"/> 
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Date</label>
              </div>
              <div class="col-sm-6">
                <input type="date" style="width: 100%;" class="form-control form-control-sm" value="<?php if(isset($date)){ echo $date;}?>"  id="date" required="required"/>
                <label id="errorDate" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Supplier</label>
              </div>
              <div class="col-sm-6">
               <select type="text" class="form-control form-control-sm" id="supplier" required="required">

                   <?php
                    if(isset($supplier))
                      {
                          echo "<option value='".$supplier."'>".$supplier."</option>";
                      }
                    ?>
                    <option value="">Select</option>
                    <?php
                    $query ="SELECT name FROM supplierinfor";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                       if($row['name']!=$suppliername)
                       {
                         echo "<option value='".$row['name']."'>".$row['name']."</option>";
                       }
                    }
                   ?>
                  </select>
                <label id="errorSupplier" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Proforma No</label>
              </div>
              <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm"  value="<?php if(isset($proformaNo)){ echo $proformaNo;}?>"  id="proformaNo" required="required"/>
                <label id="errorProformaNo" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>

          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">payment Confirmation</label>
              </div>
              <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm"  value="<?php if(isset($paymentCon)){ echo $paymentCon;}?>"  id="paymentCon" required="required"/>
                <label id="errorPaymentCon" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
          </div>
          <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
              <div class="col-sm-2">
                <label for="pwd">Situation</label>
              </div>
              <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm"  value="<?php if(isset($situation)){ echo $situation;}?>"  id="situation" required="required"/>
                <label id="errorSituation" class="error" style="display: none; font-size: small;">This field is required.</label>
              </div>
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

      $('#date').change(function(){
          
        var datavVal =$(this).val();
        if(datavVal!=''){
            $('#errorDate').css("display", "none");
          }

      });
      $('#supplier').change(function(){

          var supplierVal =$(this).val();
          if(supplierVal!=''){
            $('#errorSupplier').css("display", "none");
          }

      });
      $('#proformaNo').keyup(function(){

        var proformaNoVal =$(this).val();
        if(proformaNoVal!=''){
            $('#errorProformaNo').css("display", "none");
          }

      });
      $('#paymentCon').keyup(function(){

          var paymentConVal =$(this).val();
          if(paymentConVal!=''){
            $('#errorPaymentCon').css("display", "none");
          }
      });

      $('#situation').keyup(function(){

          var situationVal =$(this).val();
          if(situationVal!=''){
            $('#errorSituation').css("display", "none");
          }
      });
});

// *****************************  Inset Form function  *****************************

function onFromAdd(){

    var supplier =document.getElementById('supplier').value;
    var date =document.getElementById('date').value;
    var proformaNo =document.getElementById('proformaNo').value;
    var paymentCon =document.getElementById('paymentCon').value;
    var situation =document.getElementById('situation').value;
    var save =document.getElementById('save').name;

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
          url:"./exportController.php",
          method:"POST",
          data:{supplier:supplier,date:date,proformaNo:proformaNo,paymentCon:paymentCon,situation:situation,save:save},
          success:function(data){
            
              $('#exportForm').trigger("reset");  
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
          url:"./exportController.php",
          method:"POST",
          data:{supplier:supplier,date:date,proformaNo:proformaNo,paymentCon:paymentCon,situation:situation,update:update,id:id},
          success:function(data){
            
              $('#exportForm').trigger("reset");  
               //alert("Successful Insert data");
               $('#msgText').html("successfully updated data");
               myMzg();    
          }
      });
    }
 }

 // *****************************  Form Clear function  *****************************

 function onFromClear() {
   $('#exportForm').trigger("reset");  
 }

  // Message success view
  function myMzg() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

      // Location refech
    //  setTimeout(function(){location.reload(); },3000);
  }


 // ***************************** Back button function  *****************************
 function goBack() {
    window.history.back();
  }
 
</script>
