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
      .name
      {
        color: #043e77;
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
          Ordered Items of (Purchase order No : <?php if(isset($_GET['sedit_id'])){ echo $_GET['sedit_id'];}?>)
        </li>
      </ol>
    <div class="container">
       <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Item Code</th>
         <th>Sales desc</th>
         <th>Aleady dispatched</th>
         <th>Create date</th>
         <th>Order Quantity</th>
         <td> </td>
        </tr>
       </thead>
       <tbody>
        <input type="hidden" id="result"/>
      <?php
        require '../include/config.php';
        if(isset($_GET['sedit_id']))
         {
            $itemAvailable=array();//available items quantity with item code
            $sedit_id=$_GET['sedit_id'];
            $query ="SELECT itemcode as pitemcode , createdate as pcreatedate ,pid as ppid FROM purchaseorderinfor WHERE pid = '$sedit_id' ";

            $result = mysqli_query($conn ,$query);
            $count =mysqli_num_rows($result);
            if($count==1)
            {
                $row = mysqli_fetch_array($result);
                // $x = json_decode("\"".$row["pitemcode"]."\"");
                 $x="".$row["pitemcode"]."";
                 $x = json_decode($x,true);


                 for($i=0;$i<sizeof($x);$i++)
                 {
                      $code=$x[$i]['item_code'];
                      $code1=$x[$i]['sales_dis'];
                      $code2=$x[$i]['orderq'];
                      $query1="SELECT quantity,gsalesdisc FROM goodentry where item_code ='$code'";
                      $result1 = mysqli_query($conn ,$query1);
                      $row1 = mysqli_fetch_array($result1);
                      //var_dump($row1[0]);
                      $itemAvailable[$x[$i]['item_code']] = $row1[0];

                       $query2="SELECT alreadyd FROM dispachinfor where ditem_code ='$code' AND dsales='$code1' AND dpid='".$_GET['sedit_id']."' ORDER BY alreadyd DESC limit 1";
                       $result2=mysqli_query($conn ,$query2);
                       $row2 = mysqli_fetch_array($result2);

                        echo '
                          <tr>
                          <td>'.$code.'</td>
                          <td>'.$code1.'</td>
                          <td>';
                            if(isset($row2[0]))
                            {
                              echo $row2[0];
                            }
                            else
                            {
                              echo "0";
                            }
                        echo '
                          </td>
                          <td>'.$row['pcreatedate'].'</td>
                          <td>'.$code2.'</td>
                          <td><input type="button" value="Add to Dispatch" onclick="myForm(\'' .$row["ppid"].  '\',\'' .$code1.  '\',\'' .$code.  '\',\'' .$code2.  '\',\'' .$sedit_id.  '\')" class="btn btn-primary btn-sm"/></td>
                          </tr>';
                  }
             }
         }
      ?>
    </div>
    <div class="">
      <div class="table-responsive">
        <form action="" method="POST">
          <table  class="table table-bordered table-striped table-responsive" width="1500px" id="dispachTable">
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
             <th>Return Qty</th>
             <th>Dispatched date</th>
             <th></th>
            </tr>
           </thead>
           <tbody>
          <div class="name">
          <b>Dispach Table</b><br><br>
          </div>
          <input type="hidden" id="result"/>
          <?php

            $selectView =1;
            $queryView ="SELECT * FROM aodView WHERE selectView='$selectView'";
            $resultView =mysqli_query($conn,$queryView);

            while($rowView = mysqli_fetch_array($resultView))
            {
            echo '
            <tr>
                <td>'.$rowView["poNo"].'</td>
                <input type="hidden" name="poNo" value="'.$rowView["poNo"].'"/>
                <td>'.$rowView["itemCode"].'</td>
                <input type="hidden" name="itemCode" value='.$rowView["itemCode"].'>
                <td>'.$rowView["sales"].'</td>
                <textarea type="hidden" style="display:none;"  name="sales">'.$rowView["sales"].'</textarea>
                <td>'.$rowView["alreadyDispathedAmount"].'</td>
                <input type="hidden" name="alreadyDispathedAmount" value='.$rowView["alreadyDispathedAmount"].'>
                <td>'.$rowView["orderQyt"].'</td>
                <input type="hidden" name="orderQyt" value='.$rowView["orderQyt"].'>
                <td>'.$rowView["availableQty"].'</td>
                <input type="hidden" name="availableQty" value='.$rowView["availableQty"].'>
                
                <td><input type="number" name="issueQty" class="form-control form-control-sm" min="0" step="0"/></td>
                <td><textarea type="text" name="serialNumber" class="form-control form-control-sm"></textarea></td>
                <td>Approved</td>

                <td><select type="text" class="form-control form-control-sm" name="returnQtyType">
                <option value="">Select</option>
                <option value="Full Return">Full Return</option>
                <option value="Partial Return">Partial Return</option>
                </select></td>

                <td><input type="number" name="returnQty"  class="form-control form-control-sm" min="0"/></td>
                <td><input type="text" name="dispatchedDate"  class="form-control form-control-sm" value='.date("Y-m-d").' readonly/></td>

                <td><input type="button" value ="Delete" onclick="myForm1('.$rowView["id"].')"  class="btn btn-primary btn-sm" /></td>
            </tr>
            ';
          
            }

         ?>
        </tbody>
        </table>
        <input type="button" value ="Dispatch"  onclick="myDispatch()" class="btn btn-primary btn-sm" />
        <input type="button" value="Go Back" onclick="window.location='./aCreateNewAODCreate';" class="btn btn-primary btn-sm" />
        </form>
        <div id="snackbar"><p id="msg_view"></p></div>
      </div>
     </div>
     <br>

     </div>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

   
  </div>
</body>

</html>
<script type="text/javascript">

function myForm1 (id){
  
  $.ajax({
          url:"./controller.php",
          method:"POST",
          data:{delete_id:id},
          success:function(data){
            location.reload();
          }
      });
}

  function goBack() {
    window.history.back();
}

function myForm(dispach_id ,dsale,itemcode,order,sedit_id) {

  $.ajax({
        url:"./controller.php",
        method:"POST",
        data:{dispach_id:dispach_id,dsale:dsale,itemcode:itemcode,order:order,sedit_id:sedit_id},
        success:function(data){

          location.reload();
        }
  });
        
}
  var array=[];
      
  // jQuery methods go here...
  function myDispatch() {

      var table = $("#dispachTable");

      var count = 0;

      table.find('tr:gt(0)').each(function (i) {

        var $tds = $(this).find('td'),
        poNo = $tds.eq(0).text();
        itemCode = $tds.eq(1).text();
        sales = $tds.eq(2).text();
        alreadyDispathedAmount = $tds.eq(3).text();
        orderQyt = $tds.eq(4).text();
        availableQty = $tds.eq(5).text();
        issueQty = $tds.eq(6).find("input").val();
        serialNumber = $tds.eq(7).find("textarea").val();
        status = $tds.eq(8).text();
        returnQtyType = $tds.eq(9).find("select").val();
        returnQty = $tds.eq(10).find("input").val();
        dispatchedDate = $tds.eq(11).find("input").val();

        var newCount = Number(alreadyDispathedAmount) + Number(issueQty);
 
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
              
              var z={"poNo":poNo,"itemCode":itemCode,"sales":sales,"alreadyDispathedAmount":newCount,"orderQyt":orderQyt,
              "availableQty":availableQty,"issueQty":issueQty,"serialNumber":serialNumber,"status":status,"returnQtyType":returnQtyType
              ,"returnQty":returnQty,"dispatchedDate":dispatchedDate};

              array.push({poNo:poNo,itemCode:itemCode,sales:sales,alreadyDispathedAmount:newCount,orderQyt:orderQyt,
                availableQty:availableQty,issueQty:issueQty,serialNumber:serialNumber,status:status,returnQtyType:returnQtyType,
                returnQty:returnQty,dispatchedDate:dispatchedDate
              });

              call1(array,poNo);
        }   

    });


    function call1(array,poNo) {

      var arrayNew = JSON.stringify(array);

      $.ajax({
          url:"./controller.php",
          method:"POST",
          data:{newArray:arrayNew,poNo:poNo},
          success:function(data){

            $('#msg_view').html(data);
            myMzg1();

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


    // Message  view
    function myMzg1() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

      // Location refech
      setTimeout(function(){

          $('#viewModal').modal('show');    

       },3000);
      
    }

    function PrintDiv(divID) {   

      //Get the HTML of div
      var divElements = document.getElementById(divID).innerHTML;
      //Get the HTML of whole page
      var oldPage = document.body.innerHTML;

      //Reset the page's HTML with div's HTML only
      document.body.innerHTML =
        "<html><head><title></title></head><body>" +
        divElements + "</body>";

      //Print Page
      window.print();

      //Restore orignal HTML
      document.body.innerHTML = oldPage;

    }



</script>



<div id="viewModal" class="modal fade">
  <div class="modal-dialog" style="max-width: 850px;">
        <div class="modal-content" style="height : auto;">
            <div class="modal-header">
                  <span style="font-size: 23px; font-family: monospace;"><b style="color: white;letter-spacing: 1.3px;">Inbound Request</b></span>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div id="PrintDiv">
                  <div class="l1" style="text-align: center;">
                    <h4>BHOOMI- TECH (PVT) LTD.</h4>
                    <p style="margin-bottom: 0px;">184, Hill Street Dehiwala</p>
                    <p style="margin-bottom: 0px;">Phone :0112-734550</p>
                    <p>Fax :0112-734550</p>
                  </div>
                  <div class="l2" style="text-align: center;">
                    <h4 style="border: 1px solid; max-width: 50%; margin: auto;  margin-bottom: 4%;">ADVICE OF DISPATCH</h4>
                  </div>

                  <?php

                      // database Connection
                        require '../include/config.php';

                        $query_obj ="SELECT * FROM dispachinfor ORDER BY id DESC LIMIT 1";
                        $result_obj =mysqli_query($conn,$query_obj);
             
                        while ($row=mysqli_fetch_array($result_obj))
                         {
                            $dpid =$row['poNo'];
                            $ddate =$row['createDate'];
                            $details =$row['details'];
                         }
             
                         $query ="SELECT * FROM purchaseorderinfor WHERE pid='".$dpid."'";
                         $result =mysqli_query($conn,$query);
             
                         while ($ro=mysqli_fetch_array($result))
                          {
                             $customername =$ro['customername'];
                             $customeraddress =$ro['customeraddress'];
                             $customersite =$ro['customersite'];
                          }


                    
                  ?>
                  <div class="" style="height: 100px; margin-left: 10%; margin-right: 10%;">
                    <div class="l3d1" style="max-width: 50%;  float: left;">
                      <label for="[object Object]">Messers</label><span style="margin-left: 35px;"><?php echo $customerName;  ?></span><br>
                      <label for="[object Object]">Address</label><span style="margin-left: 35px;"><?php echo "$customeraddress / $customersite"; ?></span><br>
                      <label for="[object Object]">Customer's.</label><span style="margin-left: 10px;"><?php echo $pno; ?></span>
                    </div>
                    <div class="l3d1" style="max-width: 50%;  float: right;">
                      <label for="[object Object]">No</label><span style="margin-left: 47px;"><?php echo "$dpid"; ?></span><br>
                      <label for="[object Object]">Date</label><span style="margin-left: 35px; margin-right: 5px;"><?php echo "$ddate"; ?></span>
                    </div>
                  </div>
                  <div class="" style="margin-left: 10%; margin-right: 10%;">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Serial No</th>
                            <th>Description of Goods / Items</th>
                            <th>Quantity</th>
                          </tr>
                        </thead>
                      
                          <?php  
                            $json = json_decode($details, true);

                            $num =1;

                            for($i=0;$i<sizeof($json);$i++)
                            {
                                echo ' <tr>';
                                echo '<td>'.$num.'</td>';
                                echo '<td>'.$json[$i]['sales'].' '.$json[$i]['serialNumber'].'</td>';
                                echo '<td>'.$json[$i]['issueQty'].'</td>';
                                echo  '</tr>';
                                $num++;
                            }

                        ?>
                        <tbody>

                        </tbody>
                    </table>
                    <p>The relevant Invoice will be send to you in due course.</p>
                  </div>
                  <div class="" style="height: 100px; margin-left: 10%; margin-right: 10%;">
                    <div class="sd1" style="float: right;">
                      <p>..........................................</p>
                      <p style="margin-bottom: 0px;">Executive Sale / Manager</p>
                      <p>BHOOMI-TECH</p>
                    </div>
                </div>
                <div class="" style="margin-left: 10%; margin-right: 10%;">
                  <p>Invoice Reference</p>
                  <p style="margin-bottom: 0px;">....................................................................................................................................................</p>
                  <p>Received the above Instrument / Equipments / in goods oders / condition.</p>
                </div>
                <br>
                <div class="" style="margin-left: 10%; margin-right: 10%; height: 100px;">
                  <div class="l3d1" style="max-width: 40%;  float: left;">

                    <label for="[object Object]">Date</label><span style="margin-left: 10px;">...................................</span>
                  </div>
                  <div class="l3d1" style="max-width: 50%;  float: right;">
                    <p>..........................................</p>
                    <p style="margin-bottom: 0px;">Signature of Recipient</p>
                    <p>Company Seal</p>
                  </div>
                </div>
              </div>
            <div class="">
              <input type="button" value="Print" onclick="PrintDiv('PrintDiv');"  class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb; margin-left: 10%; "/>
              <input type="button" value="Close"  class="btn btn-primary btn-sm" data-dismiss="modal" style="background: #56b8fb; color: white; border-color: #56b8fb;  margin-right: 10%;"/>
            </div>
        </div>
  </div>
</div>





