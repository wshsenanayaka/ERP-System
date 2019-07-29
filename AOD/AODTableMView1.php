
<?php

include('../include/check.php'); 

if(isset($_POST["query"]))
{
  $search =$_POST["query"];
  $query = "SELECT * FROM aodManual WHERE id LIKE '%".$search."%' OR pno LIKE '%".$search."%' OR customerName LIKE '%".$search."%' OR createDate LIKE '%".$search."%' ";
}
else
{
  $query = "SELECT * FROM aodManual";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result)>0)
{
  ?>

 <div class="tablealign table-responsive">
 <!-- <script src="jquery.tabledit.min.js"></script> -->
  <table id="editable_table" class="table table-bordered table-striped ">
   <thead>
    <tr>
     <th>Manual AOD No</th>
     <th>Dispatched date</th>
     <th></th>
     <th></th>
     <th></th>
    </tr>
   </thead>
   <tbody>
   <?php
  
   while($row = mysqli_fetch_array($result))
   {
    echo '
    <tr>
     <td>'.$row["id"].'</td>
     <td>'.$row["createDate"].'</td>
     <td><a href="./aCreateNewAODCreateManualEdit?editId='.$row["id"].'">Edit</a></td>
     <td><a href="#" onclick="confirmation(event,'.$row["id"].')">Delete</a></td>
     <td><button type="button"  name="'.$row["id"].'" class="btn btn-primary btn-sm viewData"  style="border: 0px; ">Print</button></td>
    </tr>
    ';
   }
   ?>
   </tbody>
  </table>
  <div id="snackbar"><p id="msg_view"></p></div>
</div>
   <?php
  }
  else
  {
   echo 'Data Not Found';
  }

  ?>
</body>
</html>
<script>
function confirmation(e,id) {
   var answer = confirm("Are you sure you want to permanently delete this record?")
    if (!answer){
      e.preventDefault();
      return false;
    }else{
      deleteForm(id)
    }
}

// Remove javascript
function deleteForm(id){

  $.ajax({
        url:"./aCreateNewAODCont1",
        method:"POST",
        data:{delete_id:id},
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



// Modal load value in jquery
$(document).on('click', '.viewData', function(){

  var print_id = $(this).attr("name");
  $.ajax({
       url:"./aCreateNewAODCont1",
       method:"POST",
       data:{print_id:print_id},
       success:function(data){

         $('#show_data').html(data);
         $('#viewMModal').modal('show');

       }
  });

});
</script>

<div id="show_data">

</div>
