<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php

    include('../include/check.php');

     if(isset($_GET['update']))
     {
       $update =$_GET['update'];
     }
     else
     {
       $update =false;
     }

     if(isset($_GET['prop_id'])){

     $id =$_GET['prop_id'];
     $_SESSION['editid'] =$_GET['prop_id'];
     $query ="SELECT * FROM employeeinfor WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $company1 =$row['company'];
        $firstname =$row['firstname'];
        $lastname =$row['lastname'];
        $othername =$row['othername'];
        $caddress =$row['caddress'];
        $paddress =$row['paddress'];
        $emaile =$row['email'];
        $telephone =$row['telephone'];
        $mobile =$row['mobile'];
        $accno =$row['accno'];
        $bank =$row['bank'];
        $barnch =$row['barnch'];
        $nation =$row['nation'];
        $pno =$row['pno'];
        $nic =$row['nic'];
        $empno =$row['empno'];
        $emptype =$row['emptype'];
        $gender1 =$row['gender'];

        $bod =$row['bod'];
        $doj =$row['doj'];
        $designation =$row['designation'];
        $epfno =$row['epfno'];
        $department =$row['department'];
        $srm1 =$row['srm'];
        $paddress1 =$row['paddress'];
     }

   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%;  margin-top: 75px; height: 800px!important;}
    .column-center{ display: inline-block; width: 33%; margin-top: 75px; height: 800px;}
  </style>

   <?php include('../include/head.php') ?>
 
   <link href="../css/form.css" rel="stylesheet">

</head>
<style>
.columns-3{
 column-count: 3;
 column-gap: 10px;
}

.columns-2{
 column-count: 3;
 column-gap: 10px;
}
 .create
{
   margin-left:  15px;
}
.se

}
.aligh
{
  text-align: center;s
}
.ttalign
{
  margin-left: 15px;
  margin-right: 15px;
}
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <?php if ($update == true): ?>
            <a href="#">Edit Employee</a>
          <?php else: ?>
            <a href="#">Create Employee</a>
          <?php endif ?>
        </li>

      </ol>

     <form action="employeeCont.php" method="POST">
      <input type="hidden" value="<?php  echo date("Y-m-d");?>"   name="createdate" required="required"/>
      <div class="container">
       <div class="column-left">
       <div class="form-group">
        <div class="form-group">
             <label for="email">Company:</label><br>
               <div class="col-sm-3">
                 <select type="text" class="form-control form-control-sm"  name="company" required="required" >

                  <?php
                  if(isset($company1))
                    {
                        echo "<option value='".$company1."'>".$company1."</option>";
                    }
                  ?>
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
         <div class="form-group">
           <label for="pwd">First Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($firstname)){ echo $firstname;}?>"   name="firstname" required="required"/>
            </div>
       </div>

       <div class="form-group">
           <label for="pwd">Current Address:</label>
            <div class="col-sm-3">
             <textarea type="text" class="form-control" name="caddress" required="required"><?php if(isset($caddress)){echo $caddress;}?></textarea>

            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Email:</label>
            <div class="col-sm-3">
              <input type="email" class="form-control form-control-sm"  value="<?php if(isset($emaile)){ echo $emaile;}?>"     name="email" required="required"/>
            </div>
       </div>
         <div class="form-group">
           <label for="pwd">Gender: </label>
           <div class="col-sm-3">
             <select type="text" class="form-control form-control-sm" name="gender" required="required">
             <?php
                if(isset($gender1))
                    {
                        echo "<option value='".$gender1."'>".$gender1."</option>";
                    }
                ?>
                <option value="">Select</option>
                <?php
                if($gender1!="Male")
                {
                  echo ' <option>Male</option>';
                }
                if($gender1!="Female")
                {
                  echo ' <option>Female</option>';
                }
             ?>
             </select>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Nationality:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm"  value="<?php if(isset($nation)){ echo $nation;}?>"  name="nationality" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Account No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($accno)){ echo $accno;}?>"  name="accno" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Emp No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($empno)){ echo $empno;}?>"  name="empno" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">EPF No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($epfno)){ echo $epfno;}?>"  name="epfno" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Sal Recepit Method:</label>
            <div class="col-sm-3">
              <select type="text" class="form-control form-control-sm" name="srm" required="required">
             <!-- <option>Bank Acc</option>
             <option>Cash</option> -->
             <?php
                if(isset($srm1))
                    {
                        echo "<option value='".$srm1."'>".$srm1."</option>";
                    }
                ?>
                <option value="">Select</option>
                <?php
                if($srm1!="Bank Acc")
                {
                  echo ' <option value="Bank Acc">Bank Acc</option>';
                }
                if($srm1!="Cash")
                {
                  echo ' <option value="Cash">Cash</option>';
                }
             ?>
             </select>
            </div>
       </div>
        <div class="create">
              <?php if ($update == true): ?>
                <input type="submit" name="update" class="btn btn-primary btn-sm" value="update"/>
              <?php else: ?>
                 <input type="submit" name="esave" class="btn btn-primary btn-sm" value="Save"/>
              <?php endif ?>
         <!--  <button class="btn" type="submit" name="esave" >Save</button> -->
     </div>
     <br>
       </div>
       <br>
       <br>
      </div>
      <div class="column-center">
      <div class="form-group">
       <div class="form-group">
           <label for="pwd">Last Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($lastname)){ echo $lastname;}?>"    name="lastname" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Permenent Address:</label>
            <div class="col-sm-3">
              <textarea type="text" class="form-control" name="paddress" required="required"><?php if(isset($paddress1)){echo $paddress1;} ?></textarea>

            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Telephone:</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm"  value="<?php if(isset($telephone)){ echo $telephone;}?>"     name="telephone" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="nic">NIC:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($nic)){ echo $nic;}?>"   name="nic" required="required"/>
            </div>
       </div>
         <div class="form-group">
           <label for="pwd">Passport No:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm"  value="<?php if(isset($pno)){ echo $pno;}?>"  name="pno" />
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Bank:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($bank)){ echo $bank;}?>"   name="bank" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Emp Type:</label>
            <div class="col-sm-3">
            <!--  <input type="text" class="form-control form-control-sm" value="<?php if(isset($emptype)){ echo $emptype;}?>"    name="emptype" required="required"/>  -->

             <select type="text" class="form-control form-control-sm" name="emptype" required="required">
             <?php
                if(isset($emptype))
                    {
                        echo "<option value='".$emptype."'>".$emptype."</option>";
                    }
                ?>
                <option value="">Select</option>
                <?php
                if($emptype!="Prament")
                {
                  echo ' <option value="Permanent">Permanent</option>';
                }
                if($emptype!="Sub")
                {
                  echo ' <option value="Sub">Sub</option>';
                }
             ?>
             </select>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Department:</label>
            <div class="col-sm-3">
            <!--  <input type="text" class="form-control form-control-sm"  value="<?php if(isset($department)){ echo $department;}?>" name="department" required="required"/>  -->

             <select type="text" class="form-control form-control-sm"  name="department" required="required" >

                  <?php
                  if(isset($department))
                    {
                        echo "<option value='".$department."'>".$department."</option>";
                    }
                  ?>
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
      </div>
      </div>
      <div class="column-right">
      <div class="form-group">
       <div class="form-group">
           <label for="pwd">Other Name:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($othername)){ echo $othername;}?>"    name="othername" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Mobile:</label>
            <div class="col-sm-3">
             <input type="number" class="form-control form-control-sm" value="<?php if(isset($mobile)){ echo $mobile;}?>"   name="mobile" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">BOD:</label>
            <div class="col-sm-3">
             <input type="Date" class="form-control form-control-sm" value="<?php if(isset($bod)){ echo $bod;}?>"   name="bod" required="required"/>
            </div>
       </div>
        <div class="form-group">
           <label for="pwd">Branch:</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" value="<?php if(isset($barnch)){ echo $barnch;}?>"   name="branch" required="required"/>
            </div>
       </div>
       <div class="form-group">
           <label for="pwd">Designation:</label>
            <div class="col-sm-3">
            <!--  <input type="text" class="form-control form-control-sm" value="<?php if(isset($designation)){ echo $designation;}?>"   name="designation" required="required"/>  -->

               <select type="text" class="form-control form-control-sm"  name="designation" required="required" >

                <?php
                if(isset($designation))
                  {
                      echo "<option value='".$designation."'>".$designation."</option>";
                  }
                ?>
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
       <div class="form-group">
           <label for="pwd">Date Of Join:</label>
            <div class="col-sm-3">
             <input type="Date" class="form-control form-control-sm"  value="<?php if(isset($doj)){ echo $doj;}?>" name="doj" required="required"/>
            </div>
       </div>
        <input type="hidden" class="form-control form-control-sm"  value="<?php if(isset($email)){ echo $email;}?>" name="type" required="required"/>
      </div>
    </div>
    </div>
    </form>
  </div>
<div class="ttalign">
  <hr>
     <div>
     <input type="text" name="search_text" id="search_text"  placeholder="Search by EMP No , First Name , Last Name" class="form-control  form-control-sm" />
     <br>
     <div id="result"></div>
   </div>
 </div>
   </div>
  </div>
   </div>


  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>


    <!-- Custom scripts for this page-->
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
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../table/employee/employeeTB",
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
