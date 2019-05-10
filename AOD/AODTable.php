
    <?php

    include('../include/check.php'); 

    if(isset($_POST["query"]))
    {
      $search =$_POST["query"];
      $query = "
      SELECT * FROM   dispachinfor WHERE dpid LIKE '%".$search."%' OR  ditem_code LIKE '%".$search."%' OR dsales LIKE '%".$search."%' OR  alreadyd LIKE '%".$search."%' OR  doq LIKE '%".$search."%'  OR  dsn LIKE '%".$search."%' OR  status LIKE '%".$search."%' OR dsrq LIKE '%".$search."%'  OR  drq LIKE '%".$search."%' OR  ddate LIKE '%".$search."%' OR  daq LIKE '%".$search."%'";
    }
    else
    {

      $query = "SELECT * FROM dispachinfor";
    }
    $result = mysqli_query($conn ,$query);

    if(mysqli_num_rows($result)>0)
    {
      ?>

     <div class="tablealign table-responsive">
     <!-- <script src="jquery.tabledit.min.js"></script> -->
      <table id="editable_table" class="table table-bordered table-striped ">
       <thead>
        <tr>
         <th>AOD No</th>
         <th>PO No</th>
         <th>Item Code</th>
         <th>Sales</th>
         <th>Order quantity</th>
         <th>Issue Quantity</th>
         <th>Aleady dispatched</th>
         <th>Serial number</th>
         <th>Return Qty</th>
         <th>Status</th>
         <th>Dispatched date</th>
         <th></th>
         <th></th>
         <th></th>

        </tr>
       </thead>
       <tbody>
       <?php
      
       while($row = mysqli_fetch_array($result))
       {
        echo '
        <tr>
         <td>'.$row["did"].'</td>
         <td>'.$row["dpid"].'</td>
         <td>'.$row["ditem_code"].'</td>
         <td>'.$row["dsales"].'</td>
         <td>'.$row["doq"].'</td>
         <td>'.$row["diq"].'</td>
         <td>'.$row["alreadyd"].'</td>
         <td>'.$row["dsn"].'</td>
         <td>'.$row["drq"].'</td>
         <td>'.$row["status"].'</td>
         <td>'.$row["ddate"].'</td>
         <td><a href="aCreateNewAODEdit?aedit_id='.$row["did"].'">Edit</a></td>
         <td><a href="#" onclick="confirmation(event,'.$row["did"].')">Delete</a></td>
         <td><button type="button"  name="'.$row["did"].'" class="btn btn-primary btn-sm view_data"  style="border: 0px; ">Print</button></td>
        </tr>
        ';
       }
       ?>
       </tbody>
      </table>
      <div id="snackbar"><p id="msg_view"></p></div>
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
          url:"./aCreateNewAODCont",
          method:"POST",
          data:{delete_id:id},
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



  // Modal load value in jquery
    $(document).on('click', '.view_data', function(){

      var print_id = $(this).attr("name");

      $.ajax({
           url:"./aCreateNewAODCont",
           method:"POST",
           data:{print_id:print_id},
           success:function(data){

             $('#show_data').html(data);

             $('#view_data_Modal').modal('show');

           }
      });

    });
  </script>


<div id="show_data">

</div>
