<?php
//fetch.php
 require '../../include/config.php';

if(isset($_POST["query"]))
{
 $search =$_POST["query"];
 $query = "
  SELECT * FROM  customerinfor 
  WHERE cid LIKE '%".$search."%' OR name LIKE '%".$search."%' OR phone LIKE '%".$search."%' OR  email LIKE '%".$search."%' OR reg_date  LIKE '%".$search."%' OR add1  LIKE '%".$search."%' OR   site1  LIKE '%".$search."%' OR  site2  LIKE '%".$search."%'  OR  site3  LIKE '%".$search."%'";
}
else
{

    $query ="SELECT caddsiteinfor.address as address, caddsiteinfor.site as site, customerinfor.cid as cid , customerinfor.name as name , customerinfor.phone as phone ,customerinfor.email as email, customerinfor.reg_date as reg_date FROM caddsiteinfor INNER JOIN customerinfor ON caddsiteinfor.cusno=customerinfor.cid";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result) > 0)
{
  ?>
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
        <th width=50px>Cust.Code</th>
         <th width=50px>Name</th>
          <th width=50px>Phone</th>
         <th width=50px>Address</th>
          <th width=50px>Site</th>
         <th width=50px>Email</th>
         <th width=50px>Reg Date</th>
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
            <td>'.$row["cid"].'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["phone"].'</td>
            <td>'.$row["address"].'</td>
            <td> '.$row["site"].' </td>
            <td>'.$row["email"].'</td>
            <td>'.$row["reg_date"].'</td>
            <td><a href="aRegisterNewCustomerCreate.php?prop_id='.$row["cid"].'&update=true">Edit</a></td>
            <td><a href="#" onclick="confirmation(event,'.$row["cid"].')">Delete</a></td>
        </tr>
        ';
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
          url:"aRegisterNewCustomerCont",
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