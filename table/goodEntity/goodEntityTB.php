
  <?php
    //fetch.php
    include('../../include/config.php');

    if(isset($_POST["query"]))
    {
     $search =$_POST["query"];
     $query = "
      SELECT * FROM goodentry
      WHERE suppliername LIKE '%".$search."%' OR item_code LIKE '%".$search."%' OR purchasedisc LIKE '%".$search."%' OR   purchaseid LIKE '%".$search."%' OR gsalesdisc LIKE '%".$search."%'

     ";
    }
    else
    {
       $query = "SELECT  * FROM goodentry";

    }
    $result = mysqli_query($conn ,$query);

    if(mysqli_num_rows($result) > 0)
    {
      ?>

  <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Purchase ID</th>
         <th>Item Code</th>
          <th>Purchase disc</th>
          <th>Sales disc</th>
          <th>Supplier Name</th>
          <th>Quantity</th>
          <th>Create User</th>
          <th>Create Date</th>

         <td> </td>
         <td> </td>
        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
         $value="false";
        echo '
        <tr>
         <td>'.$row["purchaseid"].'</td>
         <td>'.$row["item_code"].'</td>
         <td>'.$row["purchasedisc"].'</td>
         <td>'.$row["gsalesdisc"].'</td>
         <td>'.$row["suppliername"].'</td>
         <td>'.$row["quantity"].'</td>
         <td>'.$row["createDate"].'</td>
         <td>'.$row["createBy"].'</td>

          <td><a href="addnewgoodentryEdit?prop_id='.$row["purchaseid"].'&update=true">Edit</a></td>';

          $queryse ="SELECT * FROM  purchaseorderinfor";
          $resultse =mysqli_query($conn,$queryse);


          while ($rowse=mysqli_fetch_array($resultse))
          {
            $item_code =$rowse["itemcode"];
          }
          $x="".$item_code."";
          $x = json_decode($x,true);


           for($i=0;$i<sizeof($x);$i++)
            {
                $code=$x[$i]['item_code'];
                $code1=$x[$i]['sales_dis'];
                if($code==$row["item_code"] && $code1==$row["gsalesdisc"])
                {
                  $value ="true";
                }
            }

          if($value=="false"){
            echo '<td><a href="addgoodCont.php?edit_id='.$row["purchaseid"].'" onclick="confirmation(event)">Delete</a></td>';
          }
          else
          {
              echo '<td><a href="addgoodCont.php?edit_id='.$row["purchaseid"].'" onclick="confirmation(event)" class="not-active">Delete</a></td>';
          }
       echo '</tr>';

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
