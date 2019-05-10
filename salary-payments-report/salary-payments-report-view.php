<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
  
    error_reporting(0);
    include('../include/check.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
.column-left{ float: left; width: 33%; }
.column-right{ float: right; width: 33%;  margin-top: 75px; height: 800px!important;}
.column-center{ display: inline-block; width: 33%; margin-top: 75px; height: 800px;}
#select-column
{
  width: 200px;
}
#select-btn
{
  margin-left: 150px;
}
#btn-view
{
  float: right;
}
.back_btn
{
   float: right;
   margin-top: -30px;
}

</style>

 <?php include('../include/head.php') ?>

</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Salary Payments Report View
        </li>
      </ol>
      <div class="searchtext">
        <input type="text" name="search_text" id="search_text" placeholder="Search by Report Title " class="form-control  form-control-sm" />
      </div>
      <div class="back_btn">
        <input type="button" value="Go Back" onclick="window.location='salary-payments-report';" class="btn btn-primary btn-sm" />
      </div>
       <br>
       <div id="result">

       </div>

  </div>
</div>
    <!-- /.content-wrapper-->

  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>

    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"./salary-payments-report-table",
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
