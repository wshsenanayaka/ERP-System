<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

    include('../include/check.php');

    error_reporting(0);
  
     $rid  =$_GET['sview_id'];
     $query_se ="SELECT * FROM suppliedreportinfor WHERE id='$rid'";
     $result_se =mysqli_query($conn,$query_se);
     while ($row=mysqli_fetch_array($result_se))
     {
        $title =$row['title'];
        $col =$row['col'];
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
.column-left{ float: left; width: 33%; }
.column-right{ float: right; width: 33%;  margin-top: 75px; height: 800px!important;}
.column-center{ display: inline-block; width: 33%; margin-top: 75px; height: 800px;}
.table-sm
{
  width: 100%;
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
           Report ID:<?php echo $rid; ?>
        </li>
      </ol>
      <?php
      $newcol =json_decode($col);

      $x="".$col."";
      $x = json_decode($x,true);

      if(isset($x["ritemcode"]))
       {
         $ritemcode =$x["ritemcode"];
       }
      if(isset($x["rpurchasedisc"]))
       {
          $rpurchasedisc =$x["rpurchasedisc"];
       }
      if(isset($x["rsalesdisc"]))
       {
          $rsalesdisc =$x["rsalesdisc"];
       }

       $queryr ="SELECT * FROM purchaseorderinfor";
       $resultr =mysqli_query($conn,$queryr);

      echo '<div id="printablediv">';
      echo '
         <div class="form-group">
             <div class="col-sm-3">';
                echo "Report Title  :".$title;
      echo '  </div>
          </div>

        <div class="table-sm">
         <table id="editable_table" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>Item Code</th>
            <th>Sales desc</th>
            <th>PO number</th>
            <th>Customer name</th>
           </tr>
          </thead>
          <tbody>' ;
          while($row = mysqli_fetch_array($resultr))
          {
              $x="".$row['itemcode']."";
              $x = json_decode($x,true);
              for($i=0; $i<sizeof($x);$i++)
              {
               $code=$x[$i]['item_code'];
               $code1=$x[$i]['sales_dis'];
               // echo '<option value="'.$code.'">'.$code.'</option>';
                 if($ritemcode==$code && $rsalesdisc==$code1)
                 {
                    echo '<tr>';
                    echo '<td>'.$code.'</td>';
                    echo '<td>'.$code1.'</td>';
                    echo '<td>'.$row['pid'].'</td>';
                    echo '<td>'.$row['customername'].'</td>';
                    echo '</tr>';
                 }
              }
           }
           echo '
           </tbody>
          </table>
          </form>
          </div>
         </div>
  ';
?>
  <input type="button" value ="Cancle" onclick="goBack()" class="btn btn-primary btn-sm" />

  <input type="button" value="Print" onclick="javascript:printDiv('printablediv')" class="btn btn-primary btn-sm" />
  </div>
</div>
    <!-- /.content-wrapper-->

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>
  
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
   url:"employee-report-view-table",
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
<script type="text/javascript">
  function goBack() {
    window.history.back();
}
</script>
<script language="javascript" type="text/javascript">
       function printDiv(divID) {
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
