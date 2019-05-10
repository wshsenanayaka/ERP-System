<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


      <?php
      //fetch.php
       require 'config.php';

      if(isset($_POST["query"]))
      {
       $search =$_POST["query"];
       $query = "
        SELECT * FROM purchaseorderinfor WHERE pid LIKE '%".$search."%' OR customerorderno LIKE '%".$search."%' OR customername LIKE '%".$search."%' OR customeraddress LIKE '%".$search."%' OR customersite LIKE '%".$search."%' OR createdate LIKE '%".$search."%' OR createby LIKE '%".$search."%' OR podate LIKE '%".$search."%' OR poreceiveddate LIKE '%".$search."%' OR deadlinedate LIKE '%".$search."%'"; 
      }
      else
      {

       $query = "SELECT * FROM purchaseorderinfor";
      }
      $result = mysqli_query($conn ,$query);

      if(mysqli_num_rows($result) > 0)
      {
        ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
             
     <script src="jquery.tabledit.min.js"></script>
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Purchase ID</th>
         <th>Cus Order No</th>
         <th>Cus Name</th>
         <th>Cus Address</th>
         <th>Site</th>
         <th>Create Date</th>
         <th>Create By</th>
         <th>PO Date</th>
         <th>PO Receive Date</th>
         <th>Deadline</th>
          
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
         <td>'.$row["pid"].'</td>
         <td>'.$row["customerorderno"].'</td>
         <td>'.$row["customername"].'</td>
         <td>'.$row["customeraddress"].'</td>
         <td>'.$row["customersite"].'</td>
         <td>'.$row["createdate"].'</td>
         <td>'.$row["createby"].'</td>
         <td>'.$row["podate"].'</td>
         <td>'.$row["poreceiveddate"].'</td>
         <td>'.$row["deadlinedate"].'</td>
           <td><a href="aCreateNewPurchaseOrderEdit?pedit_id='.$row["pid"].'">Edit</a></td>
          <td><a href="aCreateNewPurchaseOrderdelete?edit_id='.$row["pid"].'" onclick="confirmation(event)">Delete</a></td>

        </tr>
        ';
        $i++;
       }
       ?>
       </tbody>
      </table>
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
  function confirmation(e) {
       var answer = confirm("Are you sure you want to permanently delete this record?")
		if (!answer){ 
			e.preventDefault();
			return false;
		}
  }
  
  </script>
