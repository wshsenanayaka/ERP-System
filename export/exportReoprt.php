<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>

   <?php include('../include/head.php') ?>
   
   <style type="text/css">
     .abtn
     {
      margin-left: 15px;
     }
    /* .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%; }
    .column-center{ display: inline-block; width: 33%; }*/
    .abtn
    {
      float: right;
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
        <a href="#">Export - Generate Report</a>
     </li>
    </ol>
     <div class="abtn">
         <input type="submit" value="Generate Report" onclick="javascript:printDiv('printablediv');" class="btn btn-primary btn-sm" />
         <input type="submit" value="Back" onclick="window.location='exportView';" class="btn btn-primary btn-sm" />
     </div>
     <div>
       <input type="text" name="searchText" id="searchText" class="form-control  form-control-sm" placeholder="Search by Supplier Name " style="width: 30%;"/>
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
        url:"./exportReoprtTable",
        method:"POST",
        data:{query:query},
          success:function(data)
          {
            $('#result').html(data);
          }
        });
    }

 $('#searchText').keyup(function(){

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
