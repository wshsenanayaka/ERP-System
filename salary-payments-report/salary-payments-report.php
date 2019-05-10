<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
    error_reporting(0);
    include('../include/check.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
.
#select-column
{
  width: 200px;
  margin-bottom: 20px;
}
#select-btn
{
  margin-left: 15px;
}
#btn-view
{
  float: right;
}
.report-view ,.table-argin
{
  margin-left: 15px;
}
.select_view
{
  height: 380px;
  overflow-x: hidden; /* Hide horizontal scrollbar */
  overflow-y: hidden;
  float: left;
  border-style: solid;
  border-color: #043e77;
  padding-top: 5px;
  padding-bottom: 200px;
  border-width: 1px;
  margin-bottom: 15px;
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
           Salary Payments Report
        </li>
      </ol>

     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <!-- <div class="form-group"> -->
        <!-- <div class="form-inline" style="float: left"> -->
          <!-- <label for="email">Select the Column</label> -->
            <div class="select_view col-sm-4" >
             <div class="col-sm-12">
              <!-- <select name="cars[]" multiple class="form-control form-control-sm" id="select-column"> -->

               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="company">
                    <span class="col-sm-8">Company</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="firstname">
                    <span class="col-sm-8">First Name</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="lastname">
                    <span class="col-sm-8">Last Name</span>
               </div>
               <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="empno">
                      <span class="col-sm-8">Emp No</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="epfno">
                    <span class="col-sm-8">EPF No</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="designation">
                    <span class="col-sm-8">Designation</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="year">
                    <span class="col-sm-8">Year</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="month">
                    <span class="col-sm-8">Month</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="department">
                    <span class="col-sm-8">Department</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="srm">
                    <span class="col-sm-8">Sal Recepit Method</span>
               </div>
               <div class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="deductions">
                    <span class="col-sm-8">Deductions</span>
               </div>
               <div class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="netsal">
                    <span class="col-sm-8">Net sal</span>
               </div>
               <div class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="epfpaid">
                    <span class="col-sm-8">EPF Paid</span>
               </div>
               <div class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="etppaid">
                    <span class="col-sm-8">ETP Paid</span>
               </div>
               <div class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="totalcontri">
                    <span class="col-sm-8">Total Contri</span>
               </div>
              </div>
            </div>
         <input type="submit" name="serchsub" value="Submit" class="btn btn-primary btn-sm" id="select-btn"/>
       <!-- </div> -->
       <div id="btn-view">
         <div class="col-sm-3">
          <input type="button" value="View saved Reports" onclick="window.location='salary-payments-report-view';" class="btn btn-primary btn-sm" />
         </div>
       </div>

     <?php
      if(isset($_POST['serchsub']))
      {
           $name=$_POST['cars'];
           if($name!=null)
           {


               $query = "select ";
               $name=$_POST['cars'];
               $num= sizeof($name);
                foreach($name as $color)
                 {
                    if($num>1){
                     $query = $query.$color.",";
                     $num =$num-1;
                    }
                    else
                    {
                      $query = $query.$color;
                    }
                 }
                 $default ="createdate";
                 $query =$query.",".$default;
              // echo $query;
               $queryse ="$query  FROM employeeinfor";

              echo '
                  <br><br><br><br><br><br><br><br><br><br>
              ';
              echo '

              <div class="form-group" style="margin-top: 180px;">';
               foreach($name as $color)
                {
                   if($color=="company")
                   {
                     $companycheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Company</label>
                              <div class="col-sm-3">';?>
                               <!-- <input type="text" class="form-control form-control-sm"  name="company"/> -->
                               <select type="text" class="form-control form-control-sm"  name="company" required>
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
                   <?php
                   }
                   elseif ($color=="firstname") {
                     $firstnamecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">First Name</label>
                              <div class="col-sm-3">

                               <input type="text" class="form-control form-control-sm"   name="firstname"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="lastname") {
                     $lastnamecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Last Name</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="lastname"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="empno") {
                     $othernamecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Emp No</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="empno" />
                              </div>
                           </div>';

                   }
                   elseif ($color=="epfno") {
                     //echo '<th>Current Address</th>';
                     $caddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">EPF No</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="epfno" />
                              </div>
                           </div>';

                   }
                   elseif ($color=="designation") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Designation</label>
                              <div class="col-sm-3">';?>
                               <!-- <input type="text" class="form-control form-control-sm"  name="company"/> -->
                               <select type="text" class="form-control form-control-sm"  name="designation" >
                                <option value="">Select</option>
                                <?php
                                $query ="SELECT designation FROM companyinfor";
                                $result =mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result))
                                {

                                  echo "<option value='".$row['designation']."'>".$row['designation']."</option>";

                                }
                               ?>
                               </select>
                              </div>
                           </div>
                   <?php

                   }
                   elseif ($color=="year") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Year</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="year" required/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="month") {
                     //echo '<th>Email</th>';
                     $emaildbcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Month</label>
                              <div class="col-sm-3">
                              <select type="text" class="form-control form-control-sm"  name="month" required>
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
                           </div>';
                   }
                   elseif ($color=="department") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Department</label>
                              <div class="col-sm-3">';?>
                               <!-- <input type="text" class="form-control form-control-sm"  name="company"/> -->
                               <select type="text" class="form-control form-control-sm"  name="department" >
                                <option value="">Select</option>
                                <?php
                                $query ="SELECT departmentname FROM departmentinfor";
                                $result =mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result))
                                {

                                  echo "<option value='".$row['departmentname']."'>".$row['departmentname']."</option>";

                                }
                               ?>
                               </select>
                              </div>
                           </div>
                   <?php
                   }
                   elseif ($color=="srm") {
                     //echo '<th>Email</th>';
                     $emaildbcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Sal Recepit Method</label>
                              <div class="col-sm-3">
                              <select type="text" class="form-control form-control-sm"  name="srm" required>
                                 <option value="">Select</option>
                                 <option value="Bank Acc">Bank Acc</option>
                                 <option value="Cash">Cash</option>
                               </select>
                              </div>
                           </div>';
                   }
                   elseif ($color=="deductions") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Deductions</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="deductions"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="netsal") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Net sal</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="netsal"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="epfpaid") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">EPF Paid</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="epfpaid"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="etppaid") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">ETP Paid</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="etppaid"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="totalcontri") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Total Contri</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="totalcontri"/>
                              </div>
                           </div>';

                   }

                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('Select the Columns and Click Submit');window.location = \"salary-payments-report\"</script>";
            }
                echo '</div>';

               ?>
              <div class="report-view">
                 <input type="submit" value="Generate Report"  class="btn btn-primary btn-sm" name="generatebtn" />
                 <input type="button" value="Cancel" onclick="window.location='salary-payments-report';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
              </div>
             </form>
            <?php
      }
      ?>
      <?php
         if(isset($_POST['generatebtn']))
         {

            $selected =array();
            foreach(array_keys($_POST) as $key)
            {
                  if($key=="company")
                   {
                     $company =$_POST['company'];
                     $selected[$key]=$company;
                   }
                   if ($key=="firstname") {
                      $firstname =$_POST['firstname'];
                      $selected[$key]=$firstname;
                   }
                   if ($key=="lastname") {

                     $lastname =$_POST['lastname'];
                     $selected[$key]=$lastname;
                   }
                   if ($key=="empno") {

                      $empno =$_POST['empno'];
                      $selected[$key]=$empno;
                   }
                   if ($key=="epfno") {
                     //echo '<th>Current Address</th>';
                     $epfno =$_POST['epfno'];
                     $selected[$key]=$epfno;
                   }
                   if ($key=="designation") {
                     //echo '<th>Email</th>';
                      $designation =$_POST['designation'];
                      $selected[$key]=$designation;
                   }
                   if ($key=="year") {
                     //echo '<th>Permenent Address</th>';
                    $year =$_POST['year'];
                    $selected[$key]=$year;
                   }
                   if ($key=="month") {
                     //echo '<th>Email</th>';
                      $month =$_POST['month'];
                      $selected[$key]=$month;
                   }
                   if ($key=="department") {
                     //echo '<th>Email</th>';
                      $department=$_POST['department'];
                      $selected[$key]=$department;
                   }
                   if ($key=="srm") {
                     //echo '<th>Email</th>';
                      $srm=$_POST['srm'];
                      $selected[$key]=$srm;
                   }
                   if ($key=="deductions") {
                     //echo '<th>Email</th>';
                      $deductions =$_POST['deductions'];
                      $selected[$key]=$deductions;
                   }
                   if ($key=="netsal") {
                     //echo '<th>Email</th>';
                      $netsal =$_POST['netsal'];
                      $selected[$key]=$netsal;
                   }
                   if ($key=="epfpaid") {
                     //echo '<th>Email</th>';
                      $epfpaid =$_POST['epfpaid'];
                      $selected[$key]=$epfpaid;
                   }
                   if ($key=="etppaid") {
                     //echo '<th>Email</th>';
                      $etppaid =$_POST['etppaid'];
                      $selected[$key]=$etppaid;
                   }
                   if ($key=="totalcontri") {
                     //echo '<th>Email</th>';
                      $totalcontri =$_POST['totalcontri'];
                      $selected[$key]=$totalcontri;
                   }
            }
            // var_dump($selected);

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                 <?php  $val = json_encode($selected); ?>

               <!--  <input type="hidden" name="col" value=""/> -->
                <textarea type="hidden" style="display:none;"  name="scol"><?php echo $val; ?></textarea>
            <?php



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
            echo '

            <div class="form-group">
                <div class="col-sm-3">
                  <input type="text" class="form-control form-control-sm"  name="rstitle" required="required" placeholder="Report title"/>
                </div>
             </div>

             <div class="table-argin">
              <table  class="table table-bordered table-striped table-responsive">
              <thead>
               <tr>';

             foreach(array_keys($_POST) as $key)
             {

                if($key=="company")
                {
                  echo '<td>Company</td>';

                }
                if($key=="firstname")
                {
                  echo '<td>First Name</td>';

                }
                if($key=="lastname")
                {
                  echo '<td>Last Name</td>';
                }
                if($key=="empno")
                {
                  echo '<td>EMP No</td>';
                }

                if($key=="epfno")
                {
                  echo '<td>EPF No</td>';
                }
                if($key=="designation")
                {
                 echo '<td>Designation</td>';
                }
                if($key=="year")
                {
                  echo '<td>Year</td>';
                }
                 if($key=="month")
                {
                  echo '<td>Month</td>';
                }
                if($key=="department")
                 {
                   echo '<td>Department</td>';
                 }
               if($key=="srm")
                {
                  echo '<td>Sal Recepit Method</td>';
                }
                if($key=="deductions")
                {
                 echo '<td>Deductions</td>';
                }
                if($key=="netsal")
                {
                 echo '<td>Net sal</td>';
                }
               if($key=="epfpaid")
               {
                echo '<td>EPF Paid</td>';
               }
               if($key=="etppaid")
               {
                echo '<td>ETP Paid</td>';
               }
               if($key=="totalcontri")
               {
                echo '<td>Total Contri</td>';
               }
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

          // $query ="SELECT * FROM employeeinfor WHERE  company ='$company' AND srm='$srm'  OR designation ='$designation' OR department='$department';";

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
                    //  if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                     // $etf =$bs*(3/100);
                      $netsl =$totale-$totald-$etfval;
                      //echo $net;


                  echo
                   "<tr>";
                   foreach(array_keys($_POST) as $key)
                   {

                     $querycheck ="SELECT * FROM employeeinfor WHERE empno='".$row11["empno"]."';";

                     $resultcheck =mysqli_query($conn,$querycheck);

                     while($rowcheck = mysqli_fetch_array($resultcheck))
                     {
                        $pcheck =$rowcheck['packageid'];
                     }

                     if($pcheck!=0){
                       if($key=="company")
                       {
                         echo '<td>'.$row11["company"].'</td>';
                       }
                       if($key=="firstname")
                       {
                         echo '<td>'.$row11["firstname"].'</td>';
                       }
                       if($key=="lastname")
                       {
                         echo '<td>'.$row11["lastname"].'</td>';
                       }
                       if($key=="empno")
                       {
                         echo '<td>'.$row11["empno"].'</td>';
                       }
                       if($key=="epfno")
                       {
                         echo '<td>'.$row11["epfno"].'</td>';
                       }
                       if($key=="designation")
                       {
                         echo '<td>'.$row11["designation"].'</td>';
                       }
                       if($key=="year")
                       {
                         echo '<td>'.$year.'</td>';
                       }
                       if($key=="month")
                       {
                         echo '<td>'.$month.'</td>';
                       }
                       if($key=="department")
                       {
                         echo '<td>'.$row11["department"].'</td>';
                       }
                       if($key=="srm")
                       {
                         echo '<td>'.$row11["srm"].'</td>';
                       }
                       if($key=="deductions")
                       {
                         //if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                         $totaldd =$totald+$epfval;
                         echo '<td>'.$totaldd.'</td>';
                       }
                       if($key=="netsal")
                       {
                         echo '<td>'.$netsl.'</td>';
                       }
                       if($key=="epfpaid")
                       {
                         echo '<td>'.$epfval.'</td>';
                       }
                       if($key=="etppaid")
                       {
                         if($bs!=''){$etfval=$row11["etfval"];}else{$etfval=0;}
                         echo '<td>'.$etfval.'</td>';
                       }
                       if($key=="totalcontri")
                       {
                         $totalcontri  =$epfval+$etfval;
                         echo '<td>'.$totalcontri.'</td>';
                       }
                     }

                   }
                  echo" </tr>";
               }
              echo '
              </tbody>
             </table>
              ';

            ?>
               <input type="submit"  name="rpsave" value="Save"  class="btn btn-primary btn-sm" />
               <input type="button" value="Cancel" onclick="window.location='employee-payroll-report';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
               </form>
               </div>
       <?php

        }
       ?>
       <br>
       <?php
          if(isset($_POST['rpsave']))
          {
            $rstitle =$_POST['rstitle'];
            $scol= $_POST['scol'];

             $query ="INSERT INTO  resalarypay (title,col)  VALUES (?,?)";

               $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"ss",$rstitle,$scol);
                 $result =  mysqli_stmt_execute($stmt);
                 if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"salary-payments-report\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"salary-payments-report\"</script>";
                  }
             }

          }
       ?>
  </div>
</div>
    <!-- /.content-wrapper-->
    <script language="javascript" type="text/javascript">
           function printDiv(divID) {
               //Get the HTML of div
               var divElements = document.getElementById(divID).innerHTML;
               //Get the HTML of whole page
               var oldPage = document.body.innerHTML;

               //Reset the page's HTML with div's HTML only
               document.body.innerHTML =
                 "<html><head><title></title>Employee Report</head><br><body>" +
                 divElements + "</body>";

               //Print Page
               window.print();

               //Restore orignal HTML
               document.body.innerHTML = oldPage;


           }
       </script>

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
<script>
$(document).ready(function(){
    $('#select-column').multiselect();
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>
