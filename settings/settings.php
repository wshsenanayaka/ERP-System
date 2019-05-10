<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
   
    include('../include/check.php');

    if(isset($_SESSION['sid']))
    {
        $queryadd ="SELECT * FROM salarypackagesinfor WHERE id ='".$_SESSION['sid']."'";
        $resultadd =mysqli_query($conn,$queryadd);
         while($row = mysqli_fetch_array($resultadd))
          {
            $spnamese = $row['spname'];
          }
        $add ="add";
        $ded ="ded";

        $tablename1 =$spnamese.$add;
        $tablename2 =$spnamese.$ded;

        //$_SESSION['tablename1']=$tablename1;
        $cid ="0";
        $querytable1 ="SELECT * FROM $tablename1 WHERE id ='$cid'";
        $resultable1 =mysqli_query($conn,$querytable1);
         while($row = mysqli_fetch_array($resultable1))
          {
            $id = $row['id'];
            $bs = $row['bs'];
            $ba = $row['ba'];
            $mm = $row['mm'];
            $trv = $row['trv'];
            $acco = $row['acco'];
            $add1 = $row['add1'];
            $add2 = $row['add2'];
          }
        $querytable2 ="SELECT * FROM $tablename2 WHERE id='$cid'";
        $resultable2 =mysqli_query($conn,$querytable2);
         while($row = mysqli_fetch_array($resultable2))
          {
            $id = $row['id'];
            $epf = $row['epf'];
            $sa = $row['sa'];
            $sl = $row['sl'];
            $ded1 = $row['ded1'];
            $ded2 = $row['ded2'];
          }



          $_SESSION['sid'] =null;

         //  echo  $spnamese;

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
<?php include('../include/head.php') ?>

 <style type="text/css">
 .column-left{ float: left; width: 33%; }
.column-right{ float: right; width: 33%; }
.column-center{ display: inline-block; width: 33%; }
.acreate
{
  margin-top: 80px;
  margin-left: 17px;
}
.dcreate
{
  margin-left: 17px;
}
.ccreate
{
  margin-left: 17px;
}
.hralign
{
  padding-right: 85px;
  width: 300px;
}
.not_active {
  pointer-events: none;
  cursor: default;
  color: red;
  }
  .fade1.show
  {
    opacity: 1;
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
          <a href="#">Settings</a>
        </li>
      </ol>
<div class="container">
 <div class="column-left">
  <b><h6>Add Company </h6></b>
  <div class="hralign">
     <hr>
 </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
           <label for="pwd">Company</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="co" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Designation</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="de" required="required"/>
            </div>
       </div>
       <div class="ccreate">
        <button type="submit" class="btn btn-primary btn-sm" name="csave">Create</button>
        <button type="button" class="btn btn-primary btn-sm" name="csave" data-toggle="modal" data-target="#companyView">View</button>
       </div>

  </form>
  </div>
  <div class="column-center">
    <b><h6>Comany Bank Account</h6></b>
    <div class="hralign">
       <hr>
   </div>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="form-group">
           <label for="pwd">Company</label>
            <div class="col-sm-3">
                 <select type="text" class="form-control form-control-sm" name="aco" required="required">
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
        <div class="form-group">
           <label for="pwd">Bank Name</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="bn" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Account No</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="ac" required="required"/>
            </div>
       </div>
       <div class="ccreate">
         <button type="submit" class="btn btn-primary btn-sm" name="asave">Submit</button>
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AccountView">View</button>
       </div>
  </form>
  </div>
  <!-- Account Modal  -->
   <div class="column-right">
     <b><h6>Add Department</h6></b>
      <div class="hralign">
         <hr>
     </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="form-group">
           <label for="pwd">Company</label>
            <div class="col-sm-3">
                 <select type="text" class="form-control form-control-sm" name="dco" required="required">
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
        <div class="form-group">
           <label for="pwd">Department</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="de" required="required"/>
            </div>
       </div>

       <div class="ccreate">
        <button type="submit" class="btn btn-primary btn-sm" name="dsave">Submit</button>
       </div>
  </form>
</div>
</div>
   <?php
           require '../include/config.php';

          if(isset($_POST['csave']))
          {

             $company =mysqli_real_escape_string($conn,$_POST['co']);
             $designation =mysqli_real_escape_string($conn ,$_POST['de']);

             $queryadd ="SELECT * FROM companyinfor WHERE company='$company'";
             $resultadd =mysqli_query($conn,$queryadd);
             $count =mysqli_num_rows($resultadd);

             if($count==0)
             {

                $query ="INSERT INTO  companyinfor (company,designation)  VALUES (?,?)";

                 $stmt =mysqli_stmt_init($conn);
                 if(!mysqli_stmt_prepare($stmt,$query))
                  {
                     echo "SQL Error";
                  }
                else
                  {
                     mysqli_stmt_bind_param($stmt,"ss",$company,$designation);
                 $result =  mysqli_stmt_execute($stmt);
                 if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"settings\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"settings\"</script>";
                  }
                 }
            }
            else
            {
              echo "<script type='text/javascript'>alert('$company'+' Company Already exists !! Please try again ');window.location = \"\"</script>";
            }
          }
   ?>
   <?php
           require '../include/config.php';

          if(isset($_POST['asave']))
          {

             $companyname =mysqli_real_escape_string($conn,$_POST['aco']);
             $bankname =mysqli_real_escape_string($conn ,$_POST['bn']);
             $accountno =mysqli_real_escape_string($conn ,$_POST['ac']);

             $queryco ="SELECT id FROM companyinfor WHERE company=?;";
             $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$queryco))
              {
                 echo "SQL Error";
              }
             else
              {
                 mysqli_stmt_bind_param($stmt,"s",$companyname);
                 mysqli_stmt_execute($stmt);

                 $result =mysqli_stmt_get_result($stmt);
                  while($row = mysqli_fetch_array($result))
                  {
                        $companyid = $row['id'];
                  }

               }

               $query ="INSERT INTO  accountinfor (companyid,bankname,accountno)  VALUES (?,?,?)";

               $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"sss",$companyid,$bankname,$accountno);
                 $result =  mysqli_stmt_execute($stmt);
                  if(!$result)
                   {
                      echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"settings\"</script>";
                   }
                  else
                   {
                       echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"settings\"</script>";
                   }
              }
          }
   ?>
   <?php
           require '../include/config.php';
          if(isset($_POST['dsave']))
          {

             $companyname =mysqli_real_escape_string($conn,$_POST['dco']);
             $depname =mysqli_real_escape_string($conn ,$_POST['de']);

             $queryco ="SELECT id FROM companyinfor WHERE company=?;";
             $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$queryco))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"s",$companyname);
                 mysqli_stmt_execute($stmt);

                 $result =mysqli_stmt_get_result($stmt);
                  while($row = mysqli_fetch_array($result))
                  {
                        $companyid = $row['id'];
                  }

             }

               $query ="INSERT INTO  departmentinfor (departmentname,companyid)  VALUES (?,?)";

               $stmt =mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
            else
              {
                 mysqli_stmt_bind_param($stmt,"ss",$depname ,$companyid);
                 $result =  mysqli_stmt_execute($stmt);
                  if(!$result)
                   {
                      echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"settings\"</script>";
                   }
                  else
                   {
                       echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"settings\"</script>";
                   }
              }
          }
   ?>

   <br><br>
   <h3>Salary Packages</h3>
   <hr/>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

       <div class="form-inline">
        <div class="form-group">
           <label for="pwd">Salary Packages Name</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="sp" required="required"/>
            </div>
       </div>
       <div class="create">
        <button type="submit" class="btn btn-primary btn-sm" name="ssave">Add</button>
       </div>
     </div>

  </form>
  <br>
  <div class="ptable">
   <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th width="150px">Salary Packages</th>
         <td width="150px"></td>

        </tr>
       </thead>
       <tbody>
       <?php
       $queryse="SELECT * FROM salarypackagesinfor";
       $result =mysqli_query($conn,$queryse);
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
        
        echo '<tr>';
        if($row["spname"]!="default"){
          echo  ' <td>'.$row["spname"].'</td>';
          echo '<td><a href="settingsCont.php?sprop_id='.$row["id"].'">Edit</a></td>';
        }
       
        echo '</tr>';
        
        $i++;
       }
       ?>
       </tbody>
    </table>
  </div>

  <br>

   <?php
           require '../include/config.php';
          if(isset($_POST['ssave']))
          {

               $spname =mysqli_real_escape_string($conn,$_POST['sp']);

               $query ="INSERT INTO  salarypackagesinfor (spname)  VALUES (?)";

               $stmt =mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$query))
                  {
                     echo "SQL Error";
                  }
                else
                  {
                     mysqli_stmt_bind_param($stmt,"s",$spname);
                     $result =  mysqli_stmt_execute($stmt);
                      if(!$result)
                       {
                          echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"settings\"</script>";
                       }
                      else
                       {
                           echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"settings\"</script>";
                       }
                  }

                  $query1 ="SELECT * FROM salarypackagesinfor WHERE spname=?;";
                   $stmt1 =mysqli_stmt_init($conn);
                   if(!mysqli_stmt_prepare($stmt1,$query1))
                    {
                       echo "SQL Error";
                    }
                  else
                    {
                       mysqli_stmt_bind_param($stmt1,"s",$spname);
                       mysqli_stmt_execute($stmt1);

                       $result =mysqli_stmt_get_result($stmt1);
                        while($row = mysqli_fetch_array($result))
                        {
                              $spid = $row['id'];
                        }

                   }
                  $add ="add";
                  $ded ="ded";
                  $spname1 =$spname.$add;
                  $spname2 =$spname.$ded;


                   $query2 ="INSERT INTO  subsalarypackages (spid ,subname)  VALUES (?,?)";

                   $stmt =mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$query2))
                      {
                         echo "SQL Error";
                      }
                    else
                      {
                         mysqli_stmt_bind_param($stmt,"ss",$spid,$spname1);
                         mysqli_stmt_execute($stmt);
                      }

                     $query21 ="CREATE TABLE $spname1 (id int ,bs decimal(16,2) NOT NULL , fbs DATE ,tbs DATE ,ba decimal(16,2) NOT NULL ,fba DATE, tba DATE ,mm decimal(16,2) NOT NULL ,fmm DATE,tmm DATE,trv decimal(16,2) NOT NULL , ftrv DATE,ttrv DATE,acco decimal(16,2) NOT NULL ,facco DATE,tacco DATE, add1 decimal(16,2) NOT NULL,fadd1 DATE,tadd1 DATE,add2 decimal(16,2) NOT NULL ,fadd2 DATE, tadd2 DATE)";
                     mysqli_query($conn ,$query21);

                     $default ="0.00";
                     $asign ="0";
                     $query211 ="INSERT INTO $spname1 (id ,bs,ba,mm,trv,acco,add1,add2) VALUES(?,?,?,?,?,?,?,?)";
                     $stmt =mysqli_stmt_init($conn);
                      if(!mysqli_stmt_prepare($stmt,$query211))
                        {
                           echo "SQL Error";
                        }
                      else
                        {
                           mysqli_stmt_bind_param($stmt,"ssssssss",$asign ,$default,$default,$default,$default,$default,$default,$default);
                           mysqli_stmt_execute($stmt);
                        }

                     $query3 ="INSERT INTO  subsalarypackages (spid ,subname)  VALUES (?,?)";

                     $stmt =mysqli_stmt_init($conn);
                      if(!mysqli_stmt_prepare($stmt,$query3))
                        {
                           echo "SQL Error";
                        }
                      else
                        {
                           mysqli_stmt_bind_param($stmt,"ss",$spid,$spname2);
                           mysqli_stmt_execute($stmt);
                        }

                       $query31 ="CREATE TABLE $spname2 (id int ,epf decimal(16,2) NOT NULL,fepf DATE ,tepf DATE,sa decimal(16,2) NOT NULL, fsa DATE,tsa DATE,sl decimal(16,2) NOT NULL,fsl DATE,tsl DATE,ded1 decimal(16,2) NOT NULL,fded1 DATE,tded1 DATE ,ded2 decimal(16,2) NOT NULL ,fded2 DATE,tded2 DATE)";
                       mysqli_query($conn ,$query31);

                        $default ="0.00";

                       $query311 ="INSERT INTO $spname2 (id ,epf,sa,sl,ded1,ded2) VALUES(?,?,?,?,?,?)";
                       $stmt =mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$query311))
                          {
                             echo "SQL Error";
                          }
                        else
                          {
                             mysqli_stmt_bind_param($stmt,"ssssss",$asign ,$default,$default,$default,$default,$default);
                             mysqli_stmt_execute($stmt);
                          }

          }

   ?>
   <h4>Set All Additions</h4>
   <hr/>
  <div class="container">
    <form action="./settingsCont.php" method="POST">

        <div class="column-left">
        <div class="form-group">
           <label for="pwd">Basic Salary</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($bs)){ echo $bs;}?>" name="abs" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Travelling</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($trv)){ echo $trv;}?>" name="atrv" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Additional 2</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($add2)){ echo $add2;}?>"  name="aadd2" />
            </div>
       </div>
      </div>.
      <div class="column-center">
         <div class="form-group">
           <label for="pwd">Budeget Allowance</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"   value="<?php if(isset($ba)){ echo $ba;}?>"   name="aba" required="required"/>
            </div>
        </div>
         <div class="form-group">
           <label for="pwd">Accomodation</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($acco)){ echo $acco;}?>" name="aacco" required="required"/>
            </div>
        </div>
      </div>
      <div class="column-right">
        <div class="form-group">
           <label for="pwd">Meals & Medical</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($mm)){ echo $mm;}?>" name="amm" required="required"/>
            </div>
        </div>
        <div class="form-group">
           <label for="pwd">Additional 1</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($add1)){ echo $add1;}?>"  name="aadd1" />
            </div>
       </div>
      </div>

        <input type="hidden" class="form-control form-control-sm" value="<?php echo $tablename1; ?>"  name="tablename1" />

        <input type="hidden" class="form-control form-control-sm" value="<?php echo $id; ?>"  name="aid" />

     <div class="acreate">
        <!-- <button type="submit" class="btn btn-outline-primary" name="aupdate">Update</button> -->
     </div>

  </div>
  <br>
  <h4>Set All Deductions</h4>
   <hr/>
  <div class="container">
       <div class="column-left">
        <div class="form-group">
           <label for="pwd">EPF (%)</label>
            <div class="col-sm-3">
             <!-- <input type="number" class="form-control form-control-sm"  value="<?php if(isset($epf)){ echo $epf;}?>"  name="depf" required="required"/> -->
             <select type="number" class="form-control form-control-sm" name="depf" required="required">
               <option value="">Select</option>
               <option value="12">12</option>;
               <option value="8">8</option>;
             </select>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Deduction 1</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($ded1)){ echo $ded1;}?>"  name="dded1" required="required"/>
            </div>
       </div>
       </div>
       <div class="column-center">
         <div class="form-group">
           <label for="pwd">Salary Advance</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($sa)){ echo $sa;}?>"  name="dsa" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Deduction 2</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($ded2)){ echo $ded2;}?>"  name="dded2" required="required"/>
            </div>
       </div>
      </div>
      <div class="column-right">
         <div class="form-group">
           <label for="pwd">Staff Loan</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($sl)){ echo $sl;}?>"   name="dsl" required="required"/>
            </div>
       </div>
      </div>

       <input type="hidden" class="form-control form-control-sm" value="<?php echo $tablename2; ?>"  name="tablename2" />

        <input type="hidden" class="form-control form-control-sm" value="<?php echo $id; ?>"  name="did" />
       <div class="dcreate">
        <button type="submit" class="btn btn-primary btn-sm" name="dupdate">Submit</button>
       </div>
  </form>
  </div>
  <br>
  </div>

  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>
 

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div id="AccountView" class="modal fade"  role="dialog">
       <div class="modal-dialog modal-lg" id="AccountView">
         <div class="modal-content" id="AccountView">
           <div class="modal-header" style="border-bottom: 1px solid #000000;">
             <h4 class="heda-text" style="float: left;">Bank Account</h4>
           </div>
           <div class="modal-body" id="AccountView">
             <?php
             $queryacc ="SELECT * FROM accountinfor";
             $resultacc =mysqli_query($conn,$queryacc);
              ?>
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Company</th>
                    <th>Bank Name</th>
                    <th>Account No</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($rowacc = mysqli_fetch_array($resultacc))
                  {
                    echo '<tr>';
                      echo '<td>';
                      $cmid =$rowacc["companyid"];
                      $qu="SELECT * FROM companyinfor WHERE id='$cmid'";
                      $re =mysqli_query($conn,$qu);
                      while($ro = mysqli_fetch_array($re))
                      {
                        $coname =$ro["company"];
                        echo $ro["company"];
                      }
                      echo '</td>';
                      echo ' <td>'.$rowacc["bankname"].'</td>';
                      echo ' <td>'.$rowacc["accountno"].'</td>';
                
                      $querymck="SELECT * FROM employeeinfor WHERE company='$coname'";
                      $resultmck =mysqli_query($conn,$querymck);
                      $countmck =mysqli_num_rows($resultmck);

                      if($countmck==0)
                      {
                        echo ' <td><a href="settingsCont?accdelete_id='.$rowacc["id"].'" onclick="confirmation(event)">Delete</a></td>';
                      }
                      else
                      {
                        echo ' <td><a href="settingsCont?cdelete_id='.$rowacc["id"].'" onclick="confirmation(event)" class="not_active">Delete</a></td>';
                      }
                    echo '</tr>';
                  }
                  ?>
                </tbody>
              </table>

           </div>
           <div class="modal-footer" style="border-top: 0px;">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
     </div>
  

  </div>
</body>

</html>
<!-- Comany Modal -->
<div class="modal fade" id="companyView">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 1px solid #000000;">
        <h4 class="heda-text" style="float: left;">Compny Details</h4>
      </div>
      <div class="modal-body">
        <?php
        $querymc ="SELECT * FROM companyinfor";
        $resultmc =mysqli_query($conn,$querymc);

         ?>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>Company</th>
              <th>Designation</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

             <?php
             while($rowmc = mysqli_fetch_array($resultmc))
             {
               echo '<tr>';
                 echo ' <td>'.$rowmc["company"].'</td>';
                 echo ' <td>'.$rowmc["designation"].'</td>';
                 $co =$rowmc["company"];
                 $querymck="SELECT * FROM employeeinfor WHERE company='$co'";
                 $resultmck =mysqli_query($conn,$querymck);
                 $countmck =mysqli_num_rows($resultmck);

                 if($countmck==0)
                 {
                   echo ' <td><a href="settingsCont?cdelete_id='.$rowmc["id"].'" onclick="confirmation(event)">Delete</a></td>';
                 }
                 else
                 {
                   echo ' <td><a href="settingsCont?cdelete_id='.$rowmc["id"].'" onclick="confirmation(event)" class="not_active">Delete</a></td>';
                 }

               echo '</tr>';
             }
             ?>
         </tbody>
        <table>
      </div>
      <div class="modal-footer" style="border-top: 0px; padding: 0px;">
           <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
function confirmation(e) {
     var answer = confirm("Are you sure you want to permanently delete this record?")
  if (!answer){
    e.preventDefault();
    return false;
  }
}
</script>
