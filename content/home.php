<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

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
          <a href="#">Home</a>
        </li>
      </ol>
      <!-- get count emp php code start -->
      <?php
         $querye ="SELECT COUNT(id) as eid FROM  employeeinfor";
         $resulte =mysqli_query($conn,$querye);
         while ($rowe =mysqli_fetch_array($resulte))
         {
            $eid =$rowe['eid'];
         }
      ?>
      <!-- get count emp php code end -->
      <!-- get count items php code start -->
      <?php
         $queryi ="SELECT COUNT(id) as iid FROM iteminfor";
         $resulti =mysqli_query($conn,$queryi);
         while ($rowi =mysqli_fetch_array($resulti))
         {
            $iid =$rowi['iid'];
         }
      ?>
      <!-- get count items php code end -->
      <!-- get count po php code start -->
      <?php
         $queryp ="SELECT COUNT(pid) as pid FROM  purchaseorderinfor";
         $resultp =mysqli_query($conn,$queryp);
         while ($rowp =mysqli_fetch_array($resultp))
         {
            $pid =$rowp['pid'];
         }
      ?>
      <!-- get count po php code end -->
      <!-- get count aod php code start -->
      <?php
         $queryd ="SELECT COUNT(did) as did FROM  dispachinfor";
         $resultd =mysqli_query($conn,$queryd);
         while ($rowd =mysqli_fetch_array($resultd))
         {
            $did =$rowd['did'];
         }
      ?>
      <!-- get count aod php code end -->
      <div class="row">
      <?php if ($email =="userhr" || $email =="admin@gmail.com" || $email=="hrm"): ?>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-users"></i>
            </div>
            <div class="mr-5"><?php echo $eid; ?> Employees!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="../employee/employee">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    <?php else: ?>

    <?php endif ?>

      <?php if ($email =="userinv" || $email =="admin@gmail.com" || $email =="userm"): ?>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5"><?php echo $iid; ?> New Items!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="../Item/addchecklistitem">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5"><?php echo $pid; ?> Purchase Orders!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="../purchaseOrder/aCreateNewPurchaseOrder">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-check-square-o"></i>
            </div>
            <div class="mr-5"><?php echo $did; ?> Dispach!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="../AOD/aCreateNewAOD">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    <?php else: ?>

    <?php endif ?>

    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>
