
<?php
   
    include('../include/check.php');

    if(isset($_GET['pid']))
    {

     $value =$_GET['pid'];
     $query ="SELECT * FROM purchaseorderinfor WHERE pid='$value'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $pid =$row['pid'];
        $customerorderno =$row['customerorderno'];
        $customername =$row['customername'];
        $customeraddress =$row['customeraddress'];
        $customersite =$row['customersite'];
        $createby =$row['createby'];
        $createdate =$row['createdate'];
        $podate =$row['podate'];
        $poreceiveddate =$row['poreceiveddate'];
        $deadlinedate =$row['deadlinedate'];

     }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('../include/head.php') ?>

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
          <a href="#">Assign Items into Purchase Order</a>
        </li>
      </ol>

    <div class="container">
        <form action="aCreateNewPurchaseOrderCont.php" method="POST">
           <input type="hidden" id="myitems" name="myitems"/>
           <div class="align">
             <div class="column-left">
               <div class="form-group">
                   <label for="pwd">Purchase ID</label>
                   <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" value="<?php if(isset($pid)){ echo $pid;}?>" required="required" readonly/>
                   </div>
               </div>
              <div class="form-group">
                  <label for="pwd">Customer Order's No</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" value="<?php if(isset($customerorderno)){ echo $customerorderno;}?>" required="required" readonly/>
                  </div>
              </div>
              <div class="form-group">
               <label for="pwd">Customer Name</label>
                <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" value="<?php if(isset($customername)){ echo $customername;}?>" required="required" readonly/>
                </div>
             </div>
             <div class="form-group">
               <label for="pwd">Customer Address</label>
                <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" value="<?php if(isset($customeraddress)){ echo $customeraddress;}?>" required="required" readonly/>
                </div>
             </div>
             <div class="form-group">
               <label for="pwd">Customer Site</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control form-control-sm" value="<?php if(isset($customersite)){ echo $customersite;}?>" required="required" readonly/>
                </div>
             </div>

           </div>

           <div class="column-right">
              <div class="form-group">
                  <label for="pwd">Create By</label>
                  <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="createby" value="<?php if(isset($createby)){ echo $createby;}?>" required="required" readonly/>
                  </div>
              </div>
              <div class="form-group">
                <label for="pwd">Create Date</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" value="<?php if(isset($createdate)){ echo $createdate;}?>" required="required" readonly/>
                </div>
             </div>
              <div class="form-group">
                  <label for="pwd">PO Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($podate)){ echo $podate;}?>"  name="podate" required="required" readonly/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">PO Received Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($poreceiveddate)){ echo $poreceiveddate;}?>"  name="poreceiveddate" required="required" readonly/>
                  </div>
              </div>
               <div class="form-group">
                  <label for="pwd">Deadline Date</label>
                  <div class="col-sm-3">
                   <input type="date" class="form-control form-control-sm" value="<?php if(isset($deadlinedate)){ echo $deadlinedate;}?>" name="deadlinedate" required="required" readonly/>
                  </div>
              </div>

           </div>
          </div>
           <div class="form-inline">
               <div class="col-sm-3">
                <input type="text" name="item_code" id="item_code" placeholder="Search by item code" class="form-control  form-control-sm" />
              </div>
              <div class="col-sm-3">
                <input type="text" name="po" id="po" placeholder="Search by Purchase" class="form-control  form-control-sm" />
              </div>
               <div class="col-sm-3">
                <input type="text" name="sales" id="sales" placeholder="Search by Sales" class="form-control  form-control-sm" />
              </div>
            
          </div>
          <br>

      </form>
       <div id="result">

       </div>
       <br><br>
    <form action="aCreateNewPurchaseOrderCont" method="POST" id="itemselectForm" enctype="application/json" >
      <input type="hidden" id="myitemjson" name="myitemjson"/>
      <input type="hidden"  name="pid" value="<?php if(isset($pid)) {echo $pid;}  ?>" />
      <div id="editableitemsDIV">
        <table id="editableitems" class="table table-bordered table-striped">
        <thead>
          <tr>
          <th>Item Code</th>
          <th>Sales desc</th>
          <th>Quantity</th>
          <th>Available quantity</th>
          <th>Reminder</th>
          <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
          $query ="SELECT * FROM temp";

          $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result))
        {
          echo '
          <tr>
          <td>'.$row["item_code"].'</td>
          <input type="hidden" name="item_code" value="'.$row["item_code"].'">
          <td>'.$row["sales_dis"].'</td>
          <input type="hidden" name="sales_dis" value="'.$row["sales_dis"].'">
          <td><input type="text" class="form-control  form-control-sm" name="orderq"></td>
          <td>'.$row["available_quantity"].'</td>
          <td><textarea type="text" name="reminder" class="form-control form-control-sm"></textarea></td>
          <input type="hidden" name="available_quantity" value="'.$row["available_quantity"].'">
          <td>
              <input type="button" class="btn btn-primary btn-sm" onclick="myDelete('.$row["id"].')" value="Delete"/>
          </td>
          </tr>
          ';

        }
        ?>
        </tbody>
        </table>
      </div>

      <input type="button" class="btn btn-primary btn-sm" name="addfeld" onclick="add_button()" value="Save" name="updateitems" required="required"/>
     </form>
    </div>

    </div>
    <br><br>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>   

</div>
</body>

</html>
<script type="text/javascript">

     function myDelete(id) {

      $.ajax({
          url:"./psdeleteView",
          method:"POST",
          data:{delete_id:id},
          success:function(data){

            $("#editableitemsDIV").load(window.location.href + " #editableitemsDIV");
            
          }
      });
       
     }

</script>
<script>
$(document).ready(function(){

 //load_data();

 function load_data(item_code,po,sales)
 {

  $.ajax({
   url:"./psSelectView",
   method:"POST",
   data:{item_code:item_code,po:po,sales:sales},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#item_code').keyup(function(){
  aload();
 });
 $('#po').keyup(function(){
  aload();
 });
 $('#sales').keyup(function(){
  aload();
 });
 // $('#itemcategory').keyup(function(){
 //  aload();
 // });
 function aload()
 {
  var item_code = $('#item_code').val();
  var po = $('#po').val();
  var sales = $('#sales').val();
  //ar itemcategory = $('#itemcategory').val();
  if(item_code !='' ||po !='' ||sales !='')
  {
   load_data(item_code,po,sales);
  }
  else
  {
    load_data();
  }
 }
});
</script>


<script type="text/javascript">

      var array=[];
      
   // jQuery methods go here...
    function add_button() {

      var table = $("#editableitems");

       table.find('tr:gt(0)').each(function (i) {

       var $tds = $(this).find('td'),
       item_code = $tds.eq(0).text();
       sales_dis = $tds.eq(1).text();
       //cdate =$tds.eq(2).find("input").val();
       orderq = $tds.eq(2).find("input").val();
       available_quantity = $tds.eq(3).text();
       reminder = $tds.eq(4).find("textarea").val();


       //alert(item_code);
       var z={"item_code":item_code,"sales_dis":sales_dis,"orderq":orderq,"available_quantity":available_quantity,"reminder":reminder};

       array.push({item_code:item_code,sales_dis:sales_dis,orderq:orderq,available_quantity:available_quantity,reminder:reminder});

     });
     console.log(JSON.stringify(array, null, 1));
       $('#myitemjson').val(JSON.stringify(array));
       $('#itemselectForm').submit();
       // alert("Your Data "+cdate+" "+orderq+" "+JSON.stringify(array, null,1));
    }


</script>
