<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
    error_reporting(0);
    session_start();

    include('../include/check.php');

    if(isset($_GET['prop_id']))
    {
      $value =$_GET['prop_id'];

    }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">

      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
       .abtn
      {
      float: right;
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
         Address And Site Assign Customer ID: <?php if(isset($_GET['prop_id'])){ echo $_GET['prop_id'];} ?>
        </li>
      </ol>
    <div class="container">
   <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <input type ="hidden" size="60" name ="val" value="<?php if(isset($_GET['prop_id'])){ echo $_GET['prop_id'];} ?>"/>
    <table id="simple-table" class="table  table-bordered table-hover">
     <thead>
      <tr>
       <th width="60"> <div align="center">Address</div></th>
       <th width="5000"><div align="center">Sites</div></th>

      <td></td>
      </tr>

      <?php

      require '../include/config.php';

      $querycc ="SELECT * FROM caddsiteinfor WHERE  cusno='".$value."'";
      $resultcc =mysqli_query($conn,$querycc);
      $i=1;
      while($row =mysqli_fetch_array($resultcc))
       {

         echo "<td>";
         echo $row['address'];
         echo "</td>";

         echo "<td>";
         echo $row['site'];
         echo "</td>";

         echo "<td>";

         echo "</td>";
         echo "</tr>";
         $i++;

       }
       echo "<tr>";

      echo "<td>";
      echo '<input type ="text" name ="txtaddress" class="form-control form-control-sm" required="required"/>';
      echo "</td>";

      echo "<td>";
      echo '<input type ="text" size="60" name ="txtsite" required="required"/>';

      echo "</td>";

      echo "<td>";
      /* echo '<input type ="submit" value ="Add" name ="addbtn"/>'; */
      echo'<button  class="btn btn-primary btn-sm" type ="submit" name ="addbtn" >


                        Add</button>';


        // if(isset($_POST['addbtn']))
        // {
        //       $val =$_POST['val'];
        //       $address =$_POST['txtaddress'];
        //       $site =$_POST['txtsite'];
        //       echo $val.$address.$site;

        //       $query1 = "INSERT INTO caddsiteinfor (cusno,address,site) VALUES ('$val','$address','$site')";
        //       $result1 =mysqli_query($conn,$query1);
        //       if(!$result1)

        //          {


        //           echo "<script type='text/javascript'>alert('Insert successfully');window.history.back();</script>";

        //          }
        //          else
        //          {

        //           echo "<script type='text/javascript'>window.history.back();</script>";

        //          }

        // }
        if(isset($_POST['addbtn']))
        {
              $val =$_POST['val'];
              $address =$_POST['txtaddress'];
              $site =$_POST['txtsite'];
              echo $val.$address.$site;

              $query1 = "INSERT INTO caddsiteinfor (cusno,address,site) VALUES ('$val','$address','$site')";
              $result1 =mysqli_query($conn,$query1);
              if(!$result1)

                 {


                  echo "<script type='text/javascript'>alert('Insert successfully');window.history.back();</script>";

                 }
                 else
                 {

                  echo "<script type='text/javascript'>window.history.back();</script>";

                 }

        }
        echo "</td>";
       echo "</tr>";
    ?>
    </thead>
    </table>
 </form>
 <input class="btn btn-primary btn-sm" type ="submit" value="Adding After Click Here" onclick="window.location='./aRegisterNewCustomerCreate';"/>
    </div>


    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>
