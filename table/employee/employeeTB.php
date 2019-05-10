
<?php
// include('../include/check.php');
require '../../include/config.php';
if(isset($_POST["query"]))
{
 $search =$_POST["query"];
 $query = "
  SELECT * FROM employeeinfor
  WHERE empno LIKE '%".$search."%' OR firstname LIKE '%".$search."%' OR lastname LIKE '%".$search."%'";
}
else
{

 $query = "SELECT * FROM employeeinfor";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result) > 0)
{
  ?>

  <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Company</th>
         <th>EMP No</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>States</th>
         <td> </td>
         <td> </td>
         <?php if ($email =="admin@gmail.com"): ?>
             <td> </td>
         <?php else: ?>

        <?php endif ?>
        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
          <td>'.$row["company"].'</td>
         <td>'.$row["empno"].'</td>
         <td>'.$row["firstname"].'</td>
          <td>'.$row["lastname"].'</td>
          <td>'.$row["status"].'</td>
          <td><a href="employee.php?prop_id='.$row["id"].'&update=true">Edit</a></td>
          <td><a href="#" onclick="confirmation(event,'.$row["id"].')">Delete</a></td> ';
          if ($email =="admin@gmail.com")
          {
             if($row["status"]=="Pending")
             {
               echo '<td><a href="../../employee/employeeView?view_id='.$row["id"].'">View</a></td>';
             }
             else
             {
                  echo '<td></td>';
             }
          }
        echo '</tr>';

        $i++;
       }
       ?>
       </tbody>
      </table>
      <div id="snackbar"><p id="msg_view"></p></div>

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


    // Letter Remove Investigations javascript
    function deleteForm(id){

        $.ajax({
            url:"../../employee/employeeCont",
            method:"POST",
            data:{removeID:id},
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


  </script>
