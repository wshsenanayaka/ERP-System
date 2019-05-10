<!-- addchecklistitemCreate.php
 --><!-- nexgenITs Admin dashbord All right reseverd.-->
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
     $query ="SELECT * FROM iteminfor WHERE item_code='$id'";
     $result =mysqli_query($conn,$query);
     while ($row=mysqli_fetch_array($result))
     {
     	  $id =$row['id'];
        $item_code =$row['item_code'];
        $purchasedisc =$row['purchasedisc'];
        $itemcategory =$row['itemcategory'];
        $reorderlevel =$row['reorderlevel'];
        $subitemreminder =$row['subitemreminder'];

     }

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">
     .abtn
     {
      margin-left: 15px;
     }
     .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%; }
    .column-center{ display: inline-block; width: 33%; }

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
              <a href="#">Create new Item</a>
        </li>
      </ol>
      <div class="form-group">
       <form action="addchecklistitemCont" method="POST">
          <div class="form-group">
             <label for="pwd">Item Code</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($item_code)){ echo $item_code;}?>"  name="item_code" required="required"/>
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Purchase disc</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" name="purchasedisc" required="required"/>
              </div>
          </div>
          <div class="form-group">
             <!--  <div class="input_fields_wrap"> -->
             <label for="pwd">Sales disc</label>

                <div class="container">
                  <!--  <div class="column-left">
                     <input type="text" class="form-control form-control-sm" name="salesdisc1" required="required"/><br>
                     <!-- <input type="text" class="form-control form-control-sm" name="salesdisc2" /><br>
                   </div> -->
                    <div class="form-group">
	                    <input type="text" name="name[]" class="form-control form-control-sm"><br>
	                    <span id="add_list"></span>
	                    <input type="submit" name="add" id="add_button" class="form-control form-control-sm" value="Add More"></input>
                   </div>
                </div>


             <!--  </div> -->
          </div>
          <br>
          <div class="form-group">
               <label for="email">Item Category</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="itemcategory" required="required">
	                  <?php
		                if(isset($itemcategory))
		                    {
		                        echo "<option value='".$itemcategory."'>".$itemcategory."</option>";
		                    }
		                ?>
		                <option value="">Select</option>
		                <?php
		                if($itemcategory!="Survey")
		                {
		                  echo ' <option value="Survey">Survey</option>';
		                }
		                if($itemcategory!="Labs")
		                {
		                  echo ' <option value="Labs">Labs</option>';
		                }
		                if($itemcategory!="Survey Spare Part")
		                {
		                  echo ' <option value="Survey Spare Part">Survey Spare Part</option>';
		                }
		                if($itemcategory!="Labs Spare Part")
		                {
		                  echo ' <option value="Labs Spare Part">Labs Spare Part</option>';
		                }
		             ?>
                  <!-- <option value="">Select</option>
                  <option value="Survey">Survey</option>
                  <option value="Labs">Labs</option>
                  <option value="Survey Spare Part">Survey Spare Part</option>
                  <option value="Labs Spare Part">Labs Spare Part</option> -->
                 </select>
               </div>
          </div>
          <div class="form-group">
             <label for="pwd">Reorder Level</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($reorderlevel)){ echo $reorderlevel;}?>"  name="reorderlevel"/>
              </div>
          </div>
          <div class="col-sm-3">
           <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($id)){ echo $id;}?>"  name="id"/>
          </div>
           <div class="form-group">
             <label for="pwd">Sub Item Reminder</label>
              <div class="col-sm-3">
               <textarea type="text" class="form-control form-control-sm"   name="subitemreminder"><?php if(isset($subitemreminder)){ echo $subitemreminder;}?></textarea>
              </div>
          </div>
          <div class="abtn">
             <!--  <input type="submit" name="savebtn" value="Save" class="btn btn-primary btn-sm"/> -->

               <?php if ($update == true): ?>
                <input type="submit" name="cupdate" class="btn btn-primary btn-sm" value="update"/>
              <?php else: ?>
                 <input type="submit" name="savebtn" value="Save" class="btn btn-primary btn-sm"/>
              <?php endif ?>
              <input type="reset" onclick="window.location='addchecklistitem';" value="Cancle" class="btn btn-primary btn-sm"/>

          </div>
       </form>
     </div>

     
     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>


  </div>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    var max_fields      = 9; //maximum input boxes allowed
   // var wrapper         = $(".input_fields_wrap"); //Fields wrapper
   // var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $("#add_button").click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $("#add_list").append('<div><input type="text" name="name[]" class="form-control form-control-sm"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });

    $("#add_list").on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
