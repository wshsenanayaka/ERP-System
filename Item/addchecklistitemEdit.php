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
          Edit Item No :<?php if(isset($id)){echo $id;} ?>
        </li>
      </ol>
      <div class="form-group">
       <form>
          <input type="hidden" id="itemjson" name="itemjson"/>
          <div class="form-group">
             <label for="pwd">Item Code</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($item_code)){ echo $item_code;}?>"  name="item_code" id="item_code" required="required"/>
              </div>
          </div>
          <div class="form-group">
             <label for="pwd">Purchase disc</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($purchasedisc)){ echo $purchasedisc;}?>" name="purchasedisc" id="purchasedisc" required="required"/>
              </div>
          </div>
          <div class="form-group">
               <label for="email">Item Category</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="itemcategory" id="itemcategory" required="required">
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

                 </select>
               </div>
          </div>
          <div class="form-group">
             <label for="pwd">Reorder Level</label>
              <div class="col-sm-3">
               <input type="text" class="form-control form-control-sm" value="<?php if(isset($reorderlevel)){ echo $reorderlevel;}?>"  name="reorderlevel" id="reorderlevel"/>
              </div>
          </div>
          <div class="col-sm-3">
            <input type="hidden" class="form-control form-control-sm" value="<?php if(isset($id)){ echo $id;}?>"  name="id" id="id"/>
          </div>
           <div class="form-group">
             <label for="pwd">Sub Item Reminder</label>
              <div class="col-sm-3">
               <textarea type="text" class="form-control form-control-sm"   name="subitemreminder" id="subitemreminder" required="required"><?php if(isset($subitemreminder)){ echo $subitemreminder;}?></textarea>
              </div>
          </div>
          <div class="abtn">
          <table id="uptableitems" class="table table-bordered table-striped table-responsive" >
           <thead>
            <tr>
             <th>Sales disc</th>
             <th></th>
            </tr>
           </thead>
           <tbody>
           <?php
                  require '../include/config.php';
                 $queryse ="SELECT * FROM  iteminfor WHERE id='$id'";
                 $resultse =mysqli_query($conn,$queryse);
                 while ($rowse=mysqli_fetch_array($resultse))
                 {
                   $sales =$rowse["salesdisc0"];
                 }
                 $x="".$sales."";
                 $x = json_decode($x,true);


                 for($i=0;$i<sizeof($x);$i++)
                  {
                    $code=$x[$i]['salesdisc'];

                    echo '
                      <tr id="rowno'.$i.'">
                      <td>
                       <textarea type="text" class="form-control form-control-sm"  name="salesdisc" required="required">'.$code.'</textarea>
                      </td>
                      <td>
                      <input type="submit" value="Delete" onclick="remove_items('.$i.')" class="btn btn-primary btn-sm"/>
                      </td>
                      </tr>';
                  }
              ?>
            </tbody>
          </table>

             <!--  <input type="submit" name="savebtn" value="Save" class="btn btn-primary btn-sm"/> -->
              <input type="button" name="cupdate" id="cupdate" class="btn btn-primary btn-sm" value="update"  onclick="edit_items()"/>
              <input type="reset" onclick="window.location='addchecklistitem';" value="Cancle" class="btn btn-primary btn-sm"/>
          </div>
       </form>
       <div id="snackbar"><p id="msg_view"></p></div>

     </div>

     <?php include('../include/footer.php') ?>

     <?php include('../include/modal.php') ?>

  
  </div>
</body>
</html>
<script type="text/javascript">
  function remove_items(no)
  {
    $('#rowno'+no).remove();
  }
</script>
<script type="text/javascript">

  var array=[];


   // jQuery methods go here...
   function edit_items()
   {

      var table = $("#uptableitems");

      table.find('tr:gt(0)').each(function (i) {
        var $tds = $(this).find('td'),
        salesdisc= $tds.eq(0).find("textarea").val();

        //alert(item_code);
        var z={"salesdisc":salesdisc};

        array.push({salesdisc:salesdisc});

      });
      console.log(JSON.stringify(array, null, 1));
        $('#itemjson').val(JSON.stringify(array));

       myForm();

       function myForm(){

        var itemjson =document.getElementById('itemjson').value;
        var item_code =document.getElementById('item_code').value;
        var purchasedisc =document.getElementById('purchasedisc').value;
        var itemcategory =document.getElementById('itemcategory').value;
        var reorderlevel =document.getElementById('reorderlevel').value;
        var subitemreminder =document.getElementById('subitemreminder').value;
        var id =document.getElementById('id').value;
        var cupdate =document.getElementById('cupdate').name;

        $.ajax({
            url: "./addchecklistitemCont.php",
            method:"POST",
            data: {itemjson:itemjson,item_code:item_code,purchasedisc:purchasedisc,itemcategory:itemcategory,
                   reorderlevel:reorderlevel,subitemreminder:subitemreminder,cupdate:cupdate,id:id
                  },
            success:function(data){
                $('#msg_view').html(data);
                myMzg();
            }
        });
       }


        // Message success view
        function myMzg() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

            // Location refech
            setTimeout(function(){location.reload(); },3000);
        }
    }


</script>
