<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
    session_start();
    $email= $_SESSION['email'];
    if(!isset($_SESSION['email'])){
      header('Location: Index.php');
    }
    require '../include/config.php';
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
          <a href="#">Add New Supplier</a>
        </li>
      </ol>
      <div class="abtn">
         <input type="submit" value="Add Supplier" onclick="window.location='./addnewsupplierCreate.php';" class="btn btn-primary btn-sm" />
     </div>
     <div>
       <input type="text" name="search_text" id="search_text"  placeholder="Search by Any Field " class="form-control  form-control-sm" />
       <br>
       <div id="result">

       </div>
     </div>
     
     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>
   
  </div>
</body>

</html>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../table/supplier/supplierTB.php",
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
