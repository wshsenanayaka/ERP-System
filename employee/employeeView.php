<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

     include('../include/check.php'); 

     if(isset($_GET['view_id'])){

     $id =$_GET['view_id'];
     $_SESSION['editid'] =$_GET['view_id'];
     $query ="SELECT * FROM employeeinfor WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $company1 =$row['company'];
        $firstname1 =$row['firstname'];
        $lastname1=$row['lastname'];
        $othername1 =$row['othername'];
        $caddress1 =$row['caddress'];
        $paddress1 =$row['paddress'];
        $emaile1 =$row['email'];
        $telephone1 =$row['telephone'];
        $mobile1 =$row['mobile'];
        $accno1 =$row['accno'];
        $bank1 =$row['bank'];
        $barnch1 =$row['barnch'];
        $nation1 =$row['nation'];
        $pno1 =$row['pno'];
        $nic1 =$row['nic'];
        $empno1 =$row['empno'];
        $emptype1 =$row['emptype'];
        $gender1 =$row['gender'];

        $bod1 =$row['bod'];
        $doj1 =$row['doj'];
        $designation1 =$row['designation'];
        $epfno1 =$row['epfno'];
        $department1 =$row['department'];
        $srm1 =$row['srm'];
        $paddress1 =$row['paddress'];
     }
     $query ="SELECT * FROM employeeinforcopy WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $company2 =$row['company'];
        $firstname2 =$row['firstname'];
        $lastname2 =$row['lastname'];
        $othername2 =$row['othername'];
        $caddress2 =$row['caddress'];
        $paddress2 =$row['paddress'];
        $emaile2 =$row['email'];
        $telephone2 =$row['telephone'];
        $mobile2 =$row['mobile'];
        $accno2 =$row['accno'];
        $bank2 =$row['bank'];
        $barnch2 =$row['barnch'];
        $nation2 =$row['nation'];
        $pno2 =$row['pno'];
        $nic2 =$row['nic'];
        $empno2 =$row['empno'];
        $emptype2 =$row['emptype'];
        $gender2 =$row['gender'];

        $bod2 =$row['bod'];
        $doj2 =$row['doj'];
        $designation2 =$row['designation'];
        $epfno2 =$row['epfno'];
        $department2=$row['department'];
        $srm2 =$row['srm'];
        $paddress2 =$row['paddress'];
     }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
.column-left{ float: left; width: 33%; }
.column-right{ float: right; width: 33%;  }
.align{height: 2000px;}
.ovalue{margin-left: 20%;color: red;}

  </style>

  <?php include('../include/head.php') ?>

</head>
<style>

</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
      View The Employee Details EMP No :<?php if(isset($empno2)){echo $empno2;}?>
      </ol>
    <div class="align">
      <div class="container">
       <div class="column-left">
      <div class="ovalue">
        Orginal Value
      </div>
       <div class="form-group">
        <div class="form-group">
         <label for="email">Company:</label><br>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($company1)){ echo $company1;}?>" readonly/>
          </div>
        </div>
         <div class="form-group">
           <label for="pwd">First Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($firstname1)){ echo $firstname1 ;}?>"  readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Last Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($lastname1)){ echo $lastname1 ;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Other Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($othername1)){ echo $othername1;}?>"  readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Current Address:</label>
            <div class="col-sm-3">
             <textarea type="text" class="form-control"
              readonly><?php if(isset($caddress1)){echo $caddress1;}?>
             </textarea>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Permenent Address:</label>
            <div class="col-sm-3">
             <textarea type="text" class="form-control"
             readonly><?php if(isset($paddress1)){echo $paddress1;}?>
             </textarea>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Email:</label>
            <div class="col-sm-3">
              <input type="email" class="form-control form-control-sm"  value="<?php if(isset($emaile1)){ echo $emaile1;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
          <label for="pwd">Telephone:</label>
           <div class="col-sm-3">
            <input type="number" class="form-control form-control-sm"  value="<?php if(isset($telephone1)){ echo $telephone1;}?>" readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Mobile:</label>
           <div class="col-sm-3">
            <input type="number" class="form-control form-control-sm" value="<?php if(isset($mobile1)){ echo $mobile1;}?>" readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Account No:</label>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($accno1)){ echo $accno1;}?>"  readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Bank:</label>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($bank1)){ echo $bank1;}?>" readonly/>
           </div>
      </div>
        <div class="form-group">
           <label for="pwd">Branch:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($barnch1)){ echo $barnch1;}?>"  readonly/>
            </div>
       </div>
           <div class="form-group">
               <label for="pwd">Nationality:</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm"  value="<?php if(isset($nation1)){ echo $nation1;}?>"  readonly/>
                </div>
           </div>
           <div class="form-group">
             <label for="pwd">Passport No:</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm"  value="<?php if(isset($pno1)){ echo $pno1;}?>" readonly />
              </div>
          </div>
          <div class="form-group">
             <label for="nic">NIC:</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($nic1)){ echo $nic1;}?>" readonly/>
              </div>
         </div>
       <div class="form-group">
           <label for="pwd">Emp No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($empno1)){ echo $empno1;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Emp Type:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($emptype1)){ echo $emptype1;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Gender: </label>
           <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm"  value="<?php if(isset($gender1)){ echo $gender1;}?>"  readonly/>
            </div>
        </div>
        <div class="form-group">
           <label for="pwd">BOD:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($bod1)){ echo $bod1;}?>" readonly/>
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Date Of Join:</label>
             <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm"  value="<?php if(isset($doj1)){ echo $doj1;}?>"  readonly/>
             </div>
        </div>
        <div class="form-group">
            <label for="pwd">Designation:</label>
             <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" value="<?php if(isset($designation1)){ echo $designation1;}?>"  readonly/>
             </div>
        </div>
       <div class="form-group">
           <label for="pwd">EPF No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($epfno1)){ echo $epfno1;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Department:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm"  value="<?php if(isset($department1)){ echo $department1;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Sal Recepit Method:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($srm1)){ echo $srm1;}?>"  readonly/>
            </div>
       </div>
      </div>
     </div>
      <div class="column-right">
        <div class="ovalue">
         After Edit Value
        </div>
        <div class="form-group">
         <label for="email">Company:</label><br>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($company2)){ echo $company2;}?>" readonly/>
          </div>
        </div>
         <div class="form-group">
           <label for="pwd">First Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($firstname2)){ echo $firstname2 ;}?>"  readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Last Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($lastname2)){ echo $lastname2 ;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Other Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($othername2)){ echo $othername2;}?>"  readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Current Address:</label>
            <div class="col-sm-3">
             <textarea type="text" class="form-control"
              readonly><?php if(isset($caddress2)){echo $caddress2;}?>
             </textarea>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Permenent Address:</label>
            <div class="col-sm-3">
             <textarea type="text" class="form-control"
             readonly><?php if(isset($paddress2)){echo $paddress2;}?>
             </textarea>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Email:</label>
            <div class="col-sm-3">
              <input type="email" class="form-control form-control-sm"  value="<?php if(isset($emaile2)){ echo $emaile2;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
          <label for="pwd">Telephone:</label>
           <div class="col-sm-3">
            <input type="number" class="form-control form-control-sm"  value="<?php if(isset($telephone2)){ echo $telephone2;}?>" readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Mobile:</label>
           <div class="col-sm-3">
            <input type="number" class="form-control form-control-sm" value="<?php if(isset($mobile2)){ echo $mobile2;}?>" readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Account No:</label>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($accno2)){ echo $accno2;}?>"  readonly/>
           </div>
      </div>
      <div class="form-group">
          <label for="pwd">Bank:</label>
           <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($bank2)){ echo $bank2;}?>" readonly/>
           </div>
      </div>
        <div class="form-group">
           <label for="pwd">Branch:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($barnch2)){ echo $barnch2;}?>"  readonly/>
            </div>
       </div>
           <div class="form-group">
               <label for="pwd">Nationality:</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm"  value="<?php if(isset($nation2)){ echo $nation2;}?>"  readonly/>
                </div>
           </div>
           <div class="form-group">
             <label for="pwd">Passport No:</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm"  value="<?php if(isset($pno2)){ echo $pno2;}?>" readonly />
              </div>
          </div>
          <div class="form-group">
             <label for="nic">NIC:</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($nic2)){ echo $nic2;}?>" readonly/>
              </div>
         </div>
       <div class="form-group">
           <label for="pwd">Emp No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($empno2)){ echo $empno2;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Emp Type:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($emptype2)){ echo $emptype2;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Gender: </label>
           <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm"  value="<?php if(isset($gender2)){ echo $gender2;}?>"  readonly/>
            </div>
        </div>
        <div class="form-group">
           <label for="pwd">BOD:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($bod2)){ echo $bod2;}?>" readonly/>
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Date Of Join:</label>
             <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm"  value="<?php if(isset($doj2)){ echo $doj2;}?>"  readonly/>
             </div>
        </div>
        <div class="form-group">
            <label for="pwd">Designation:</label>
             <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" value="<?php if(isset($designation2)){ echo $designation2;}?>"  readonly/>
             </div>
        </div>
       <div class="form-group">
           <label for="pwd">EPF No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($epfno2)){ echo $epfno2;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Department:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm"  value="<?php if(isset($department2)){ echo $department2;}?>" readonly/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Sal Recepit Method:</label>
            <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm" value="<?php if(isset($srm2)){ echo $srm2;}?>"  readonly/>
            </div>
       </div>
      </div>
    </div>
  </div>
  <hr/>
  <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
     <div class="form-inline">
        <div class="form-group">
         <label for="pwd">Status</label>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <select type="text" class="form-control form-control-sm" name="sstate" required="required">
              <?php
              $queryse ="SELECT * FROM employeeinfor WHERE id='".$_SESSION['editid']."'";
              $resultse =mysqli_query($conn,$queryse);
              while ($rowse=mysqli_fetch_array($resultse))
              {
                    $state =$rowse['status'];
              }
               if(isset($state))
                   {

                       echo "<option value='".$state."'>".$state."</option>";

                   }
                 ?>
                 <option value="">Select</option>
                 <?php
                 if($state!="Pending")
                 {
                   echo ' <option value="Pending">Pending</option>';
                 }
                 if($state!="Approved")
                 {
                   echo ' <option value="Approved">Approved</option>';
                 }
                 if($state!="Rejected")
                 {
                   echo ' <option value="Rejected">Rejected</option>';
                 }
              ?>
           </select>
         </div>
        </div>
        <div class="form-group">
          <input type="submit" name="bbtn" value="Submit" class="btn btn-primary btn-sm"/>
         </div>
        </div>
        <br>
          <input type="button" value="Go Back" onclick="window.location='./employee';" class="btn btn-primary btn-sm" />
       </div>
       <br><br>
   </form>
    <?php
       if(isset($_POST['bbtn']))
       {
          $status =mysqli_real_escape_string($conn ,$_POST['sstate']);
          if($status=="Approved")
          {
            $query ="SELECT * FROM employeeinforcopy WHERE id='".$_SESSION['editid']."'";
            $result =mysqli_query($conn,$query);
            while ($row=mysqli_fetch_array($result))
            {
               $company2 =$row['company'];
               $firstname2 =$row['firstname'];
               $lastname2 =$row['lastname'];
               $othername2 =$row['othername'];
               $caddress2 =$row['caddress'];
               $paddress2 =$row['paddress'];
               $emaile2 =$row['email'];
               $telephone2 =$row['telephone'];
               $mobile2 =$row['mobile'];
               $accno2 =$row['accno'];
               $bank2 =$row['bank'];
               $barnch2 =$row['barnch'];
               $nation2 =$row['nation'];
               $pno2 =$row['pno'];
               $nic2 =$row['nic'];
               $empno2 =$row['empno'];
               $emptype2 =$row['emptype'];
               $gender2 =$row['gender'];

               $bod2 =$row['bod'];
               $doj2 =$row['doj'];
               $designation2 =$row['designation'];
               $epfno2 =$row['epfno'];
               $department2=$row['department'];
               $srm2 =$row['srm'];
               $paddress2 =$row['paddress'];
            }
            $query ="UPDATE  employeeinfor  SET company=?,firstname=?,lastname=?,othername=?,caddress=?,paddress=?,email=?,telephone=?,mobile=?,gender=?,accno=?,bank=?,barnch=?,nation=?,pno=?,nic=?,bod=?,empno=?,emptype=?,designation=?,epfno=?,department=?,doj=?,srm=?,status=? WHERE id=?;";
            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$query))
            {
               echo "SQL Error";
            }
            else
            {
                mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssssss",$company2,$firstname2,$lastname2,$othername2,$caddress2,$paddress2,$emaile2,$telephone2,$mobile2,$gender2,$accno2,$bank2,$barnch2,$nation2,$pno2,$nic2,$bod2,$empno2,$emptype2,$designation2,$epfno2,$department2,$doj2,$srm2,$status,$_SESSION['editid']);
                $result =  mysqli_stmt_execute($stmt);
                if(!$result)
                  {
                     echo "<script type='text/javascript'>alert('Update is faild');window.location = \"employee\"</script>";
                  }
                  else
                  {
                     echo "<script type='text/javascript'>alert('Update successfully');window.location = \"employee\"</script>";
                  }
             }
          }
          else
          {
               echo "<script type='text/javascript'>alert('Successfully Exit');window.location = \"employee\"</script>";
          }
       }
     ?>
     </div>
    </div>

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
