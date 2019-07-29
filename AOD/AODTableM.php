
<?php
include('../include/check.php'); 

if(isset($_POST["query1"]))
{
  $search =$_POST["query1"];
  // $query = "SELECT * FROM  iteminfor WHERE item_code LIKE '%".$search."%'";

  $query1 = "SELECT * FROM  iteminfor";

  $result1 =mysqli_query($conn,$query1);
  while($row = mysqli_fetch_array($result1))
  {
     $salesdisc0 =$row['salesdisc0'];
     $x = json_decode($salesdisc0, true);

     for($i=0; $i<sizeof($x);$i++)
     {
        $code=$x[$i]['salesdisc'];

        if(stripos($code, $search) !== FALSE){
          $id =$row['id'];
          // echo $item_code;
          // $purchasedisc =$row['purchasedisc'];
          $query = "SELECT * FROM  iteminfor WHERE id LIKE '%".$id."%'";
          
        }
        
     }		
  }   
}

if(isset($_POST["query2"]))
{
  $search =$_POST["query2"];
  $query = "SELECT * FROM  iteminfor WHERE item_code LIKE '%".$search."%'";

}

$result = mysqli_query($conn ,$query);

?>

 <div class="tablealign table-responsive" style="height: 300px;">
 <!-- <script src="jquery.tabledit.min.js"></script> -->
  <table id="editable_table" class="table table-bordered table-striped ">
   <thead>
    <tr>
     <th>Item Code</th>
     <th>Sales desc</th>
     <th></th>
    </tr>
   </thead>
   <tbody>
   <?php
  
   while($row = mysqli_fetch_array($result))
   {
    echo '
    <tr>
     <td>'.$row["item_code"].'</td>
     <td>
     ';
         $json = json_decode($row["salesdisc0"], true);
         for($i=0;$i<sizeof($json);$i++)
         {
             echo $json[$i]['salesdisc'];
             $code =$json[$i]['salesdisc'];
         }
  
    echo'</td>
     <td><button type="button" onclick="myForm(\'' .$row["item_code"].  '\',\'' .$code.  '\')" class="btn btn-primary btn-sm"  style="border: 0px; ">Add to Dispatch</button></td>
    </tr>
    ';
   }
   ?>
   </tbody>
  </table>
</div>
<br>
      
