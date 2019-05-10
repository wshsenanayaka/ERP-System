<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

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
  height: 595px;
  overflow-x: hidden; /* Hide horizontal scrollbar */
  overflow-y: hidden;
  float: left;
  border-style: solid;
  border-color: #043e77;
  padding-top: 5px;
  padding-bottom: 500px;
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
           Employee Report
        </li>
      </ol>

     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <!-- <div class="form-group"> -->
        <!-- <div class="form-inline" style="float: left"> -->
          <!-- <label for="email">Select the Column</label> -->
            <div class="select_view col-sm-4">
             <div class="col-sm-12">
              <!-- <select name="cars[]" multiple class="form-control form-control-sm" id="select-column"> -->

               <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="company">
                      <span class="col-sm-8">Company</span>
                      <!-- <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="company"> -->
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="firstname">
                    <span class="col-sm-8"> Full Name </span>
               </div>
               <!-- <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="lastname">
                    <span class="col-sm-8">Last Name</span>
               </div> -->
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="othername">
                    <span class="col-sm-8">Other Name</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="caddress">
                    <span class="col-sm-8">Current Address</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="paddress">
                    <span class="col-sm-8">Permenent Address</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="email">
                    <span class="col-sm-8">Email</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="telephone">
                    <span class="col-sm-8">Telephone</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="mobile">
                    <span class="col-sm-8">Mobile</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="gender">
                    <span class="col-sm-8">Gender</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="accno">
                    <span class="col-sm-8">Account No</span>
               </div>
               <div  class="form-inline">
                    <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="bank">
                    <span class="col-sm-8">Bank</span>
                </div>
                <div  class="form-inline">
                     <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="barnch">
                     <span class="col-sm-8">Branch</span>
                </div>
                <div  class="form-inline">
                     <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="nation">
                     <span class="col-sm-8">Nationality</span>
                </div>
                <div  class="form-inline">
                     <input type="checkbox" class="col-sm-1"  name="cars[]" id="cars" value="pno">
                     <span class="col-sm-8">Passport No</span>
                </div>
                <div  class="form-inline">
                     <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="nic">
                     <span class="col-sm-8">NIC</span>
                </div>
                <div  class="form-inline">
                     <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="bod">
                     <span class="col-sm-8">BOD</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="empno">
                      <span class="col-sm-8">Emp No</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="emptype">
                      <span class="col-sm-8">Emp Type</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="designation">
                      <span class="col-sm-8">Designation</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="epfno">
                      <span class="col-sm-8">EPF No</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="department">
                      <span class="col-sm-8">Department</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1" name="cars[]" id="cars" value="doj">
                      <span class="col-sm-8">Date Of Join</span>
                </div>
                <div  class="form-inline">
                      <input type="checkbox" class="col-sm-1"  name="cars[]" id="cars" value="srm">
                      <span class="col-sm-8">Sal Recepit Method</span>
                </div>
              </div>
            </div>

         <input type="submit" name="serchsub" value="Submit" class="btn btn-primary btn-sm" id="select-btn"/>

       <!-- </div> -->
       <div id="btn-view">
         <div class="col-sm-3">
          <input type="button" value="View saved Reports" onclick="window.location='employee-report-view';" class="btn btn-primary btn-sm" />
         </div>
       </div>

     <?php
      if(isset($_POST['serchsub']))
      {
             // $fromdate=$_POST['fromdate'];
             // $todate=$_POST['todate'];
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
               $resultse =mysqli_query($conn,$queryse);
            //   $count =mysqli_num_rows($resultse);
            // <div id="printablediv">
            // <table id="editable_table" class="table table-bordered table-striped table-responsive">
            //  <thead>
            //   <tr>

              echo '
                  <br><br><br><br><br><br><br>
              ';
              echo '

              <div class="form-group" style="margin-top: 450px;">';
               foreach($name as $color)
                {
                   if($color=="company")
                   {
                     $companycheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Company</label>
                              <div class="col-sm-3">';?>
                               <!-- <input type="text" class="form-control form-control-sm"  name="company"/> -->
                               <select type="text" class="form-control form-control-sm"  name="company" >
                                <option value="">Select</option>
                                <?php
                                $query ="SELECT company FROM companyinfor";
                                $result =mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result))
                                {
                                  if($row['company']!=$company1)
                                  {
                                      echo "<option value='".$row['company']."'>".$row['company']."</option>";
                                  }
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
                   // elseif ($color=="lastname") {
                   //   $lastnamecheck ="true";
                   //   echo '<div class="form-group">
                   //           <label for="pwd">Last Name</label>
                   //            <div class="col-sm-3">
                   //             <input type="text" class="form-control form-control-sm"  name="lastname"/>
                   //            </div>
                   //         </div>';
                   //
                   // }
                   elseif ($color=="othername") {
                     $othernamecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Other Name</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="othername" />
                              </div>
                           </div>';

                   }
                   elseif ($color=="caddress") {
                     //echo '<th>Current Address</th>';
                     $caddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Current Address</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="caddress" />
                              </div>
                           </div>';

                   }
                   elseif ($color=="paddress") {
                     //echo '<th>Permenent Address</th>';
                     $paddresscheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Permenent Address</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="paddress"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="email") {
                     //echo '<th>Email</th>';
                     $emaildbcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Email</label>
                              <div class="col-sm-3">
                               <input type="email" class="form-control form-control-sm"  name="emaildb"/>
                              </div>
                           </div>';

                   }
                   elseif ($color=="telephone") {
                     // echo '<th>Telephone</th>';
                      $telephonecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Telephone</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="telephone"/>
                              </div>
                           </div>';
                   }
                   elseif ($color=="mobile") {
                     // echo '<th>Mobile</th>';
                     $mobilecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Mobile</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="mobile" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="gender") {
                     // echo '<th>Gender</th>';
                     $gendercheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Gender</label>';?>
                              <div class="col-sm-3">
                               <!-- <input type="text" class="form-control form-control-sm"  name="gender" /> -->
                               <select type="text" class="form-control form-control-sm" name="gender">
                                 <option value="">Select</option>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                               </select>
                              </div>
                           </div>
                   <?php
                   }
                   elseif ($color=="accno") {
                     // echo '<th>Account No</th>';
                     $accnocheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Account No</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="accno"/>
                              </div>
                           </div>';
                   }
                   elseif ($color=="bank") {
                     // echo '<th>Bank</th>';
                     $bankcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Bank</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="bank" />
                              </div>
                           </div>';

                   }
                   elseif ($color=="barnch") {
                     // echo '<th>Branch</th>';
                     $barnchcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Branch</label>
                              <div class="col-sm-3">

                              <input type="text" class="form-control form-control-sm"  name="barnch" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="nation") {
                     // echo '<th>Nationality</th>';
                     $nationcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Nationality</label>
                              <div class="col-sm-3">

                                <input type="text" class="form-control form-control-sm"  name="nation"/>
                              </div>
                           </div>';
                   }
                   elseif ($color=="pno") {
                     // echo '<th>Passport No</th>';
                     $pnocheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Passport No</label>
                              <div class="col-sm-3">
                               <input type="text" class="form-control form-control-sm"  name="pno"/>
                              </div>
                           </div>';
                   }
                   elseif ($color=="nic") {
                     // echo '<th>NIC</th>';
                     $niccheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">NIC</label>
                              <div class="col-sm-3">

                               <input type="text" class="form-control form-control-sm"  name="nic" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="bod") {
                     // echo '<th>BOD</th>';
                     //
                     $bodcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">BOD</label>
                              <div class="col-sm-3">

                               <input type="date" class="form-control form-control-sm"  name="bod" />
                              </div>
                           </div>';
                   }

                   elseif ($color=="empno") {
                     // echo '<th>Emp No</th>';
                     $empnocheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Emp No</label>
                              <div class="col-sm-3">

                               <input type="text" class="form-control form-control-sm"  name="empno" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="emptype") {
                     // echo '<th>Emp Type</th>';
                     $emptypecheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Emp Type</label>
                              <div class="col-sm-3">';?>

                               <!-- <input type="text" class="form-control form-control-sm"  name="emptype"/> -->
                               <select type="text" class="form-control form-control-sm" name="emptype">
                                  <option value="">Select</option>
                                  <option value="Permanent">Permanent</option>';
                                  <option value="Sub">Sub</option>';
                               </select>

                              </div>
                           </div>
                  <?php

                   }
                   elseif ($color=="designation") {
                     // echo '<th>Designation</th>';
                     $designationcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Designation</label>
                              <div class="col-sm-3">
                              ';?>
                               <select type="text" class="form-control form-control-sm"  name="designation">
                                <option value="">Select</option>
                                <?php
                                $query ="SELECT designation FROM companyinfor";
                                $result =mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result))
                                {
                                  if($row['designation']!=$designation)
                                  {
                                      echo "<option value='".$row['designation']."'>".$row['designation']."</option>";
                                  }
                                }
                               ?>
                               </select>
                              </div>
                           </div>
                  <?php
                   }
                   elseif ($color=="epfno") {
                     // echo '<th>EPF No</th>';
                     $epfnocheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">EPF No</label>
                              <div class="col-sm-3">

                               <input type="text" class="form-control form-control-sm"  name="epfno" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="department") {
                     // echo '<th>Department</th>';
                     $departmentcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Department</label>
                              <div class="col-sm-3">
                               ';?>
                               <select type="text" class="form-control form-control-sm"  name="department">
                                    <option value="">Select</option>
                                    <?php
                                    $query ="SELECT   departmentname FROM departmentinfor";
                                    $result =mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                      if($row['departmentname']!=$department)
                                      {
                                          echo "<option value='".$row['departmentname']."'>".$row['departmentname']."</option>";
                                      }
                                    }
                                   ?>
                                   </select>
                              </div>
                           </div>
                  <?php
                   }
                   elseif ($color=="doj") {
                     // echo '<th>Date Of Join</th>';
                     $dojcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Date Of Join</label>
                              <div class="col-sm-3">

                               <input type="date" class="form-control form-control-sm"  name="doj" />
                              </div>
                           </div>';
                   }
                   elseif ($color=="srm") {
                     // echo '<th>Sal Recepit Method</th>';
                     $srmcheck ="true";
                     echo '<div class="form-group">
                             <label for="pwd">Sal Recepit Method</label>
                              <div class="col-sm-3">';?>
                               <!-- <input type="date" class="form-control form-control-sm"  name="srm" /> -->
                               <select type="text" class="form-control form-control-sm" name="srm" >
                                 <option value="">Select</option>
                                 <option value="Bank Acc">Bank Acc</option>
                                 <option value="Cash">Cash</option>

                              </select>

                              </div>
                           </div>
                <?php
                   }
                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('Select the Columns and Click Submit');window.location = \"employee-report\"</script>";
            }
                echo '</div>';

               ?>
              <div class="report-view">
                 <input type="submit" value="Generate Report"  class="btn btn-primary btn-sm" name="generatebtn" />
                 <input type="button" value="Cancel" onclick="window.location='employee-report.php';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
              </div>
             </form>
            <?php
      }
      ?>
      <?php
         if(isset($_POST['generatebtn']))
         {
            // echo sizeof($_POST);
            // print_r(array_keys($_POST));
            // for($i=0;$i<sizeof($_POST)-2;$i++)
            // {
            //   echo $_POST[0][$i];
            // }
            $selected =array();
            foreach(array_keys($_POST) as $key)
            {

                    // if($key!="generatebtn"){
                    //
                    //   array_push($selected, $key);
                    // }
              // echo $key."\n";
                  if($key=="company")
                   {
                     $company =$_POST['company'];
                     $selected[$key]=$company;


                   }

                   if ($key=="firstname") {
                      $firstname =$_POST['firstname'];
                      $selected[$key]=$firstname;

                   }

                   // if ($key=="lastname") {
                   //
                   //   $lastname =$_POST['lastname'];
                   //   $selected[$key]=$lastname;
                   //
                   //
                   // }

                   if ($key=="othername") {

                      $othername =$_POST['othername'];
                      $selected[$key]=$othername;

                   }

                   if ($key=="caddress") {
                     //echo '<th>Current Address</th>';
                     $caddress =$_POST['caddress'];
                     $selected[$key]=$caddress;
                   }

                   if ($key=="paddress") {
                     //echo '<th>Permenent Address</th>';
                    $paddress =$_POST['paddress'];
                    $selected[$key]=$paddress;

                   }

                   if ($key=="email") {
                     //echo '<th>Email</th>';
                      $emaildb =$_POST['emaildb'];
                      $selected[$key]=$emaildb;

                   }

                   if ($key=="telephone") {
                     // echo '<th>Telephone</th>';
                      $telephone =$_POST['telephone'];
                      $selected[$key]=$telephone;
                   }

                   if ($key=="mobile") {
                     // echo '<th>Mobile</th>';
                    $mobile =$_POST['mobile'];
                    $selected[$key]=$mobile;
                   }

                   if ($key=="gender") {
                     // echo '<th>Gender</th>';
                     $gender =$_POST['gender'];
                     $selected[$key]=$gender;
                   }

                   if ($key=="accno") {
                     // echo '<th>Account No</th>';
                     $accno =$_POST['accno'];
                     $selected[$key]=$accno;
                   }

                   if ($key=="bank") {
                     // echo '<th>Bank</th>';
                     $bank =$_POST['bank'];
                     $selected[$key]=$bank;

                   }

                   if ($key=="barnch") {
                     // echo '<th>Branch</th>';
                      $barnch =$_POST['barnch'];
                      $selected[$key]=$barnch;
                   }

                   if ($key=="nation") {
                     // echo '<th>Nationality</th>';
                    $nation =$_POST['nation'];
                    $selected[$key]=$nation;
                   }

                   if ($key=="pno") {

                     $pno =$_POST['pno'];
                     $selected[$key]=$pno;
                   }

                   if ($key=="nic") {
                     // echo '<th>NIC</th>';
                    $nic =$_POST['nic'];
                    $selected[$key]=$nic;
                   }

                   if ($key=="bod") {
                     // echo '<th>BOD</th>';
                     $bod =$_POST['bod'];
                     $selected[$key]=$bod;
                   }


                   if ($key=="empno") {
                     // echo '<th>Emp No</th>';
                     $empno =$_POST['empno'];
                     $selected[$key]=$empno;
                   }

                   if ($key=="emptype") {
                     // echo '<th>Emp Type</th>';
                    $emptype =$_POST['emptype'];
                    $selected[$key]=$emptype;

                   }

                   if ($key=="designation") {
                     // echo '<th>Designation</th>';
                    $designation =$_POST['designation'];
                    $selected[$key]=$designation;
                   }

                   if ($key=="epfno") {
                     // echo '<th>EPF No</th>';
                     $epfno =$_POST['epfno'];
                     $selected[$key]=$epfno;
                   }

                   if ($key=="department") {
                     // echo '<th>Department</th>';
                     $department =$_POST['department'];
                     $selected[$key]=$department;
                   }

                   if ($key=="doj") {
                     // echo '<th>Date Of Join</th>';
                     $doj =$_POST['doj'];
                     $selected[$key]=$doj;
                   }

                   if ($key=="srm") {
                     // echo '<th>Sal Recepit Method</th>';
                      $srm =$_POST['srm'];
                      $selected[$key]=$srm;
                   }
            }
            // var_dump($selected);

            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                 <?php  $val = json_encode($selected); ?>

               <!--  <input type="hidden" name="col" value=""/> -->
                <textarea type="hidden" style="display:none;"  name="col"><?php echo $val; ?></textarea>
            <?php


             $queryse ="SELECT * FROM employeeinfor WHERE id is not null";
              if(isset($company) && $company!=null){
              $queryse= $queryse." AND company='$company' "; }
              if(isset($firstname) && $firstname!=null){
              $queryse=$queryse." AND firstname='$firstname' ";}
              if(isset($lastname)  && $lastname!=null) {
              $queryse=$queryse." AND lastname='$lastname' ";}
              if(isset($othername) && $othername!=null){
              $queryse=$queryse." AND othername='$othername' ";}
              if(isset($caddress) && $caddress!=null){
              $queryse=$queryse." AND caddress='$caddress' ";}
              if(isset($paddress) && $paddress!=null){
              $queryse=$queryse." AND paddress='$paddress' ";}
              if(isset($emaildb) && $emaildb!=null){
              $queryse=$queryse." AND email='$emaildb' ";}
              if(isset($telephone) && $telephone!=null){
              $queryse=$queryse." AND etelephone='$telephone' ";}
              if(isset($mobile) && $mobile!=null){
              $queryse=$queryse." AND mobile='$mobile' ";}
              if(isset($gender) && $gender!=null) {
              $queryse=$queryse." AND gender='$gender' ";}
              if(isset($accno) && $accno!=null){
              $queryse=$queryse." AND accno='$accno' ";}
              if(isset($bank) && $bank!=null) {
              $queryse=$queryse." AND bank='$bank' ";}
              if(isset($barnch) && $barnch!=null){
              $queryse=$queryse." AND barnch='$barnch' ";}
              if(isset($nation) && $nation!=null) {
              $queryse=$queryse." AND nation='$nation' ";}
              if(isset($pno) && $pno!=null) {
              $queryse=$queryse." AND pno='$pno' ";}
              if(isset($nic) && $nic!=null){
              $queryse=$queryse." AND nic='$nic' ";}
              if(isset($bod) && $bod!=null){
              $queryse=$queryse." AND bod='$bod' ";}
              if(isset($empno) && $empno!=null) {
              $queryse=$queryse." AND empno='$empno' ";}
              if(isset($emptype) && $emptype!=null) {
              $queryse=$queryse." AND emptype='$emptype' ";}
              if(isset($designation) && $designation!=null){
              $queryse=$queryse." AND designation='$designation' ";}
              if(isset($epfno) && $epfno!=null) {
              $queryse=$queryse." AND epfno='$epfno' ";}
              if(isset($department) && $department!=null) {
              $queryse=$queryse." AND department='$department' ";}
              if(isset($doj) && $doj!=null){
              $queryse=$queryse." AND doj='$doj' ";}
              if(isset($srm) && $srm!=null){
              $queryse=$queryse." AND srm='$srm' ";}

             $resultse =mysqli_query($conn,$queryse);
             $count =mysqli_num_rows($resultse);


             echo '
                <div class="form-group">
                    <div class="col-sm-3">
                      <label>Report title</label>
                      <input type="text" class="form-control form-control-sm"  name="rtitle" required="required" placeholder="Report title"/>
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
                      echo '<td>Full Name</td>';

                    }

                    if($key=="othername")
                    {
                      echo '<td>Other Name</td>';
                    }

                    if($key=="caddress")
                    {
                      echo '<td>Current Address</td>';
                    }
                    if($key=="paddress")
                    {
                      echo '<td>Permenent Address</td>';
                    }

                     if($key=="email")
                    {
                      echo '<td>Email/td>';
                    }
                    if($key=="telephone")
                    {
                      echo '<td>Telephone</td>';
                    }

                     if($key=="mobile")
                    {
                      echo '<td>Mobile</td>';
                    }
                    if($key=="gender")
                    {
                      echo '<td>Gender</td>';
                    }

                     if($key=="accno")
                    {
                      echo '<td>Account No</td>';
                    }
                    if($key=="bank")
                    {
                      echo '<td>Bank</td>';
                    }
                     if($key=="barnch")
                    {
                      echo '<td>Branch</td>';
                    }
                    if($key=="nation")
                    {
                      echo '<td>Nationality</td>';
                    }

                    if($key=="nic")
                    {
                      echo '<td>NIC</td>';
                    }
                    if($key=="bod")
                    {
                      echo '<td>BOD</td>';
                    }

                    if($key=="empno")
                    {
                      echo '<td>Emp No</td>';
                    }
                    if($key=="emptype")
                    {
                      echo '<td>Emp Type</td>';
                    }

                    if($key=="designation")
                    {
                      echo '<td>Designation</td>';
                    }
                    if($key=="epfno")
                    {
                      echo '<td>EPF No</td>';
                    }

                     if($key=="department")
                    {
                      echo '<td>Department</td>';
                    }
                    if($key=="doj")
                    {
                      echo '<td>Date Of Join</td>';
                    }
                    if($key=="srm")
                    {
                      echo '<td>Sal Recepit Method</td>';
                    }

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
                 foreach(array_keys($_POST) as $key)
                 {


                    if($key=="company")
                    {
                      echo '<td>'.$row["company"].'</td>';
                    }
                    if($key=="firstname")
                    {
                      echo '<td>';
                      echo $row["firstname"]."  ".$row["lastname"];
                      echo '</td>';
                    }
                    // if($key=="lastname")
                    // {
                    //   echo '<td>'.$row["lastname"].'</td>';
                    // }
                    if($key=="othername")
                    {
                      echo '<td>'.$row["othername"].'</td>';
                    }

                    if($key=="caddress")
                    {
                      echo '<td>'.$row["caddress"].'</td>';
                    }

                    if($key=="paddress")
                    {
                      echo '<td>'.$row["paddress"].'</td>';
                    }

                     if($key=="email")
                    {
                      echo '<td>'.$row["email"].'</td>';
                    }
                    if($key=="telephone")
                    {
                      echo '<td>'.$row["telephone"].'</td>';
                    }

                     if($key=="mobile")
                    {
                      echo '<td>'.$row["mobile"].'</td>';
                    }
                    if($key=="gender")
                    {
                      echo '<td>'.$row["gender"].'</td>';
                    }

                     if($key=="accno")
                    {
                      echo '<td>'.$row["accno"].'</td>';
                    }
                    if($key=="bank")
                    {
                      echo '<td>'.$row["bank"].'</td>';
                    }
                     if($key=="barnch")
                    {
                      echo '<td>'.$row["barnch"].'</td>';
                    }
                    if($key=="nation")
                    {
                      echo '<td>'.$row["nation"].'</td>';
                    }

                    if($key=="nic")
                    {
                      echo '<td>'.$row["nic"].'</td>';
                    }
                    if($key=="bod")
                    {
                      echo '<td>'.$row["bod"].'</td>';
                    }

                    if($key=="empno")
                    {
                      echo '<td>'.$row["empno"].'</td>';
                    }
                    if($key=="emptype")
                    {
                      echo '<td>'.$row["emptype"].'</td>';
                    }

                    if($key=="designation")
                    {
                      echo '<td>'.$row["designation"].'</td>';
                    }
                    if($key=="epfno")
                    {
                      echo '<td>'.$row["epfno"].'</td>';
                    }

                     if($key=="department")
                    {
                      echo '<td>'.$row["department"].'</td>';
                    }
                    if($key=="doj")
                    {
                      echo '<td>'.$row["doj"].'</td>';
                    }
                    if($key=="srm")
                    {
                      echo '<td>'.$row["srm"].'</td>';
                    }

                  }
                   echo '</tr>';
              }
              echo '

            </tbody>
           </table>
           <input type="submit"  name="rsave" value="Save"  class="btn btn-primary btn-sm" />';?>

           <input type="button" value="Cancel" onclick="window.location='http://localhost:81/bhoomitech/employee-report.php';" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Click To Refresh the Page"/>
           </form>
           </div>

       <?php
         }
       ?>
       <br>
       <?php
          if(isset($_POST['rsave']))
          {
            $rtitle =$_POST['rtitle'];
            $col= $_POST['col'];

             $query ="INSERT INTO  reportinfor (title , col)  VALUES (?,?)";

               $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"ss",$rtitle,$col);
                 $result =  mysqli_stmt_execute($stmt);
                 if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"employee-report\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"employee-report\"</script>";
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
