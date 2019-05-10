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

     //$_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM goodentry WHERE purchaseid='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $purchaseid =$row['purchaseid'];
        $suppliername =$row['suppliername'];
        $supplierinvoiceno =$row['supplierinvoiceno'];
        $item_code =$row['item_code'];
        $purchasedisc =$row['purchasedisc'];
        $salesdisc =$row['gsalesdisc'];
        $quantity =$row['quantity'];

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
     .salign
     {
      margin-left: 25px;
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
          <a href="#">Add New Good Entry</a>
        </li>
      </ol>
    </div>
    <div class="salign">
        <div class="abtn">
          <input type="submit" value="Add Good Entry" onclick="window.location='./addnewgoodentryCreate'" class="btn btn-primary btn-sm" />
        </div>
        <input type="text" name="search_text" id="search_text"  placeholder="Search by Supplier Name" class="form-control  form-control-sm" />
         <br>
        <div id="result"></div>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>

 <script type="text/javascript">

     $(document).ready(function(){
      $('#select1').keyup(function(){
           var item_code = $(this).val();
           $.ajax({
                url:"addgoodCont.php",
                method:"POST",
                data:{item_code:item_code},
                success:function(data){
                     $('#show_product_text').val(data);

                }
           });
      });
 });
</script>
  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../table/goodEntity/goodEntityTB",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
