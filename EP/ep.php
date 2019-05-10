<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
   
    include('../include/check.php');

     $search =false;
     $bs=0;$ba=0;$mm=0;$trv=0;$acco=0;$add1=0;$add2=0;$epf=0;
     $sa=0;$sl=0;$ded1=0;$ded2=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
  .print-val
  {
    display: none;
  }

  </style>

   <?php include('../include/head.php') ?>

   <style type="text/css">
     .column-left{ float: left; width: 23%; }
      .column-right{ float: right; width: 23%; }
      .column-center{ display: inline-block; width: 23%; }
       .column-center1{ display: inline-block; width: 23%; }
       .ccsubmit
       {
         margin-left: 17px;
       }
       .line
       {
         height: 11px;
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
          <a href="#">Employee Payroll</a>
        </li>

      </ol>
      <div class="container">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <div class="column-left">
               <div class="form-group">
               <label for="pwd">Emp No</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" name="empno" required="required"/>
                </div>
               </div>
               <div class="form-group">
                <label for="pwd">Year</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" name="year" required="required"/>
                </div>
               </div>
          </div>
          <div class="column-center">
           <div class="form-group">
           <label for="pwd">EPF No</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="epfno" />
            </div>
           </div>
            <div class="form-group">
            <label for="pwd">Month</label>
            <div class="col-sm-3">
              <select type="text" class="form-control form-control-sm"  name="month" required="required" >
                <option value="">Select</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>

            </div>
           </div>
           </div>
          <div class="column-center1">
            <div class="form-group">
            <label for="pwd">First Name</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="firstname" id="firstname"/>

            </div>
           </div>

            <label for="email">Company</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="company" required="required">
                   <option value="">Select</option>
                  <?php
                  $query ="SELECT company FROM companyinfor";
                  $result =mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$row['company']."'>".$row['company']."</option>";
                  }
                 ?>
                 </select>
               </div>

           </div>
           <div class="column-center1">
            <div class="form-group">
            <label for="pwd">Last Name</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="lastname"/>
            </div>
           </div>

          <br>
          <div class="line">
          </div>


            <!-- <div id="nameList"></div>   -->
            <div class="ccsubmit">
              <input type="submit" name="serchsubep" value="Search" class="btn btn-primary btn-sm"/>
            </div>
           </div>
      </form>
    </div>

      <br>
       <div id="printablediv">
        <div class="table-responsive">
         <table class="table table-sm" id="dataTable">
          <tr>
           <th width=50px>EMP No</th>
           <th width=50px>EPF No</th>
           <th width=50px>First Name</th>
           <th width=50px>Last Name</th>
           <th width=50px>Designation</th>
           <th width=50px>Month</th>
           <th width=50px>Total Earnings</th>
           <th width=50px>Deductions</th>
           <th width=50px>Net sal</th>
          </tr>

      <?php
      // $_SESSION['id'] =null;
       require '../include/config.php';
       $i=1;
      if(isset($_POST['serchsubep']))
      {
        //$lastname =mysqli_real_escape_string($conn ,$_POST['lastname']);
        $empno =mysqli_real_escape_string($conn ,$_POST['empno']);
        $epfno =mysqli_real_escape_string($conn ,$_POST['epfno']);
        $firstname =mysqli_real_escape_string($conn ,$_POST['firstname']);
        $lastname =mysqli_real_escape_string($conn ,$_POST['lastname']);
        $year =mysqli_real_escape_string($conn ,$_POST['year']);
        $month =mysqli_real_escape_string($conn ,$_POST['month']);
        $company =mysqli_real_escape_string($conn ,$_POST['company']);

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
         $queryco ="SELECT * FROM employeeinfor WHERE empno='$empno'";

         $result =mysqli_query($conn,$queryco);


          while($row = mysqli_fetch_array($result))
          {
                $pid = $row['packageid'];
                $id =$row['id'];


          }
               if($pid!=0)
               {

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
                    //echo $id;

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
                        if($value>=date("m",strtotime($row['fba'])) AND $value<=date("m",strtotime($row['tba'])) AND $year>=date("Y",strtotime($row['fba'])) AND $year<=date("Y",strtotime($row['tba'])))
                        {
                          //  echo "uu1";
                            if((strtotime(date("Y-m-d"))-strtotime($row['fba']))<=(strtotime($row['tba'])-strtotime($row['fba'])))
                            {
                                 //echo "uu2";
                               $ba = $row['ba'];
                               //echo $row['ba'];
                            }
                            else
                            {
                               $ba=0;
                            }
                        }
                        if($value>=date("m",strtotime($row['fmm'])) AND $value<=date("m",strtotime($row['tmm'])) AND $year>=date("Y",strtotime($row['fmm'])) AND $year<=date("Y",strtotime($row['tmm'])))
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
                        if($value>=date("m",strtotime($row['ftrv'])) AND $value<=date("m",strtotime($row['ttrv'])) AND $year>=date("Y",strtotime($row['ftrv'])) AND $year<=date("Y",strtotime($row['ttrv'])))
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
                        if ($value>=date("m",strtotime($row['facco'])) AND $value<=date("m",strtotime($row['tacco'])) AND $year>=date("Y",strtotime($row['facco'])) AND $year<=date("Y",strtotime($row['tacco'])))
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
                        if ($value>=date("m",strtotime($row['fadd1'])) AND $value<=date("m",strtotime($row['tadd1'])) AND $year>=date("Y",strtotime($row['fadd1'])) AND $year<=date("Y",strtotime($row['tadd1'])))
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
                        if ($value>=date("m",strtotime($row['fadd2'])) AND $value<=date("m",strtotime($row['fadd2'])) AND $year>=date("Y",strtotime($row['fadd2'])) AND $year<=date("Y",strtotime($row['fadd2'])))
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

                   // echo $totale;


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

                     $netold =$totale-$totald;
                     $epfval =$bs*$epf/100;
                     $net =$netold-$epfval;



                    $query ="SELECT * FROM employeeinfor WHERE  company ='$company' AND empno='$empno'  OR epfno ='$epfno' OR firstname='$firstname' OR lastname='$lastname' ;";

                        $result =mysqli_query($conn,$query);
                        $rowcount=mysqli_num_rows($result);

                        if($rowcount>0)
                        {
                           while($row = mysqli_fetch_array($result))
                           {
                            echo
                             "<tr>";
                            $_SESSION['id']=$row['id'];
                            $empnop =$row["empno"];
                            echo "<td width=50px>";
                            echo  $row["empno"];
                            echo "</td>";
                             echo "<td width=50px>";
                            echo $row["epfno"];
                            echo "</td>";
                            echo "<td width=50px>";
                            echo $row["firstname"];
                            echo "</td>";
                             echo "<td width=50px>";
                            echo $row["lastname"];
                            echo "</td>";
                             echo "<td width=50px>";
                            echo $row["designation"];
                            echo "</td>";
                            echo "<td width=50px>";
                            echo $month;
                            echo "</td>";
                            echo "<td width=50px>";
                            echo $totale;
                            echo "</td>";
                            echo "<td width=50px>";
                            //if($bs!=''){$etfval=$row["etfval"];}else{$etfval=0;}
                            echo $totald+$epfval;
                            echo "</td>";
                            echo "<td width=50px>";
                            echo $net;
                            echo "</td>";

                            echo" </tr>";

                             $i++;

                           }

                            $search =true;

                        }
                        else
                         {
                          echo "Not Found";
                           $search =false;

                         }

                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Assign Salary package');window.location = \"ep\"</script>";
                  }

    }

    //echo $_SESSION['id'];
   ?>
 </table>
</div>
</div>


 <?php if ($search == true): ?>
  <!-- <a href="#" onclick="HTMLtoPDF()">Download As PDF</a><br> -->
  <input type="button" value="Print" onclick="javascript:printDiv('printablediv')" class="btn btn-primary btn-sm" />
  <?php else: ?>

        <?php endif ?>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
              "<html><head><title></title>EMP No:  <?php echo  $empnop;?></head><body>" +
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;


        }
    </script>
