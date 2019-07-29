<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

     include('../include/check.php'); 
  
     if(isset($_GET['editId'])){

        $id =$_GET['editId'];
        // $_SESSION['editid'] =$_GET['prop_id'];
        $query ="SELECT * FROM  aodManual WHERE id='$id'";
        $result =mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($result))
        {
            $poNo =$row['pno'];
            $customerName =$row['customerName'];
            $other =$row['other'];
            $details =$row['details'];
            // $createDate =$row['createDate'];
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
          <a href="#">Edit Manual AOD - <?php echo $id; ?></a>
        </li>
      </ol>
    <div class="container">
      <form>
      <input type="hidden"  value =<?php echo $id; ?> id="editID"/>
       <div class="row">
            <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
            <div class="col-sm-2">
                <label for="pwd">PO Number</label>
            </div>
            <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="poNo" value="<?php if(isset($poNo)){ echo $poNo;}?>" />
            </div>
        </div>
        <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
            <div class="col-sm-2">
                <label for="pwd">Customer Name</label>
            </div>
            <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="customerName" value="<?php if(isset($customerName)){ echo $customerName;}?>" />
            </div>
        </div>
        <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
            <div class="col-sm-2">
                <label for="pwd">Other</label>
            </div>
            <div class="col-sm-6">
                <input type="text" style="width: 100%;" class="form-control form-control-sm" id="other" value="<?php if(isset($other)){ echo $other;}?>" />
            </div>
        </div>
      </div>
      <div>
      <br>
      <table id="uptableitems" class="table table-bordered table-striped table-responsive" >
        <thead>
          <tr>
             <th>Item code</th>
             <th>Sales</th>
             <th>Issue Quantity</th>
             <th>Serial number</th>
             <th>Dispatched date</th>
             <th></th>
          </tr>
        </thead>
        <tbody>
           <?php
                 
                 $x = json_decode($details, true);

                 for($i=0;$i<sizeof($x);$i++)
                  {
                      $itemCode=$x[$i]['itemCode'];
                      $sales=$x[$i]['sales'];;
                      $issueQty=$x[$i]['issueQty'];
                      $serialNumber=$x[$i]['serialNumber'];
                      $dispatchedDate=$x[$i]['dispatchedDate'];


                      echo '
                        <tr id="rowno'.$i.'">
                          <td>
                            '.$itemCode.'
                            <input type="hidden" class="form-control form-control-sm" value ='.$itemCode.' name="itemCode" readonly/>
                          </td>
                          <td>
                            '.$sales.'
                             <input type="hidden" class="form-control form-control-sm" value ='.$sales.' name="sales" readonly/>
                          </td>
                          <td>
                           '.$issueQty.'
                           <input type="hidden" class="form-control form-control-sm" value ='.$issueQty.' name="issueQty" readonly/>
                          </td>
                          <td>
                            <textarea  type="text" class="form-control form-control-sm" name="serialNumber" required="required">'.$serialNumber.'</textarea>
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
             <input type="button" value="Edit Manual AOD" class="btn btn-primary btn-sm" onclick="editItems()"/>
             <input type="button" name="serchsubep" onclick="window.location='./AODTableMView';"   value="Cancle" class="btn btn-primary btn-sm"/>
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
  function editItems()
  {

     var table = $("#uptableitems");

     var editID=document.getElementById("editID").value;
     var poNo=document.getElementById("poNo").value;
     var customerName=document.getElementById("customerName").value;
     var other=document.getElementById("other").value;

     table.find('tr:gt(0)').each(function (i) {

     var $tds = $(this).find('td'),
     itemCode =$tds.eq(0).find("input").val();
     sales =$tds.eq(1).find("input").val();
     issueQty = $tds.eq(2).find("input").val();
     serialNumber = $tds.eq(3).find("textarea").val();
     dispatchedDate = $tds.eq(4).find("input").val();

      
      var z={"itemCode":itemCode,"sales":sales,"issueQty":issueQty,"serialNumber":serialNumber,"dispatchedDate":dispatchedDate};

      array.push({itemCode:itemCode,sales:sales,issueQty:issueQty,serialNumber:serialNumber,dispatchedDate:dispatchedDate
      });

      call2(array);
    

    });
   

      function call2(array) {

          var arrayNew = JSON.stringify(array);

          var editID=document.getElementById("editID").value;
          var poNo=document.getElementById("poNo").value;
          var customerName=document.getElementById("customerName").value;
          var other=document.getElementById("other").value;

          $.ajax({
              url:"./controller1",
              method:"POST",
              data:{newUpdateArray:arrayNew,editID:editID,poNo:poNo,customerName:customerName,other:other},
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
