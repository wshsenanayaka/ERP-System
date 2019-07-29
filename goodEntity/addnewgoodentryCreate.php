 <!-- nexgenITs Admin dashbord All right reseverd.-->
 <?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('../include/head.php') ?>
   <style type="text/css">
     .addsb
     {
      margin-left: 16px;
     }
     .salign
     {
      margin-left: 25px;
      margin-right: 25PX;
     }
     .list_unstyled{

      overflow: auto;
      background-color: #eaecef;
      color: beige;
      font-size: 15px;
      padding: 1%;
      max-height: 91px;

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
          <a href="#">Add New Good Entry</a>
        </li>
      </ol>
      <div class="form-group">
       <form action="addgoodCont.php" method="POST">
          <?php if (isset($_GET['gname'])): ?>
           <div class="form-group">
             <label for="pwd">Supplier Name</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" name="sn" value="<?php if(isset($_GET['gname'])){ echo $_GET['gname'];}?>"  required="required" readonly/>
              </div>
          </div>
          <?php else: ?>
           <div class="form-group">
             <label for="pwd">Supplier Name</label>
              <div class="col-sm-3">
                   <select type="text" class="form-control form-control-sm" name="sn" value="" required="required">
                    <option value="">Select</option>
                    <?php
                    $query ="SELECT name FROM supplierinfor";
                    $result =mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                       if($row['name']!=$suppliername)
                       {
                         echo "<option value='".$row['name']."'>".$row['name']."</option>";
                       }
                    }
                   ?>
                   </select>
              </div>
           </div>
           <?php endif ?>
           <div class="form-group">
             <label for="pwd">Supplier's Invoice No</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control form-control-sm" name="sno" value="<?php if(isset($_GET['gsupno'])){ echo $_GET['gsupno'];}?>"  required="required" <?php if(isset($_GET['gsupno'])){ echo 'readonly';}  ?>/>
              </div>
          </div>
          <div class="form-group" id="viewIC">
             <label for="pwd">Item Code</label>
              <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="ic" id="select1"/>
                   <div id="userlist6" class="auto-view"></div>
              </div>
          </div>
          <div class="form-group" id="viewSE">
             <label for="pwd">Sales disc</label>
              <div class="col-sm-3">
                   <input type="text" class="form-control form-control-sm" name="salesdisc" id="select2" style="width: 450px;"/>
                   <div id="userlist7" class="auto-view"></div>
              </div>
          </div>

          <div id="show_product_text">
          </div>

          <div id="showSelect">
          </div>

          <div class="form-group">
             <label for="pwd">Quantity</label>
              <div class="col-sm-3">
               <input type="number" class="form-control form-control-sm" name="qu" value="<?php if(isset($quantity)){ echo $quantity;}?>" min="0" required="required"/>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-3">
               <input type="hidden" class="form-control form-control-sm" name="pid" value="<?php if(isset($purchaseid)){ echo $purchaseid;}?>" required="required"/>
              </div>
          </div>
          <div class="addsb">

            <input type="submit" name="addsup" value="Save" class="btn btn-primary btn-sm"/>
            <input type="submit" name="addmore" value="Add More" class="btn btn-primary btn-sm"/>
            <input type="submit" name="serchsubep" value="Cancle" class="btn btn-primary btn-sm" onclick="window.location='./addnewgoodentry';"/>

          </div>
       </form>
     </div>
     <?php
      if(isset($_GET['gsupno']))
      {
        require '../include/config.php';
      
        $queryse = "SELECT  * FROM goodentry WHERE supplierinvoiceno='".$_GET['gsupno']."' AND suppliername='".$_GET['gname']."'";
        $resultse =mysqli_query($conn,$queryse);
      }
     ?>
     <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Item Code</th>
          <th>Purchase disc</th>
          <th>Sales disc</th>
         <th>Quantity</th>
         <td> </td>
        </tr>
       </thead>
       <tbody>
       <?php
       if(isset($_GET['gsupno']))
       {
           while($row = mysqli_fetch_array($resultse))
           {
            echo '
            <tr>
             <td>'.$row["item_code"].'</td>
             <td>'.$row["purchasedisc"].'</td>
             <td>'.$row["gsalesdisc"].'</td>
             <td>'.$row["quantity"].'</td>
             <td><a href="addnewgoodentrydelete?delete_id='.$row["purchaseid"].'">Delete</a></td>
            </tr>
            ';
           }
        }
       ?>
       </tbody>
      </table>
 
 
 
    </div>
  </div>

  <?php include('../include/footer.php') ?>

  <?php include('../include/modal.php') ?>   
 
  </div>
</body>

</html>
<script type="text/javascript">

  $('#select1').keyup(function(){

      var query =$(this).val();
        $.ajax({
          url: "addgoodCont",
          method:"POST",
          data:{itemVal:query},
          success:function(data)
            {
              $('#userlist6').fadeIn();
              $('#userlist6').html(data);
            }
        }); 
  });


  $('#select2').keyup(function(){

    var query =$(this).val();
      $.ajax({
        url: "addgoodCont",
        method:"POST",
        data:{salesDisc:query},
        success:function(data)
          {
            $('#userlist7').fadeIn();
            $('#userlist7').html(data);
          }
      }); 
  });


  $(document).on('click', '#userlist6 li', function(){

    var idvalue6 =$(this).attr('id');
    $('#select1').val(idvalue6);
    $('#itemVal').css("display", "none");
    $.ajax({
        url:"addgoodContSelect",
        method:"POST",
        data:{item_code:idvalue6},
        success:function(data){
              $('#show_product_text').html(data);
              $('#viewSE').css("display", "none");
        }
    });
  });


  $(document).on('click', '#userlist7 li', function(){

      var idvalue7 =$(this).attr('id');
      $('#select2').val(idvalue7);
      $('#salesDiscSE').css("display", "none");
      $.ajax({
          url:"./addgoodContSelect1",
          method:"POST",
          data:{salesdiscView:idvalue7},
          success:function(data){

                $('#showSelect').html(data);
                $('#viewIC').css("display", "none");

          }
      });
  });

  $("body").click(function () {
    $('#userlist6 li').fadeOut();
    $('#itemVal').css("display", "none");
  });


  $("body").click(function () {
    $('#userlist7 li').fadeOut();
    $('#salesDiscSE').css("display", "none");
  });

</script>
