
<?php
include('../include/check.php'); 

if(isset($_POST["query"]))
{
  $search =$_POST["query"];
  $query = "SELECT * FROM  iteminfor WHERE item_code LIKE '%".$search."%' OR item_code LIKE '%".$search."%'";
}
else
{
  // $query = "SELECT * FROM iteminfor";
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
<div class="">
      <div class="table-responsive">
        <form action="" method="POST">
          <table  class="table table-bordered table-striped table-responsive" width="1500px" id="dispachTableM">
           <thead>
            <tr>
             <th>Item code</th>
             <th>Sales</th>
             <th>Issue Quantity</th>
             <th>Serial number</th>
             <th>Dispatched date</th>
             <th></th>
            </tr>
           </thead>
           <tbody>
          <div class="name">
          <b>Dispach Table</b><br><br>
          </div>
          <?php

            $selectView =1;
            $queryView ="SELECT * FROM  aodViewM WHERE selectView='$selectView'";
            $resultView =mysqli_query($conn,$queryView);

            while($rowView = mysqli_fetch_array($resultView))
            {
            echo '
            <tr>
                <td>'.$rowView["ItemCode"].'</td>
                <input type="hidden" name="itemCode" value='.$rowView["ItemCode"].'>
                <td>'.$rowView["sales"].'</td>
                <textarea type="hidden" style="display:none;"  name="sales">'.$rowView["sales"].'</textarea>
                <td><input type="number" name="issueQty" class="form-control form-control-sm" min="0" step="0"/></td>
                <td><textarea type="text" name="serialNumber" class="form-control form-control-sm"></textarea></td>
                <td><input type="text" name="dispatchedDate"  class="form-control form-control-sm" value='.date("Y-m-d").' readonly/></td>
                <td><input type="button" value ="Delete" onclick="myForm1('.$rowView["id"].')"  class="btn btn-primary btn-sm" /></td>
            </tr>
            ';
            }

         ?>
        </tbody>
        </table>
        <input type="button" value ="Dispatch"  onclick="myDispatch()" class="btn btn-primary btn-sm" />
        <input type="button" value="Go Back" onclick="window.location='./aCreateNewAODCreate';" class="btn btn-primary btn-sm" />
        </form>
        <div id="snackbar"><p id="msgView"></p></div>
      </div>
     </div>
     <br><br>

<script type="text/javascript">

function confirmation(e,id) {
   var answer = confirm("Are you sure you want to permanently delete this record?")
  if (!answer){
    e.preventDefault();
    return false;
  }else{
    deleteForm(id)
  }
}

// Message success view
function myMzg() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

  // Location refech
  setTimeout(function(){location.reload(); },3000);
}


      function myForm(itemCode ,salesDisc) {

        $.ajax({
              url:"./controller1.php",
              method:"POST",
              data:{itemCode:itemCode,salesDisc:salesDisc},
              success:function(data){
                location.reload();
              }
        });
              
      }

      function myForm1 (id){
        
        $.ajax({
                url:"./controller1.php",
                method:"POST",
                data:{deleteId:id},
                success:function(data){
                  location.reload();
                }
            });
      }



      var array=[];
      
      // jQuery methods go here...
      function myDispatch() {

          var poNo=document.getElementById("poNo").value;
          var customerName=document.getElementById("customerName").value;
          var other=document.getElementById("other").value;

          var table = $("#dispachTableM");

          table.find('tr:gt(0)').each(function (i) {
    
            var $tds = $(this).find('td'),
        
            itemCode = $tds.eq(0).text();
            sales = $tds.eq(1).text();
            issueQty = $tds.eq(2).find("input").val();
            serialNumber = $tds.eq(3).find("textarea").val();
            dispatchedDate = $tds.eq(4).find("input").val();
    
              var z={"itemCode":itemCode,"sales":sales,"issueQty":issueQty,"serialNumber":serialNumber,"dispatchedDate":dispatchedDate,};

              array.push({itemCode:itemCode,sales:sales,issueQty:issueQty,serialNumber:serialNumber,dispatchedDate:dispatchedDate
              });

              call1(array,poNo,customerName,other)

        });
    
    
        function call1(array,poNo,customerName,other) {
    
          var arrayNew = JSON.stringify(array);
    
          $.ajax({
              url:"./controller1.php",
              method:"POST",
              data:{newArray:arrayNew,poNo:poNo,customerName:customerName,other:other},
              success:function(data){

                $('#msgView').html(data);
                myMzg();
                
              }
          });   
        }
      }


      // Message success view
      function myMzg() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

            // Location refech
            setTimeout(function(){
                
               // location.reload(); 
               $('#viewModal').modal('show');    

            },3000);
        }

      function PrintDiv(divID) {   

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

<div id="viewModal" class="modal fade">
  <div class="modal-dialog" style="max-width: 850px;">
        <div class="modal-content" style="height : auto;">
            <div class="modal-header">
                  <span style="font-size: 23px; font-family: monospace;"><b style="color: white;letter-spacing: 1.3px;">Inbound Request</b></span>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div id="PrintDiv">
                  <div class="l1" style="text-align: center;">
                    <h4>BHOOMI- TECH (PVT) LTD.</h4>
                    <p style="margin-bottom: 0px;">184, Hill Street Dehiwala</p>
                    <p style="margin-bottom: 0px;">Phone :0112-734550</p>
                    <p>Fax :0112-734550</p>
                  </div>
                  <div class="l2" style="text-align: center;">
                    <h4 style="border: 1px solid; max-width: 50%; margin: auto;  margin-bottom: 4%;">ADVICE OF DISPATCH</h4>
                  </div>

                  <?php

                      // database Connection
                        require '../include/config.php';

                        $query ="SELECT * FROM aodManual ORDER BY id DESC LIMIT 1";
                        $result =mysqli_query($conn,$query);
                        while ($row=mysqli_fetch_array($result))
                        {
                            $id =$row['id'];
                            $pno =$row['pno'];
                            $customerName	 =$row['customerName'];
                            $other	 =$row['other	'];
                            $details =$row['details'];
                            $createDate	 =$row['createDate'];
                        }
                    
                  ?>
                  <div class="" style="height: 100px; margin-left: 10%; margin-right: 10%;">
                    <div class="l3d1" style="max-width: 50%;  float: left;">
                      <label for="[object Object]">Messers</label><span style="margin-left: 35px;"><?php echo $customerName;  ?></span><br>
                      <label for="[object Object]">Address</label><span style="margin-left: 35px;"><?php echo "$customeraddress / $customersite"; ?></span><br>
                      <label for="[object Object]">Customer's.</label><span style="margin-left: 10px;"><?php echo $pno; ?></span>
                    </div>
                    <div class="l3d1" style="max-width: 50%;  float: right;">
                      <label for="[object Object]">No</label><span style="margin-left: 47px;"><?php echo "$id"; ?></span><br>
                      <label for="[object Object]">Date</label><span style="margin-left: 35px; margin-right: 5px;"><?php echo "$createDate"; ?></span>
                    </div>
                  </div>
                  <div class="" style="margin-left: 10%; margin-right: 10%;">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Serial No</th>
                            <th>Description of Goods / Items</th>
                            <th>Quantity</th>
                          </tr>
                        </thead>
                      
                          <?php  
                            $json = json_decode($details, true);

                            $num =1;

                            for($i=0;$i<sizeof($json);$i++)
                            {
                                echo ' <tr>';
                                echo '<td>'.$num.'</td>';
                                echo '<td>'.$json[$i]['sales'].' '.$json[$i]['serialNumber'].'</td>';
                                echo '<td>'.$json[$i]['issueQty'].'</td>';
                                echo  '</tr>';
                                $num++;
                            }

                        ?>
                        <tbody>

                        </tbody>
                    </table>
                    <p>The relevant Invoice will be send to you in due course.</p>
                  </div>
                  <div class="" style="height: 100px; margin-left: 10%; margin-right: 10%;">
                    <div class="sd1" style="float: right;">
                      <p>..........................................</p>
                      <p style="margin-bottom: 0px;">Executive Sale / Manager</p>
                      <p>BHOOMI-TECH</p>
                    </div>
                </div>
                <div class="" style="margin-left: 10%; margin-right: 10%;">
                  <p>Invoice Reference</p>
                  <p style="margin-bottom: 0px;">....................................................................................................................................................</p>
                  <p>Received the above Instrument / Equipments / in goods oders / condition.</p>
                </div>
                <br>
                <div class="" style="margin-left: 10%; margin-right: 10%; height: 100px;">
                  <div class="l3d1" style="max-width: 40%;  float: left;">

                    <label for="[object Object]">Date</label><span style="margin-left: 10px;">...................................</span>
                  </div>
                  <div class="l3d1" style="max-width: 50%;  float: right;">
                    <p>..........................................</p>
                    <p style="margin-bottom: 0px;">Signature of Recipient</p>
                    <p>Company Seal</p>
                  </div>
                </div>
              </div>
            <div class="">
              <input type="button" value="Print" onclick="PrintDiv('PrintDiv');"  class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb; margin-left: 10%; "/>
              <input type="button" value="Close"  class="btn btn-primary btn-sm" data-dismiss="modal" style="background: #56b8fb; color: white; border-color: #56b8fb;  margin-right: 10%;"/>
            </div>
        </div>
  </div>
</div>
