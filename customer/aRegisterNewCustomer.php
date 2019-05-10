<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <?php include('../include/head.php') ?>

   <style type="text/css">
     .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%; }
    .column-center{ display: inline-block; width: 33%; }
    .abtn
    {
     margin-left: 15px;
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
          <a href="#">Register New Customer</a>
        </li>

      </ol>
       <div class="abtn">
         <input type="submit" value="Add Customer" onclick="window.location='./aRegisterNewCustomerCreate'" class="btn btn-primary btn-sm" />
     </div>
     <div>
       <input type="text" name="search_text" id="search_text"  placeholder="Search by Any Field " class="form-control  form-control-sm" />
       <br>
       <div id="result">
      
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>
   
  </div>
</body>

</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
  {
      $.ajax({
      url:"../table/customer/customerTB.php",
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
