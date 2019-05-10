
<?php

include('../include/check.php');

if(isset($_POST["query"]))
{
 $search =$_POST["query"];
 $query = "
  SELECT * FROM exportdb
  WHERE proformaNo LIKE '%".$search."%' OR date LIKE '%".$search."%'";
}
else
{

 $query = "SELECT * FROM exportdb";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result) > 0)
{
  ?>

  <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Date</th>
         <th>Supplier</th>
         <th>Proforma No</th>
         <th>Situation</th>
         <td> </td>
         <td> </td>
        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
          <td>'.$row["date"].'</td>
          <td>'.$row["supplier"].'</td>
          <td>'.$row["proformaNo"].'</td>
          <td>'.$row["situation"].'</td>
          <td><a href="exportOperation.php?prop_id='.$row["id"].'&update=true">Edit</a></td>
          <td><a href="#" onclick="confirmation(event,'.$row["id"].')">Delete</a></td> ';
        echo '</tr>';

        $i++;
       }
       ?>
       </tbody>
      </table>
       <div id="snackbar"><p id="msgText"></p></div>
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
  function confirmation(e ,id) {

       var answer = confirm("Are you sure you want to permanently delete this record?")
		if (!answer){
			e.preventDefault();
			return false;
		}else{
           
          $.ajax({
            url:"./exportController",
            method:"POST",
            data:{remoeId:id},
            success:function(data){

                $('#msgText').html("successfully deleted data");
                myMzg();    
            }
          });
        }
    }

    // Message success view
    function myMzg() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

        //Location refech
         setTimeout(function(){location.reload(); },3000);
    }




  </script>
