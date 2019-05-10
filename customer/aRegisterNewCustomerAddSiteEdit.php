<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
    session_start();
    error_reporting(0);
   
    include('../include/check.php');

    if(isset($_GET['update_id']))
    {
      $value =$_GET['update_id'];
      //echo $value;
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
         Address And Site Edit Customer ID: <?php if(isset($_GET['update_id'])){ echo $_GET['update_id'];} ?>
        </li>
      </ol>
    <div class="container">
  <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <input type ="hidden" size="60" name ="val" value="<?php if(isset($_GET['update_id'])){ echo $_GET['update_id'];} ?>"/>
    <table id="simple-table" class="table  table-bordered table-hover">
     <thead>
      <tr>
       <th width="60"> <div align="center">Address</div></th>
       <th width="5000"><div align="center">Sites</div></th>

      <td></td>
    <!--   <td></td> -->

      </tr>

      <?php
      require 'config.php';
      $querycc ="SELECT * FROM caddsiteinfor WHERE  cusno='$value'";
      $resultcc =mysqli_query($conn,$querycc);
      $i=1;
      while($row =mysqli_fetch_array($resultcc))
       {

         echo '<input type="hidden"  value ="'.$row['id'].'" name ="id'.$i.'"/>';
         echo "<td>";
         echo '<input type="text"  value ="'.$row['address'].'" name ="address'.$i.'"/>';

         echo "</td>";

         echo "<td>";
         echo '<input type="text"  value ="'.$row['site'].'" name ="site'.$i.'"/>';
         echo "</td>";
         echo "<td>";
         echo '<button class="btn btn-white btn-default btn-round" name ="updatebtn'.$i.'" >
                       <i class="ace-icon glyphicon glyphicon-pencil"></i>

                     </button>';

        if(isset($_POST['updatebtn'.$i.'']))
          {
                 $id =$_POST['id'.$i.''];
                 $address =$_POST['address'.$i.''];
                 $site =$_POST['site'.$i.''];
                 echo $id.$address.$site;
                 $queryup ="UPDATE caddsiteinfor SET  address='$address',site ='$site' WHERE id ='".$id."'";
                 $resultup =mysqli_query($conn,$queryup);
                 if(!$resultup)
                 {

                 }
                 else
                 {
                   echo "<script type='text/javascript'>window.history.back();</script>";

                 }
          }
         echo "</td>";

         echo "<td>";
         echo '<a href="aRegisterNewCustomerCont?rdelete_id='.$row["id"].'">Delete</a>';
         echo "</td>";
         echo "</tr>";
         $i++;

       }
      echo "<tr>";

      echo "<td>";
      echo '<input type ="text" name ="txtaddress" class="form-control form-control-sm" />';
      echo "</td>";

      echo "<td>";
      echo '<input type ="text" size="60" name ="txtsite" />';

      echo "</td>";

      echo "<td>";

      echo'<button  class="btn btn-primary btn-sm" type ="submit" name ="addbtn" >
                        Add</button>';

        if(isset($_POST['addbtn']))
        {
          $val =$_POST['val'];
          $address =$_POST['txtaddress'];
          $site =$_POST['txtsite'];

          $queryadd = "INSERT INTO caddsiteinfor (cusno,address,site) VALUES ('$val','$address','$site')";
          $resultadd =mysqli_query($conn,$queryadd);
          if(!$resultadd)
           {
            echo "<script type='text/javascript'>window.history.back();</script>";
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
    <input class="btn btn-primary btn-sm" type ="submit" value="Save" onclick="window.location='http://localhost:81/bhoomitech/aRegisterNewCustomer';"/>
    <input type="button" value="Cancel" onclick="window.location='http://localhost:81/bhoomitech/aRegisterNewCustomer';" class="btn btn-primary btn-sm" />
    </div>


    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>
    
  </div>
</body>

</html>
