
<?php

include('../include/check.php');

if(isset($_POST["query"]))
{
    $search =$_POST["query"];
    $query = "SELECT * FROM exportdb WHERE 	supplier LIKE '%".$search."%'";
}
else
{

  $query = "SELECT * FROM exportdb";
}
$result = mysqli_query($conn ,$query);

if(mysqli_num_rows($result) > 0)
{
  ?>
    <div id="printablediv">
     <center><h3>Export Reoprt </h3><h5><?php if(isset($search)){ echo "Supplier Name- ".$search;}?></h5></center>
     <br>
     <table id="editable_table" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>Date</th>
         <th>Supplier</th>
         <th>Proforma No</th>
         <th>Situation</th>
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
          <td>'.$row["situation"].'</td> ';
        echo '</tr>';

        $i++;
       }
       ?>
       </tbody>
      </table>
    </div>
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

function printDiv(divID)

    {
        $('#all').modal('hide');
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        //Reset the page's HTML with div's HTML only
        document.body.innerHTML =
            "<html><head><title></title></head><body>" +
            divElements + "</body>";

        //Print Page
        window.print();

        //Restore orignal HTML
        document.body.innerHTML = oldPage;


    }


</script>
