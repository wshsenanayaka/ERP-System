
  <?php

  include('../include/check.php');

  if(isset($_POST["query"]))
  {
      $search =$_POST["query"];
      $query_r_view = "
      SELECT * FROM resalarypay
      WHERE title LIKE '%".$search."%' ";
  }
  else
  {
      $query_r_view ="SELECT * FROM resalarypay";
  }
  $result_r_view =mysqli_query($conn,$query_r_view);

  if(mysqli_num_rows($result_r_view) > 0)
  {
    ?>
  <table id="editable_table" class="table table-sm">
       <thead>
        <tr>
         <th>ID</th>
         <th>Report Title</th>
         <td> </td>
         <td> </td>
        <!--  <td> </td> -->
        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result_r_view))
       {
        echo '
        <tr>
          <td>'.$row["id"].'</td>
          <td>'.$row["title"].'</td>
          <td><a href="#" onclick="confirmation(event,'.$row["id"].')">Delete</a></td>
          <td><a href="salary-payments-report-view1?sview_id='.$row["id"].'&update=true">View</a></td>

         </tr>';

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

  // Remove javascript
  function deleteForm(id){

    $.ajax({
        url:"../stock-category/stock-category-count",
        method:"POST",
        data:{rs_delete_id:id},
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
