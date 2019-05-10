
<?php

include('../include/check.php');

if(isset($_POST['item_code']))
{
   $search =$_POST['item_code'];
   $search1 =$_POST['po'];
 
   $query ="SELECT * FROM realgoodentry WHERE  r_itemcode LIKE '%".$search."%' AND r_purchasedisc LIKE '%".$search1."%'";
}
else
{
  $query = "SELECT  * FROM realgoodentry";
}
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
  ?>
      <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Item Code</th>
         <th>Purchase disc</th>
         <th>Sales disc</th>
         <th></th>
        </tr>
       </thead>
       <tbody>

       <?php
     
       while($row = mysqli_fetch_array($result))
       {
          echo '

          <tr>

           <td>'.$row["r_itemcode"].'</td>
           <td>'.$row["r_purchasedisc"].'</td>
           <td>'.$row["r_salesdisc"].'</td>
           <td>
           <form>
              <input type="button" name="addpobtn" onclick="mySelection('.$row["id"].')";  value="Add to PO" class="btn btn-primary btn-sm"/>
           </form>

           </td>

          </tr>

          ';
         
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

<script>

  // ########################################  Add to the PO   ########################################

   function mySelection(id) {

    $.ajax({
      url:"./psInsertView",
      method:"POST",
      data:{selectID:id},
        success:function(data)
        {
           $("#editableitemsDIV").load(window.location.href + " #editableitemsDIV");
        }
    });   
   }

</script>
</html>
