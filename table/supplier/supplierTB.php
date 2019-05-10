<?php
//fetch.php
 require '../../include/config.php';

if(isset($_POST["query"]))
{
 $search =$_POST["query"];
 $query = "
  SELECT * FROM  supplierinfor 
  WHERE name LIKE '%".$search."%' OR address LIKE '%".$search."%' OR phone LIKE '%".$search."%' OR  email LIKE '%".$search."%' OR date_value LIKE '%".$search."%'";
}
else
{

 $query = "SELECT * FROM  supplierinfor";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result) > 0)
{
  ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Name</th>
         <th>Address</th>
         <th>Phone</th>
         <td> </td>
         <td> </td>
        </tr>
       </thead>
       <tbody>
       <?php
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["name"].'</td>
         <td>'.$row["address"].'</td>
          <td>'.$row["phone"].'</td>
          <td><a href="addnewsupplierCreate.php?prop_id='.$row["id"].'&update=true">Edit</a></td>
          <td><a href="#" onclick="confirmation(event ,'.$row["id"].')">Delete</a></td>
        </tr>
        ';
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

<script>

    //Letter Remove Treatment javascript  confirmation
    function confirmation(e,id) {
      var answer = confirm("Are you sure you want to permanently delete this record?")
      if (!answer){
        e.preventDefault();
        return false;
      }
      else {
        deleteForm(id);
      }
    }
      
    // Letter Remove Investigations javascript
    function deleteForm(id){

      $.ajax({
            url:"addnewsupplierCont",
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
