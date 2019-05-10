<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
   
    error_reporting(0);

    include('../include/check.php'); 
  
     $rid  =$_GET['cview_id'];
     $query_se ="SELECT * FROM categoryreportinfor WHERE id='$rid'";
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

      echo '<div id="printablediv">';
      echo '
         <div class="form-group">
             <div class="col-sm-3">';
                echo "Report Title  :".$title;
      echo '  </div>
          </div>';

          if(isset($x["rcategory"]))
           {
             $rcategory =$x["rcategory"];
           }

          $selectedc=array();
          foreach(array_keys($_POST) as $key)
          {
             if($key=="rcategory")
             {
                $selectedc[$key]=$rcategory;
             }
          }
          // arry  insert into  database code..........................................................

          // arry  insert into  database code..........................................................

          // Logic to  save the query items end

          $queryr ="SELECT * FROM iteminfor WHERE 	itemcategory='$rcategory'";
          $resultr =mysqli_query($conn,$queryr);
          $getvalue =array();
          $i =1;
          while($rowr = mysqli_fetch_array($resultr))
          {
            $getvalue[$i] =$rowr['item_code'];
            $i++;
          }
          //$value = json_encode($getvalue);
          // echo $value;
          // ************************************************************************
          echo '


          <table id="editable_table" class="table table-bordered table-striped">
           <thead>
            <tr>
             <th>Item Code</th>
             <th>Purchase description</th>
             <th>Stock amount</th>
            </tr>
           </thead>
           <tbody>
          ';
           for($y=1;$y<$i;$y++)
           {
              $queryrc ="SELECT r_itemcode,r_purchasedisc, r_quantity as amount  FROM  realgoodentry WHERE r_itemcode='$getvalue[$y]'";
              $resultrc =mysqli_query($conn,$queryrc);

              // Logic - include the items that are not in status of "Dispatched"
              $query_check ="SELECT ditem_code FROM dispachinfor WHERE ditem_code='$getvalue[$y]'";
              $result_check =mysqli_query($conn, $query_check);
              $count =mysqli_num_rows($result_check);

              while($rowc = mysqli_fetch_array($resultrc))
              {
                   if($count==0)
                   {
                      echo '<tr>';
                      if($rowc['r_itemcode']!=null){
                         echo '<td>'.$rowc['r_itemcode'].'</td>';
                      }
                      if($rowc['r_purchasedisc']!=null){
                         echo '<td>'.$rowc['r_purchasedisc'].'</td>';
                      }
                      if($rowc['amount']!=null){
                         echo '<td>'.$rowc['amount'].'</td>';
                      }

                      echo '</tr>';
                   }
              }
           }
           echo '
           </tbody>
          </table>
        </div>';

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
