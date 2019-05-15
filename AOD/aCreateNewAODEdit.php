<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

     include('../include/check.php'); 
  
     if(isset($_GET['aedit_id'])){

     $id =$_GET['aedit_id'];
    // $_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM  dispachinfor WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $id =$row['id'];
        $poNo =$row['poNo'];
        $details =$row['details'];
        $createDate =$row['createDate'];
     }

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('../include/head.php') ?>

   <style type="text/css">
      .column-left{ float: left; width: 50%; height: 400px; }
      .column-right{ float: right; width: 33%; height: 400px; }
      .column-center{ display: inline-block; width: 33%; }
      .aodbtn
      {
         margin-left: 15px;
         margin-bottom: 10px;

      }
      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
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
          <a href="#">Edit AOD - <?php echo $id; ?></a>
        </li>
      </ol>
    <div class="container">
      <form>
      <input type="hidden"  value =<?php echo $id; ?> id="editID"/>
      <div class="row">
        <div class="col-sm-6">
            <label for="pwd">PO No - <?php echo $poNo; ?></label>
        </div>
        <div class="col-sm-6">
           <label for="pwd">Dispatched Date -  <?php echo $createDate; ?></label>
        </div>
      </div>
      <div>
      <br>
      <table id="uptableitems" class="table table-bordered table-striped table-responsive" >
        <thead>
          <tr>
             <th>PO No</th>
             <th>Item code</th>
             <th>Sales</th>
             <th>Already dispathed amount</th>
             <th>Order quantity</th>
             <th>Available Qty</th>
             <th>Issue Quantity</th>
             <th>Serial number</th>
             <th>Status</th>
             <th>Return Qty</th>
             <th>Return Type</th>
             <th>Dispatched date</th>
             <th></th>
          </tr>
        </thead>
        <tbody>
           <?php
                 
                 $x = json_decode($details, true);

                 for($i=0;$i<sizeof($x);$i++)
                  {
                      $poNo=$x[$i]['poNo'];
                      $itemCode=$x[$i]['itemCode'];
                      $sales=$x[$i]['sales'];
                      $alreadyDispathedAmount=$x[$i]['alreadyDispathedAmount'];
                      $orderQyt=$x[$i]['orderQyt'];
                      $availableQty=$x[$i]['availableQty'];
                      $issueQty=$x[$i]['issueQty'];
                      $serialNumber=$x[$i]['serialNumber'];
                      $status=$x[$i]['status'];
                      $returnQtyType=$x[$i]['returnQtyType'];
                      $returnQty=$x[$i]['returnQty'];
                      $dispatchedDate=$x[$i]['dispatchedDate'];


                      echo '
                        <tr id="rowno'.$i.'">
                          <td>
                            '.$poNo.'
                            <input type="hidden" class="form-control form-control-sm" value ='.$poNo.' name="poNo" readonly/>
                          </td>
                          <td>
                            '.$itemCode.'
                            <input type="hidden" class="form-control form-control-sm" value ='.$itemCode.' name="itemCode" readonly/>
                          </td>
                          <td>
                            '.$sales.'
                             <input type="hidden" class="form-control form-control-sm" value ='.$sales.' name="sales" readonly/>
                          </td>

                          <td>
                            '.$alreadyDispathedAmount.'
                            <input type="hidden" class="form-control form-control-sm" value ='.$alreadyDispathedAmount.' name="alreadyDispathedAmount" readonly/>
                          </td>

                          <td>
                            '.$orderQyt.'
                             <input type="hidden" class="form-control form-control-sm" value ='.$orderQyt.' name="orderQyt" readonly/>
                          </td>

                          <td>
                            '.$availableQty.'
                             <input type="hidden" class="form-control form-control-sm" value ='.$availableQty.' name="availableQty" readonly/>
                          </td>

                          <td>
                           '.$issueQty.'
                           <input type="hidden" class="form-control form-control-sm" value ='.$issueQty.' name="issueQty" readonly/>
                          </td>
                          <td>
                            <textarea  type="text" class="form-control form-control-sm" name="serialNumber" required="required">'.$serialNumber.'</textarea>
                          </td>
                          <td>
                          '.$status.'
                            <input type="hidden" class="form-control form-control-sm" value ='.$status.' name="status" readonly/>
                          </td>
                          <td>
                             <input type="number" class="form-control form-control-sm"  name="returnQty"  value ="'.$returnQty.'"  />
                          </td>

                          <td>
                            <select type="text" class="form-control form-control-sm" name="returnQtyType">
                              <option value='.$returnQtyType.'>'.$returnQtyType.'</option>
                              <option value="Full Return">Full Return</option>
                              <option value="Partial Return">Partial Return</option>
                            </select>
                          </td>
                          <td>
                          '.$dispatchedDate.'
                           <input type="hidden" class="form-control form-control-sm" value ='.$dispatchedDate.' name="dispatchedDate" readonly/>
                          </td>
                          <td>
                          <input type="button" value="Delete" onclick="remove_items('.$i.')" class="btn btn-primary btn-sm"/>
                          </td>
                          </tr>';
                  }

              ?>
            </tbody>
          </table>
          <div class="abtn">
             <input type="button" value="Edit AOD" class="btn btn-primary btn-sm" onclick="edit_items()"/>
             <input type="button" name="serchsubep" onclick="window.location='./aCreateNewAOD';"   value="Cancle" class="btn btn-primary btn-sm"/>
         </div>
    
      </div>
      </form>
      <div id="snackbar"><p id="msg_view"></p></div>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

</div>
</body>


<script>

  function remove_items(no)
  {
    $('#rowno'+no).remove();
  }

  var array=[];


  var count = 0;
  
  // jQuery methods go here...
  function edit_items()
  {

     var table = $("#uptableitems");

     table.find('tr:gt(0)').each(function (i) {

     var $tds = $(this).find('td'),
     poNo = $tds.eq(0).find("input").val();
     itemCode =$tds.eq(1).find("input").val();
     sales =$tds.eq(2).find("input").val();
     alreadyDispathedAmount = $tds.eq(3).find("input").val();
     orderQyt = $tds.eq(4).find("input").val();
     availableQty =$tds.eq(5).find("input").val();
     issueQty = $tds.eq(6).find("input").val();
     serialNumber = $tds.eq(7).find("textarea").val();
     status =  $tds.eq(8).find("input").val();
     returnQty = $tds.eq(9).find("input").val();
     returnQtyType = $tds.eq(10).find("select").val();
     dispatchedDate = $tds.eq(11).find("input").val();


     if(availableQty<=orderQyt){

      $('#msg_view').html("Order quantity greater than available quantity");
      myMzg();
      count++
    }


    if(orderQyt<=issueQty){

      $('#msg_view').html("Issue quantity greater than Order quantity");
      myMzg();
      count++
    }

    if(orderQyt>=availableQty){

      $('#msg_view').html("Already dispatch quantity greater than Order quantity");
      myMzg();
      count++
    }

    if(issueQty !=="" && returnQty !==""){

      $('#msg_view').html("Do one operation");
      myMzg();
      count++
    }


    if(count==0){
        
        var z={"poNo":poNo,"itemCode":itemCode,"sales":sales,"alreadyDispathedAmount":alreadyDispathedAmount,"orderQyt":orderQyt,
        "availableQty":availableQty,"issueQty":issueQty,"serialNumber":serialNumber,"status":status,"returnQtyType":returnQtyType
        ,"returnQty":returnQty,"dispatchedDate":dispatchedDate};

        array.push({poNo:poNo,itemCode:itemCode,sales:sales,alreadyDispathedAmount:alreadyDispathedAmount,orderQyt:orderQyt,
          availableQty:availableQty,issueQty:issueQty,serialNumber:serialNumber,status:status,returnQtyType:returnQtyType,
          returnQty:returnQty,dispatchedDate:dispatchedDate
        });

        call2(array);
    }

    });
   

      function call2(array) {

          var arrayNew = JSON.stringify(array);
          var editID =document.getElementById('editID').value;

          $.ajax({
              url:"./controller.php",
              method:"POST",
              data:{newUpdateArray:arrayNew,editID:editID},
              success:function(data){

                  $('#msg_view').html(data);
                  myMzg();

              }
          });   
      }
   }

    // Message success view
    function myMzg() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

      // Location refech
      setTimeout(function(){location.reload(); },3000);

    }

</script>

</html>
