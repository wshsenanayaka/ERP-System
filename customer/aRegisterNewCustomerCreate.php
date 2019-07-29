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
     $query ="SELECT * FROM  customerinfor WHERE cid='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result)) 
     {
        $cid =$row['cid'];  
        $name =$row['name'];
        $phone =$row['phone'];  
        $cemail =$row['email'];
        $reg_date =$row['reg_date'];
     } 
    
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
      .abtn
      {
       margin-left: 15px;
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
         <?php if ($update == true): ?>
          Edit Customer Details
         <?php else: ?>
          Add New Customer
          <?php endif ?>
        </li>
      </ol>
       <div class="container">
       <form action="aRegisterNewCustomerCont.php" method="POST">
          <div class="column-left">
            <div class="form-group">
                <label for="pwd">Name</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" value="<?php if(isset($name)){ echo $name;}?>"  name="name" required="required"/>
                </div>
           </div>
           <div class="form-group">
             <label for="pwd">Reg Date</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm"  value ="<?php if(isset($reg_date)){ echo $reg_date;} if(!isset($reg_date)){ echo date("Y-m-d");} ?>" name ="regdate" value ="<?php echo date("Y-m-d")  ?>" <?php if(!isset($reg_date)){ echo 'readonly';} ?> name="date" required="required"/>
              </div>
          </div>
         <!--  <div class="form-group">
             <label for="pwd">Address </label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($add1)){ echo $add1;}?>" name="add1" required="required"/>
              </div>
          </div> -->
           <!-- <div class="form-group">
             <label for="pwd">Site 1</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($site1)){ echo $site1;}?>" name="site1"/>
              </div>
          </div> -->
          <div class="abtn">
              <?php if ($update == true): ?>
                <input type="submit" name="rupdate" class="btn btn-primary btn-sm" value="update"/>
              <?php else: ?>
                  <input type="submit" name="addsup" value="Save" class="btn btn-primary btn-sm"/>
                  <input type="reset" name="serchsubep" value="Cancle" class="btn btn-primary btn-sm"/>
              <?php endif ?>
              <input type="button" onclick="window.location='./aRegisterNewCustomer.php';" value="Back" class="btn btn-primary btn-sm"/>
          </div>
          </div>
          <div class="column-center">
            <div class="form-group">
               <label for="pwd">Phone</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" value="<?php if(isset($phone)){ echo $phone;}?>" name="phone" required="required"/>
                </div>
            </div>
            <div class="col-sm-3">
              <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($cid)){ echo $cid;}?>"  name="id"/> 
            </div>
            <div class="form-group">
               <label for="pwd">Email</label>
                <div class="col-sm-3">
                 <input type="email" class="form-control form-control-sm" value="<?php if(isset($cemail)){ echo $cemail;}?>" name="email"/>
                </div>
            </div>
           <!--  <div class="form-group">
             <label for="pwd">Site 2</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($site2)){ echo $site2;}?>" name="site2"/>
              </div>
            </div>
            <div class="form-group">
             <label for="pwd">Site 3</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($site3)){ echo $site3;}?>" name="site3"/>
              </div>
          </div> -->
          </div>
        </form>
     </div>

     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>

  </div>
</body>

</html>
<script type="text/javascript" language="javascript" >
 
</script>

