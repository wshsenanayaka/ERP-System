<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
  
    error_reporting(0);

    include('../include/check.php');
  
     $sid  =$_GET['sview_id'];
     $query_se ="SELECT * FROM resalarypay WHERE id='$sid'";
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
           Report ID:<?php echo $sid; ?>
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
       if (isset($x["empno"])) {

        $empno =$x["empno"];
       }
       if (isset($x["epfno"])) {
         //echo '<th>Current Address</th>';
         $epfno =$x["epfno"];
       }
       if (isset($x["designation"])) {
         //echo '<th>Current Address</th>';
         $designation =$x["designation"];
       }
       if (isset($x["year"])) {
         //echo '<th>Permenent Address</th>';
         $year =$x["year"];
       }
       if (isset($x["month"])) {
         //echo '<th>Email</th>';
          $month =$x["month"];
       }
       if (isset($x["department"])) {
         //echo '<th>Permenent Address</th>';
         $department =$x["department"];
       }
       if (isset($x["srm"])) {
         // echo '<th>Telephone</th>';
           $srm =$x["srm"];
       }
       if (isset($x["deductions"])) {
         // echo '<th>Gender</th>';
          $deductions =$x["deductions"];
       }
       if (isset($x["netsal"])) {
         // echo '<th>Account No</th>';
          $netsal =$x["netsal"];
       }
       if(isset($x["epfpaid"])) {
         // echo '<th>Mobile</th>';
         $epfpaid =$x["epfpaid"];
       }
       if(isset($x["etppaid"])) {
         // echo '<th>Mobile</th>';
         $etppaid =$x["etppaid"];
       }
       if(isset($x["totalcontri"])) {
         // echo '<th>Mobile</th>';
         $totalcontri =$x["totalcontri"];
       }

       $queryse ="SELECT * FROM employeeinfor WHERE  company='$company' OR firstname='$firstname' OR  lastname='$lastname' OR  empno='$empno' OR  epfno='$epfno'";

       $resultse =mysqli_query($conn,$queryse);
       $count =mysqli_num_rows($resultse);

       if($month=="January")
       {
         $value =1;
       }
       elseif ($month=="February")
       {
          $value =2;
       }
       elseif ($month=="March")
       {
          $value =3;
       }
       elseif ($month=="April")
       {
          $value =4;
       }
       elseif ($month=="May")
       {
          $value =5;
       }
       elseif ($month=="June")
       {
          $value =6;
       }
       elseif ($month=="July")
       {
          $value =7;
       }
       elseif ($month=="August")
       {
          $value =8;
       }
       elseif ($month=="September")
       {
          $value =9;
       }
       elseif ($month=="October")
       {
          $value =10;
       }
       elseif ($month=="November")
       {
          $value =11;
       }
       elseif($month=="December")
       {
          $value =12;
       }
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
                if(isset($x["empno"]))
                {
                  echo '<td>EMP No</td>';
                }
                if(isset($x["epfno"]))
                {
                  echo '<td>EPF No</td>';
                }
                if(isset($x["designation"]))
                {
                  echo '<td>Designation</td>';
                }
                if(isset($x["year"]))
                {
                  echo '<td>Year</td>';
                }
                 if(isset($x["month"]))
                {
                  echo '<td>Month</td>';
                }
                 if(isset($x["department"]))
                {
                  echo '<td>Department</td>';
                }
                if(isset($x["srm"]))
               {
                 echo '<td>Sal Recepit Method</td>';
               }
                if(isset($x["deductions"]))
                {
                  echo '<td>Deductions</td>';
                }
                 if(isset($x["netsal"]))
                {
                  echo '<td>Net sal</td>';
                }
                if(isset($x["epfpaid"]))
               {
                 echo '<td>EPF Paid</td>';
               }
               if(isset($x["etppaid"]))
               {
                echo '<td>ETP Paid</td>';
               }
               if(isset($x["totalcontri"]))
              {
                echo '<td>Total Contri</td>';
              }
          echo '
            </tr>
           </thead>
           <tbody>
          </tr>
          ' ;
          $query ="SELECT * FROM employeeinfor WHERE id is not null";
           if(isset($company) && $company!=null){
           $query= $query." AND company='$company' "; }
           if(isset($firstname) && $firstname!=null){
           $query=$query." AND firstname='$firstname' ";}
           if(isset($lastname)  && $lastname!=null) {
           $query=$query." AND lastname='$lastname' ";}
           if(isset($empno) && $empno!=null) {
           $query=$query." AND empno='$empno' ";}
           if(isset($designation) && $designation!=null){
           $query=$query." AND designation='$designation' ";}
           if(isset($epfno) && $epfno!=null) {
           $query=$query." AND epfno='$epfno' ";}
           if(isset($department) && $department!=null) {
           $query=$query." AND department='$department' ";}
           if(isset($srm) && $srm!=null){
           $query=$query." AND srm='$srm' ";}

          $result =mysqli_query($conn,$query);

             $rowcount=mysqli_num_rows($result);


                 while($row11 = mysqli_fetch_array($result))
                 {
                  echo
                   "<tr>";
                  $_SESSION['id']=$row11['id'];
                  $pid = $row11['packageid'];
                  $id =$row11['id'];


                        $queryadd ="SELECT * FROM salarypackagesinfor WHERE id ='".$pid."'";
                        $resultadd =mysqli_query($conn,$queryadd);
                         while($row = mysqli_fetch_array($resultadd))
                          {
                            $spnamese = $row['spname'];
                          }
                          $add ="add";
                          $ded ="ded";

                          $tablename1 =$spnamese.$add;
                          $tablename2 =$spnamese.$ded;
                          $editsp =0;
                          //$_SESSION['tablename1']=$tablename1;

                          $querytable1 ="SELECT * FROM $tablename1 WHERE id ='$id'";

                          $resultable1 =mysqli_query($conn,$querytable1);
                         while($row = mysqli_fetch_array($resultable1))
                         {
                          $id = $row['id'];

                          if($value>=date("m",strtotime($row['fbs'])) AND $value<=date("m",strtotime($row['tbs'])) AND $year>=date("Y",strtotime($row['fbs'])) AND $year<=date("Y",strtotime($row['tbs'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fbs']))<=(strtotime($row['tbs'])-strtotime($row['fbs'])))
                              {
                                $bs = $row['bs'];
                              }
                              else
                              {
                                $bs=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fba'])) AND $value<=date("m",strtotime($row['tba'])) AND $year>=date("Y",strtotime($row['fba'])) AND $year<=date("Y",strtotime($row['tba'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fba']))<=(strtotime($row['tba'])-strtotime($row['fba'])))
                              {
                                 $ba = $row['ba'];
                              }
                              else
                              {
                                $ba=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fmm'])) AND $value<=date("m",strtotime($row['tmm'])) AND $year>=date("Y",strtotime($row['fmm'])) AND $year<=date("Y",strtotime($row['tmm'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fmm']))<=(strtotime($row['tmm'])-strtotime($row['fmm'])))
                              {
                                 $mm = $row['mm'];
                              }
                              else
                              {
                                $mm=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['ftrv'])) AND $value<=date("m",strtotime($row['ttrv'])) AND $year>=date("Y",strtotime($row['ftrv'])) AND $year<=date("Y",strtotime($row['ttrv'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['ftrv']))<=(strtotime($row['ttrv'])-strtotime($row['ftrv'])))
                              {
                                  $trv = $row['trv'];
                              }
                              else
                              {
                                $trv=0;
                              }
                          }
                          elseif ($value>=date("m",strtotime($row['facco'])) AND $value<=date("m",strtotime($row['tacco'])) AND $year>=date("Y",strtotime($row['facco'])) AND $year<=date("Y",strtotime($row['tacco'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['facco']))<=(strtotime($row['tacco'])-strtotime($row['facco'])))
                              {
                                  $acco = $row['acco'];
                              }
                              else
                              {
                                $acco=0;
                              }
                          }
                          elseif ($value>=date("m",strtotime($row['fadd1'])) AND $value<=date("m",strtotime($row['tadd1'])) AND $year>=date("Y",strtotime($row['fadd1'])) AND $year<=date("Y",strtotime($row['tadd1'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fadd1']))<=(strtotime($row['tadd1'])-strtotime($row['fadd1'])))
                              {
                                   $add1 = $row['add1'];
                              }
                              else
                              {
                                 $add1=0;
                              }
                          }
                          elseif ($value>=date("m",strtotime($row['fadd2'])) AND $value<=date("m",strtotime($row['fadd2'])) AND $year>=date("Y",strtotime($row['fadd2'])) AND $year<=date("Y",strtotime($row['fadd2'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fadd2']))<=(strtotime($row['tadd2'])-strtotime($row['fadd2'])))
                              {
                                  $add2 = $row['add2'];
                              }
                              else
                              {
                                $add2=0;
                              }
                          }
                        }
                        $totale =$bs+$ba+$mm+$trv+$acco+$add1+$add2;

                        $querytable2 ="SELECT * FROM $tablename2 WHERE id='$id'";

                        $resultable2 =mysqli_query($conn,$querytable2);
                         while($row = mysqli_fetch_array($resultable2))
                        {
                          $id = $row['id'];
                          $id = $row['id'];
                          if ($value>=date("m",strtotime($row['fepf'])) AND $value<=date("m",strtotime($row['tepf'])) AND $year>=date("Y",strtotime($row['fepf'])) AND $year<=date("Y",strtotime($row['tepf'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fepf']))<=(strtotime($row['tepf'])-strtotime($row['fepf'])))
                              {
                                   $epf = $row['epf'];
                              }
                              else
                              {
                                $epf=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fsa'])) AND $value<=date("m",strtotime($row['tsa'])) AND $year>=date("Y",strtotime($row['fsa'])) AND $year<=date("Y",strtotime($row['tsa'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fsa']))<=(strtotime($row['tsa'])-strtotime($row['fsa'])))
                              {
                                  $sa = $row['sa'];
                              }
                              else
                              {
                                $sa=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fsl'])) AND $value<=date("m",strtotime($row['tsl'])) AND $year>=date("Y",strtotime($row['fsl'])) AND $year<=date("Y",strtotime($row['tsl'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fsl']))<=(strtotime($row['tsl'])-strtotime($row['fsl'])))
                              {
                                  $sl = $row['sl'];
                              }
                              else
                              {
                                $sl=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fded1'])) AND $value<=date("m",strtotime($row['tded1'])) AND $year>=date("Y",strtotime($row['fded1'])) AND $year<=date("Y",strtotime($row['tded1'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fded1']))<=(strtotime($row['tded1'])-strtotime($row['fded1'])))
                              {
                                  $ded1 = $row['ded1'];
                              }
                              else
                              {
                                $ded1=0;
                              }
                          }
                          elseif($value>=date("m",strtotime($row['fded2'])) AND $value<=date("m",strtotime($row['tded2'])) AND $year>=date("Y",strtotime($row['fded2'])) AND $year<=date("Y",strtotime($row['tded2'])))
                          {
                              if((strtotime(date("Y-m-d"))-strtotime($row['fded2']))<=(strtotime($row['tded2'])-strtotime($row['fded2'])))
                              {
                                  $ded2 = $row['ded2'];
                              }
                              else
                              {
                                $ded2=0;
                              }
                          }
                        }
                     $totald =$sa+$sl+$ded1+$ded2;


                     //$netold =$totale-$totald;
                     $epfval =$bs*$epf/100;
                    // if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                    // $etf =$bs*(3/100);
                     $netsl =$totale-$totald-$epfval;
                     //echo $net;

                 echo
                  "<tr>";

                  $querycheck ="SELECT * FROM employeeinfor WHERE empno='".$row11["empno"]."';";

                  $resultcheck =mysqli_query($conn,$querycheck);

                  while($rowcheck = mysqli_fetch_array($resultcheck))
                  {
                     $pcheck =$rowcheck['packageid'];
                  }

                  if($pcheck!=0){
                    if(isset($x["company"]))
                    {
                      echo '<td>'.$row11["company"].'</td>';
                    }
                    if(isset($x["firstname"]))
                    {
                      echo '<td>'.$row11["firstname"].'</td>';
                    }
                    if(isset($x["lastname"]))
                    {
                      echo '<td>'.$row11["lastname"].'</td>';
                    }
                    if(isset($x["empno"]))
                    {
                      echo '<td>'.$row11["empno"].'</td>';
                    }
                    if(isset($x["epfno"]))
                    {
                      echo '<td>'.$row11["epfno"].'</td>';
                    }
                    if(isset($x["designation"]))
                    {
                      echo '<td>'.$row11["designation"].'</td>';
                    }
                    if(isset($x["year"]))
                    {
                      echo '<td>'.$year.'</td>';
                    }
                    if(isset($x["month"]))
                    {
                      echo '<td>'.$month.'</td>';
                    }
                    if(isset($x["department"]))
                    {
                      echo '<td>'.$row11["department"].'</td>';
                    }
                    if(isset($x["srm"]))
                    {
                      echo '<td>'.$row11["srm"].'</td>';
                    }
                    if(isset($x["deductions"]))
                    {
                    //  if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                      $totaldd =$totald+$epfval;
                      echo '<td>'.$totaldd.'</td>';
                    }
                    if(isset($x["netsal"]))
                    {
                      echo '<td>'.$netsl.'</td>';
                    }
                    if(isset($x["epfpaid"]))
                    {
                      echo '<td>'.$epfval.'</td>';
                    }
                    if(isset($x["etppaid"]))
                    {
                      if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                      echo '<td>'.$etfval.'</td>';
                    }
                    if(isset($x["totalcontri"]))
                    {
                      $totalcontri  =$epfval+$etfval;
                      echo '<td>'.$totalcontri.'</td>';
                    }
                  }
                 echo" </tr>";
              }
             echo '
             </tbody>
            </table>
             ';

           ?>
    </div>
  </div>
      <input type="button" value ="Cancle" onclick="goBack()" class="btn btn-primary btn-sm" />

      <input type="button" value="Print" onclick="javascript:printDiv('printablediv')" class="btn btn-primary btn-sm" />
  </div>
</div>
<script language="javascript" type="text/javascript">
       function printDiv(divID) {
           //Get the HTML of div
           var divElements = document.getElementById(divID).innerHTML;
           //Get the HTML of whole page
           var oldPage = document.body.innerHTML;

           //Reset the page's HTML with div's HTML only
           document.body.innerHTML =
             "<html><head><title></title></head><body>" +
             divElements + "</body></html>";
           //Print Page
           window.print();

           //Restore orignal HTML
           document.body.innerHTML = oldPage;
       }
   </script>
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

<script type="text/javascript">
  function goBack() {
      window.history.back();
  }
</script>
