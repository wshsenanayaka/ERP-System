<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
  
     include('../include/check.php'); 

     $search =false; $netsl=0;
     $net =0;
     $bs=0;$ba=0;$mm=0;$trv=0;$acco=0;$add1=0;$add2=0;$epf=0;
     $sa=0;$sl=0;$ded1=0;$ded2=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

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
          <a href="#">Salary Payments</a>
        </li>

      </ol>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <div class="form-group">
          <div class="form-inline">
             <label for="email">Company</label><br>
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
            <div class="form-group" style="margin-left: 15%">
            <label for="pwd">Year</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="year" required="required"/>

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
           <label for="email">Department</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="department">
                  <option value="">Select</option>
                  <?php
                  $query ="SELECT department FROM  employeeinfor";
                  $result =mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$row['department']."'>".$row['department']."</option>";
                  }
                 ?>
                 </select>
               </div>
           </div>
           <br>
           <div class="form-inline">
             <label for="email">Designation</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="designation">
                  <option value="">Select</option>
                  <?php
                  $query ="SELECT designation FROM employeeinfor";
                  $result =mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$row['designation']."'>".$row['designation']."</option>";
                  }
                 ?>
                 </select>
               </div>

               <label for="email">Sal Recepit Method</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="sm" required="required">
                   <option value="">Select</option>
                  <option value="Bank Acc">Bank Acc</option>;
                  <option value="Cash">Cash</option>;

                 </select>
               </div>
              <input type="submit" name="serchsubep" value="Search" class="btn btn-primary btn-sm"/>
           </div>
             <br>
      <div id="printablediv">
      <div id="HTMLtoPDF">
        <div class="table-responsive">
         <table class="table table-sm">
          <tr>
           <th width=50px>EMP No</th>
           <th width=50px>EPF No</th>
           <th width=50px>First Name</th>
           <th width=50px>Last Name</th>
           <th width=50px>Designation</th>
           <th width=50px>Year/Month</th>
           <th width=50px>Net Sal</th>
           <th width=50px>Deductions</th>
           <th width=50px>EPF Paid</th>
           <th width=50px>ETP Paid</th>
           <th width=50px>Total Contri</th>
          </tr>

      <?php
      // $_SESSION['id'] =null;
       require '../include/config.php';
       $i=1;
      if(isset($_POST['serchsubep']))
      {

        $company =mysqli_real_escape_string($conn ,$_POST['company']);
        $year =mysqli_real_escape_string($conn ,$_POST['year']);
        $month =mysqli_real_escape_string($conn ,$_POST['month']);
        $department =mysqli_real_escape_string($conn ,$_POST['department']);
         $designation =mysqli_real_escape_string($conn ,$_POST['designation']);
         $sm =mysqli_real_escape_string($conn ,$_POST['sm']);
         $_SESSION['sm']=$sm;
         $_SESSION['year']=$year;
         $_SESSION['month']=$month;

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

        $query ="SELECT * FROM employeeinfor WHERE  company ='$company' AND srm='$sm'  OR designation ='$designation' AND department='$department';";

        $result =mysqli_query($conn,$query);

           $rowcount=mysqli_num_rows($result);

            if($rowcount>0)
            {
               while($row11 = mysqli_fetch_array($result))
               {
                echo
                 "<tr>";
                $_SESSION['id']=$row11['id'];
                $pid = $row11['packageid'];
                $id =$row11['id'];
                if($pid>"0")
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
                   if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                  // $etf =$bs*(3/100);
                   $netsl =$totale-$totald-$epfval;
                   //echo $net;

               }

               $querycheck ="SELECT * FROM employeeinfor WHERE  empno='".$row11["empno"]."';";

               $resultcheck =mysqli_query($conn,$querycheck);

               while($rowcheck = mysqli_fetch_array($resultcheck))
                {
                  $pcheck = $rowcheck['packageid'];
                }

                if($pcheck!=0){
                  echo "<td width=50px>";
                  echo $row11["empno"];
                  echo "</td>";
                   echo "<td width=50px>";
                  echo $row11["epfno"];
                  echo "</td>";
                  echo "<td width=50px>";
                  echo $row11["firstname"];
                  echo "</td>";
                   echo "<td width=50px>";
                  echo $row11["lastname"];
                  echo "</td>";
                   echo "<td width=50px>";
                  echo $row11["designation"];
                  echo "</td>";
                  echo "<td width=50px>";
                  echo "$year/$month";
                  echo "</td>";
                  echo "<td width=50px>";
                  echo $netsl;
                  echo "</td>";
                  echo "<td width=50px>";
                  // if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                  echo $totald+$epfval;
                  echo "</td>";
                  echo "<td width=50px>";
                  echo $epfval;
                  echo "</td>";
                  echo "<td width=50px>";
                  echo $etfval;
                  echo "</td>";
                  echo "<td width=50px>";
                  echo $epfval+$etfval;
                  echo "</td>";

                  echo" </tr>";
                  $net =$net +$netsl;
                   $i++;
                }
               }
                $search =true;
            }
            else
             {
                echo "Not Found";
                $search =false;

             }

        $query ="SELECT * FROM setdepositestatusinfor WHERE yearval='$year' AND monuthval='$month'";
        $result =mysqli_query($conn,$query);


        while($row = mysqli_fetch_array($result))
        {
          $state =$row["state"];
          $dateval =$row["dateval"];
          $sm =$row["sm"];
        }


    }

    //echo $_SESSION['id'];
   ?>
 </table>

          </div>
        </div>
      </div>
         </div>
      </form>
       <?php if ($search == true): ?>
            <a href="#" onclick="HTMLtoPDF()">Download As PDF</a>
             <input type="button" value="Print" onclick="javascript:printDiv('printablediv')" class="btn btn-primary btn-sm" />
        <?php else: ?>

        <?php endif ?>
      <br><br>
      <hr>
      <h5>Set Deposite Status</h5>
       <br>
      <?php


      ?>
       <div class="form-group">
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-inline">
             <div class="form-group">
              <label for="pwd">Bank Deposits</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="ssm" value="
               <?php  if(isset($net)){if(isset($_SESSION['sm'])){ if($_SESSION['sm']=="Bank Acc"){ echo $net;}}}  ?>"  required="required"/>
              </div>
             </div>
             <div class="form-group">
               <div class="col-sm-3">
                 <?php if ($email =="userhr" || $email =="admin@gmail.com"): ?>
                   <select type="text" class="form-control form-control-sm" name="sstate" required="required">
                     <?php
                        if(isset($state))
                            {
                              if($_SESSION['sm']=="Bank Acc")
                              {
                                echo "<option value='".$state."'>".$state."</option>";
                              }
                            }
                        ?>
                        <option value="">Select</option>
                        <?php
                        if($state!="Pending")
                        {
                          echo ' <option value="Pending">Pending</option>';
                        }
                        if($state!="Deposite")
                        {
                          echo ' <option value="Deposite">Deposite</option>';
                        }
                     ?>
                  </select>
                 <?php else: ?>
                    <input type="text" name="sstate" class="form-control form-control-sm" value="Pending" readonly/>
                 <?php endif ?>

              </div>
             </div>
             <div class="form-group">
               <div class="col-sm-3">
               <input type="date" class="form-control form-control-sm" value="<?php if(isset($dateval)){ if($_SESSION['sm']=="Bank Acc"){ echo $dateval;}}?>"  name="sdate" required="required"/>
              </div>
            </div>
                 <input type="submit" name="bbtn" value="Submit" class="btn btn-primary btn-sm"/>
            </div>
        </form>
        <?php

            if(isset($_POST['bbtn']))
            {


               $ssval =mysqli_real_escape_string($conn,$_POST['ssm']);
               $sstate =mysqli_real_escape_string($conn,$_POST['sstate']);
               $sdate =mysqli_real_escape_string($conn,$_POST['sdate']);

               if(isset($_SESSION['month']))
               {

                  if(isset($_SESSION['year']))
                  {
                    $query ="SELECT * FROM setdepositestatusinfor WHERE  yearval ='".$_SESSION['year']."' AND monuthval='".$_SESSION['month']."'";
                  }
               }

               $result=mysqli_query($conn,$query);
               $count =mysqli_num_rows($result);

               if($count==0)
               {

                  $query ="INSERT INTO setdepositestatusinfor (sm ,val ,state,dateval, yearval,  monuthval) VALUES(?,?,?,?,?,?)";
                  $stmt =mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt,$query))
                    {
                      echo "SQL Error";
                    }
                  else
                   {
                       mysqli_stmt_bind_param($stmt,"ssssss",$_SESSION['sm'],$ssval,$sstate,$sdate,$_SESSION['year'],$_SESSION['month']);
                       $result =  mysqli_stmt_execute($stmt);
                       if(!$result)
                         {
                            echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"sp\"</script>";
                         }
                        else
                         {
                             echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"sp\"</script>";
                         }

                    }
                }
                else
                {


                   $query ="UPDATE setdepositestatusinfor  SET state=?, dateval=? ,val=?  WHERE yearval=? AND monuthval=?;";

                    $stmt =mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$query))
                      {
                        echo "SQL Error";
                      }
                      else
                       {
                          mysqli_stmt_bind_param($stmt,"sssss",$sstate,$sdate, $ssval,$_SESSION['year'],$_SESSION['month']);
                          $result =  mysqli_stmt_execute($stmt);
                          if(!$result)
                           {
                              echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"sp\"</script>";
                           }
                          else
                           {
                               echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"sp\"</script>";
                           }
                      }

                }

            }
        ?>
         <br>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-inline">
             <div class="form-group">
                <label for="pwd">Cash Deposits</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" value="
                 <?php  if(isset($net)){if(isset($_SESSION['sm'])){ if($_SESSION['sm']=="Cash"){ echo $net;}}}  ?>"    name="cval" required="required"/>
                </div>
             </div>
             <div class="form-group">
               <div class="col-sm-3">
                <?php if ($email =="userhr" || $email =="admin@gmail.com"): ?>
                 <select type="text" class="form-control form-control-sm" name="cstate" required="required">
                   <?php
                      if(isset($state))
                          {
                            if($_SESSION['sm']=="Cash")
                            {
                              echo "<option value='".$state."'>".$state."</option>";
                            }
                          }
                      ?>
                      <option value="">Select</option>
                      <?php
                      if($state!="Pending")
                      {
                        echo ' <option value="Pending">Pending</option>';
                      }
                      if($state!="Deposite")
                      {
                        echo ' <option value="Deposite">Deposite</option>';
                      }
                   ?>
                </select>
                <?php else: ?>
                   <input type="text" name="cstate" class="form-control form-control-sm" value="Pending" readonly/>
                <?php endif ?>

              </div>
             </div>
             <div class="form-group">
               <div class="col-sm-3">
               <input type="date" class="form-control form-control-sm" value="<?php if(isset($dateval)){ if($_SESSION['sm']=="Cash"){ echo $dateval;}}?>" name="cdate" required="required"/>
              </div>
             </div>
             <input type="submit" name="cbtn" value="Submit" class="btn btn-primary btn-sm"/>
         </div>
        </form>
        <?php
           if(isset($_POST['cbtn']))
            {


               $cval =mysqli_real_escape_string($conn,$_POST['cval']);
               $cstate =mysqli_real_escape_string($conn,$_POST['cstate']);
               $cdate =mysqli_real_escape_string($conn,$_POST['cdate']);

               if(isset($_SESSION['month']))
               {

                  if(isset($_SESSION['year']))
                  {
                    $query ="SELECT * FROM setdepositestatusinfor WHERE  yearval ='".$_SESSION['year']."' AND monuthval='".$_SESSION['month']."'";
                  }
               }

               $result=mysqli_query($conn,$query);
               $count =mysqli_num_rows($result);

               if($count==0)
               {

                  $query ="INSERT INTO setdepositestatusinfor (sm ,val ,state,dateval, yearval,  monuthval) VALUES(?,?,?,?,?,?)";
                  $stmt =mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt,$query))
                    {
                      echo "SQL Error";
                    }
                  else
                   {
                       mysqli_stmt_bind_param($stmt,"ssssss",$_SESSION['sm'],$cval,$cstate,$cdate,$_SESSION['year'],$_SESSION['month']);
                       $result =  mysqli_stmt_execute($stmt);
                       if(!$result)
                         {
                            echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"sp\"</script>";
                         }
                        else
                         {
                             echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"sp\"</script>";
                         }

                    }
                }
                else
                {


                   $query ="UPDATE setdepositestatusinfor  SET state=?, dateval=? ,val=?  WHERE yearval=? AND monuthval=?;";

                    $stmt =mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$query))
                      {
                        echo "SQL Error";
                      }
                      else
                       {
                          mysqli_stmt_bind_param($stmt,"sssss",$cstate,$cdate,$cval,$_SESSION['year'],$_SESSION['month']);
                          $result =  mysqli_stmt_execute($stmt);
                          if(!$result)
                           {
                              echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"sp\"</script>";
                           }
                          else
                           {
                               echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"sp\"</script>";
                           }
                      }

                }

            }
        ?>

      <br>

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
              "<html><head><title></title>Sal Recepit Method:  <?php echo  $sm;?></head><body><br>" +
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;


        }
    </script>
