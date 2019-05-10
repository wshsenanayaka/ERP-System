<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
     include('../include/check.php');

     $rid  =$_GET['view_id'];
     $query_se ="SELECT * FROM reportinfor WHERE id='$rid'";
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

      if(isset($x["company"]))
       {
         $company =$x["company"];
       }
      //  $key=="firstname"
       if (isset($x["firstname"])) {

          $firstname =$x["firstname"];
        //  echo $firstname;
       }

       if (isset($x["lastname"])) {
         $lastname =$x["lastname"];
       }
       if (isset($x["othername"])) {

        $othername =$x["othername"];

       }

       if (isset($x["caddress"])) {
         //echo '<th>Current Address</th>';
         $caddress =$x["caddress"];
       }

       if (isset($x["paddress"])) {
         //echo '<th>Permenent Address</th>';
         $paddress =$x["paddress"];

       }

       if (isset($x["email"])) {
         //echo '<th>Email</th>';
          $emaildb =$x["email"];

       }

       if (isset($x["telephone"])) {
         // echo '<th>Telephone</th>';
           $telephone =$x["telephone"];
       }

       if(isset($x["mobile"])) {
         // echo '<th>Mobile</th>';
         $mobile =$x["mobile"];
       }

       if (isset($x["gender"])) {
         // echo '<th>Gender</th>';
          $gender =$x["gender"];
       }

       if (isset($x["accno"])) {
         // echo '<th>Account No</th>';
          $accno =$x["accno"];
       }

       if (isset($x["bank"])) {
         // echo '<th>Bank</th>';
          $bank =$x["bank"];

       }

       if (isset($x["barnch"])) {
         // echo '<th>Branch</th>';
          $barnch =$x["barnch"];
       }

       if (isset($x["nation"])) {
         // echo '<th>Nationality</th>';
        $nation =$x["nation"];
       }

       if (isset($x["pno"])) {

        $pno =$x["pno"];
       }

       if (isset($x["nic"])) {
         // echo '<th>NIC</th>';
        $nic =$x["nic"];
       }

       if (isset($x["bod"])) {
         // echo '<th>BOD</th>';
         $bod =$x["bod"];
       }


       if (isset($x["empno"])) {
         // echo '<th>Emp No</th>';
        $empno =$x["empno"];
       }

       if (isset($x["emptype"])) {
         // echo '<th>Emp Type</th>';
        $emptype =$x["emptype"];
       }

       if (isset($x["designation"])) {
         // echo '<th>Designation</th>';
        $designation =$x["designation"];
       }

       if (isset($x["epfno"])) {
         // echo '<th>EPF No</th>';
         $epfno =$x["epfno"];
       }

       if (isset($x["department"])) {
         // echo '<th>Department</th>';
         $department =$x["department"];
       }

       if (isset($x["doj"])) {
         // echo '<th>Date Of Join</th>';
          $doj =$x["doj"];
       }

       if (isset($x["srm"])) {
         // echo '<th>Sal Recepit Method</th>';
         $srm =$x["srm"];
       }

      $queryse ="SELECT * FROM employeeinfor WHERE  company='$company' OR firstname='$firstname' OR  lastname='$lastname' OR   othername='$othername' OR caddress='$caddress' OR paddress='$paddress' OR email='$emaildb' OR telephone='$telephone' OR mobile='$mobile' OR gender='$gender' OR accno='$accno' OR bank='$bank' OR barnch='$barnch' OR nation='$nation' OR pno='$pno' OR nic='$nic' OR bod='$bod' OR empno='$empno' OR emptype='$emptype' OR designation='$designation' OR epfno='$epfno' OR department='$department' OR doj='$doj' OR srm='$srm'";

      $resultse =mysqli_query($conn,$queryse);
      $count =mysqli_num_rows($resultse);

      echo '<div id="printablediv">';
      echo '
         <div class="form-group">
             <div class="col-sm-3">';
                echo "Report Title  :".$title;
      echo '  </div>
          </div>

         <div class="table-sm">
          <table  class="table table-bordered table-striped table-responsive">
          <thead>
           <tr>';

             if(isset($x["company"]))
             {
               echo '<td>Company</td>';

             }
             if(isset($x["firstname"]))
             {
               echo '<td>First Name</td>';

             }
             if(isset($x["lastname"]))
             {
               echo '<td>Last Name</td>';
             }
             if(isset($x["othername"]))
             {
               echo '<td>Other Name</td>';
             }

             if(isset($x["caddress"]))
             {
               echo '<td>Current Address</td>';
             }
             if(isset($x["paddress"]))
             {
               echo '<td>Permenent Address</td>';
             }

              if(isset($x["email"]))
             {
               echo '<td>Email/td>';
             }
             if(isset($x["telephone"]))
             {
               echo '<td>Telephone</td>';
             }

              if(isset($x["mobile"]))
             {
               echo '<td>Mobile</td>';
             }
             if(isset($x["gender"]))
             {
               echo '<td>Gender</td>';
             }

              if(isset($x["accno"]))
             {
               echo '<td>Account No</td>';
             }
             if(isset($x["bank"]))
             {
               echo '<td>Bank</td>';
             }
              if(isset($x["barnch"]))
             {
               echo '<td>Branch</td>';
             }
             if(isset($x["nation"]))
             {
               echo '<td>Nationality</td>';
             }

             if(isset($x["nic"]))
             {
               echo '<td>NIC</td>';
             }
             if(isset($x["bod"]))
             {
               echo '<td>BOD</td>';
             }

             if(isset($x["empno"]))
             {
               echo '<td>Emp No</td>';
             }
             if(isset($x["emptype"]))
             {
               echo '<td>Emp Type</td>';
             }

             if(isset($x["designation"]))
             {
               echo '<td>Designation</td>';
             }
             if(isset($x["epfno"]))
             {
               echo '<td>EPF No</td>';
             }

              if(isset($x["department"]))
             {
               echo '<td>Department</td>';
             }
             if(isset($x["doj"]))
             {
               echo '<td>Date Of Join</td>';
             }
             if(isset($x["srm"]))
             {
               echo '<td>Sal Recepit Method</td>';
             }


       echo '
         </tr>
        </thead>
        <tbody>
       </tr>
       ' ;
       while($row = mysqli_fetch_array($resultse))
       {
          echo '<tr>';

           if(isset($x["company"]))
           {
             echo '<td>'.$row["company"].'</td>';
           }
           if(isset($x["firstname"]))
           {
             echo '<td>'.$row["firstname"].'</td>';
           }
           if(isset($x["lastname"]))
           {
             echo '<td>'.$row["lastname"].'</td>';
           }
           if(isset($x["othername"]))
           {
             echo '<td>'.$row["othername"].'</td>';
           }

           if(isset($x["caddress"]))
           {
             echo '<td>'.$row["caddress"].'</td>';
           }

           if(isset($x["paddress"]))
           {
             echo '<td>'.$row["paddress"].'</td>';
           }

            if(isset($x["email"]))
           {
             echo '<td>'.$row["email"].'</td>';
           }
           if(isset($x["telephone"]))
           {
             echo '<td>'.$row["telephone"].'</td>';
           }

            if(isset($x["mobile"]))
           {
             echo '<td>'.$row["mobile"].'</td>';
           }
           if(isset($x["gender"]))
           {
             echo '<td>'.$row["gender"].'</td>';
           }

            if(isset($x["accno"]))
           {
             echo '<td>'.$row["accno"].'</td>';
           }
           if(isset($x["bank"]))
           {
             echo '<td>'.$row["bank"].'</td>';
           }
            if(isset($x["barnch"]))
           {
             echo '<td>'.$row["barnch"].'</td>';
           }
           if(isset($x["nation"]))
           {
             echo '<td>'.$row["nation"].'</td>';
           }

           if(isset($x["nic"]))
           {
             echo '<td>'.$row["nic"].'</td>';
           }
           if(isset($x["bod"]))
           {
             echo '<td>'.$row["bod"].'</td>';
           }

           if(isset($x["empno"]))
           {
             echo '<td>'.$row["empno"].'</td>';
           }
           if(isset($x["emptype"]))
           {
             echo '<td>'.$row["emptype"].'</td>';
           }

           if(isset($x["designation"]))
           {
             echo '<td>'.$row["designation"].'</td>';
           }
           if(isset($x["epfno"]))
           {
             echo '<td>'.$row["epfno"].'</td>';
           }

            if(isset($x["department"]))
           {
             echo '<td>'.$row["department"].'</td>';
           }
           if(isset($x["doj"]))
           {
             echo '<td>'.$row["doj"].'</td>';
           }
           if(isset($x["srm"]))
           {
             echo '<td>'.$row["srm"].'</td>';
           }
            echo '</tr>';
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
   url:"./employee-report-view-table",
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
