
<?php
//fetch.php
 require '../../include/config.php';
if(isset($_POST["query"]))
{
 $search =$_POST["query"];
 $query = "
  SELECT * FROM iteminfor
  WHERE item_code LIKE '%".$search."%' OR purchasedisc LIKE '%".$search."%' OR  itemcategory LIKE '%".$search."%' OR salesdisc0 LIKE '%".$search."%'";
}
else
{

 $query = "SELECT * FROM iteminfor ";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result)>0)
{
  ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


      <script src="jquery.tabledit.min.js"></script>
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Item Code</th>
         <th>Purchase disc</th>
         <th>Item category</th>
         <td></td>
        </tr>
       </thead>
       <tbody>
       <?php
       $i=1;
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["item_code"].'</td>
         <td>'.$row["purchasedisc"].'</td>
          <td>'.$row["itemcategory"].'</td>
          <td><a href="addchecklistitemEdit?prop_id='.$row["item_code"].'&update=true">Edit</a></td>
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
