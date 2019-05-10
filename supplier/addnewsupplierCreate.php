<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php
    session_start();
    $email= $_SESSION['email'];
    if(!isset($_SESSION['email'])){
      header('Location: ../Index.php');
    }
    require '../include/config.php';
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
     $query ="SELECT * FROM supplierinfor WHERE id='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
        $id =$row['id'];
        $name =$row['name'];
        $address =$row['address'];
        $phone =$row['phone'];
        $semail =$row['email'];
        $date_value =$row['date_value'];

     }

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include('../include/head.php') ?>

   <style type="text/css">
     .addsb
     {
      margin-left: 16px;
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
               Edit Supplier No : <?php echo $id; ?>
           <?php else: ?>
              Edit Supplier Create
           <?php endif ?>
        </li>
      </ol>
      <div class="form-group">
       <form action="addnewsupplierCont.php" method="POST">
          <div class="form-group">
             <label for="pwd">Name</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($name)){ echo $name;}?>"  name="name" required="required"/>
              </div>
          </div>
           <div class="form-group">
             <label for="pwd">Address</label>
              <div class="col-sm-3">
               <textarea type="text" class="form-control form-control-sm" name="address" required="required"><?php if(isset($address)){ echo $address;}?></textarea>
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Phone</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($phone)){ echo $phone;}?>"  name="phone" required="required"/>
              </div>
          </div>

          <div class="form-group">
             <label for="pwd">Email</label>
              <div class="col-sm-3">
               <input type="email" class="form-control form-control-sm" value="<?php if(isset($semail)){ echo $semail;}?>"  name="email"/>
              </div>
          </div>
          <div class="col-sm-3">
              <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($id)){ echo $id;}?>"  name="id"/>
          </div>
          <div class="form-group">
             <label for="pwd">Reg Date</label>
              <div class="col-sm-3">
               <input type="date" class="form-control form-control-sm" value ="<?php if(isset($date_value)){ echo $date_value;} if(!isset($date_value)){ echo date("m/d/Y");}   ?>" name="date" required="required"/>
              </div>
          </div>
          <div class="addsb">
            <?php if ($update == true): ?>
              <input type="submit" name="supdate" class="btn btn-primary btn-sm" value="update"/>
            <?php else: ?>
                <input type="submit" name="addsup" value="Save" class="btn btn-primary btn-sm"/>
            <?php endif ?>
               <input type="button" name="serchsubep"  onclick="goBack()"  value="Cancle" class="btn btn-primary btn-sm"/>
          </div>
       </form>
     </div>

     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>

  </div>
</body>

</html>
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({

    // "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   });
  }

  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });

  $(document).on('click', '#insert', function(){
   var first_name = $('#data1').text();
   var last_name = $('#data2').text();
   if(first_name != '' && last_name != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{first_name:first_name, last_name:last_name},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });

 });
</script>
<script type="text/javascript">
  function goBack() {
    window.history.back();
  }
</script>
