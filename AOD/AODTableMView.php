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
          <a href="#">Manual AOD View</a>
        </li>
      </ol>
    <div class="container">
       <input type="text" name="search_text" id="search_text" placeholder="Search by Any Field " class="form-control  form-control-sm" />
       <br>
       <div id="result">

       </div>
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
            url:"./AODTableMView1",
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
