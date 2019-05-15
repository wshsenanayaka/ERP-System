<?php
  include('../include/check.php'); 

  // if(isset($_POST['item_code']))
  if(isset($_POST['item_code'])){
      $value =$_POST['item_code'];
      $query1 ="SELECT * FROM purchaseorderinfor WHERE pid=?;";
       $stmt1 =mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt1,$query1))
        {
           echo "SQL Error";
        }
      else
        {
           mysqli_stmt_bind_param($stmt1,"s",$value);
           mysqli_stmt_execute($stmt1);

           $result =mysqli_stmt_get_result($stmt1);
            while($row = mysqli_fetch_array($result))
            {
                  $customerorderno = $row['customerorderno'];
                  $customername = $row['customername'];
                  $customeraddress = $row['customeraddress'];
                  $customersite = $row['customersite'];
            }

       }
	}
 //echo $value;
  ?>

<?php
      require '../include/config.php';

      if (isset($_POST['delete_id']))
         {
              $id = $_POST['delete_id'];
              $query ="DELETE FROM   dispachinfor WHERE id=?;";
              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else
              {
                  mysqli_stmt_bind_param($stmt,"s",$id);
                  $result =  mysqli_stmt_execute($stmt);
                   if(!$result)
                    {
                       echo "Delete is faild";
                    }
                    else
                    {
                       echo "Delete successfully";
                    }
              }

          }
        if(isset($_POST['aodedit']))
         {
              require '../include/config.php';

              $did =(int)mysqli_real_escape_string($conn,$_POST['did']);
              $dpid =mysqli_real_escape_string($conn,$_POST['dpid']);
              $ditem_code =mysqli_real_escape_string($conn,$_POST['ditem_code']);
              $dsales =mysqli_real_escape_string($conn ,$_POST['dsales']);
              $alreadyd =mysqli_real_escape_string($conn,$_POST['alreadyd']);
               // $customeraddress =mysqli_real_escape_string($conn ,$_POST['customeraddress']);
              $doq =mysqli_real_escape_string($conn ,$_POST['doq']);
              $daq =mysqli_real_escape_string($conn ,$_POST['daq']);
              $diq =mysqli_real_escape_string($conn ,$_POST['diq']);
              
            
              $dsn =mysqli_real_escape_string($conn ,$_POST['dsn']);
        
              $queryse ="SELECT alreadyd FROM dispachinfor WHERE ditem_code='$ditem_code' AND  dsales='$dsales'";
              $resultse =mysqli_query($conn,$queryse);
              while ($row=mysqli_fetch_array($resultse))
              {
                $already =$row['alreadyd'];
              }

              $newa =$already+$diq;
            
              $dsrq =mysqli_real_escape_string($conn ,$_POST['dsrq']);

              $drq =mysqli_real_escape_string($conn ,$_POST['drq']);
              $ddate =mysqli_real_escape_string($conn ,$_POST['ddate']);

              $status ="Approved";
      
              $query ="UPDATE dispachinfor SET dpid=?, ditem_code=?,dsales=?, alreadyd=?,  doq=?,  daq=?, diq=?, dsn=?, status=?,dsrq=?, drq=?, ddate=?  WHERE did=?;";

              if($diq!="" && $status=="Approved")
              {

                $net =$daq-$diq;
                $queryiq1 ="UPDATE realgoodentry SET  r_quantity='$net' WHERE 	r_itemcode='$ditem_code' AND  r_salesdisc='$dsales'";
                mysqli_query($conn,$queryiq1);
              }
              else if($drq!="" && $status=="Approved")
              {
                $net =$daq+$drq;
                $query1 ="UPDATE realgoodentry SET r_quantity='$net' WHERE 	r_itemcode='$ditem_code' AND r_salesdisc='$dsales'";
                $re1 =mysqli_query($conn,$query1);
              }
             
              $stmt =mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$query))
              {
                 echo "SQL Error";
              }
              else//admin inventory
              {
                  
                  mysqli_stmt_bind_param($stmt,"sssssssssssss",$dpid,$ditem_code,$dsales,$newa, $doq, $daq,$diq,$dsn,$status,$dsrq,$drq,$ddate,$did);
                 
                  $result =mysqli_stmt_execute($stmt);
                  if(!$result)
                    {
                       echo "<script type='text/javascript'>alert('Update is faild');window.location = \"aCreateNewAOD\"</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'>alert('Update successfully');window.location = \"aCreateNewAOD\"</script>";
                    }
               }
         }


         //AOD Requests php code strat
         if(isset($_POST['print_id']))
         {
           $val =$_POST['print_id'];
           $query_obj ="SELECT * FROM dispachinfor WHERE id='".$val."'";
           $result_obj =mysqli_query($conn,$query_obj);

           while ($row=mysqli_fetch_array($result_obj))
            {
               $dpid =$row['poNo'];
               $ddate =$row['createDate'];
               $details =$row['details'];
            }

            $query ="SELECT * FROM purchaseorderinfor WHERE pid='".$dpid."'";
            $result =mysqli_query($conn,$query);

            while ($ro=mysqli_fetch_array($result))
             {
                $customername =$ro['customername'];
                $customeraddress =$ro['customeraddress'];
                $customersite =$ro['customersite'];
             }

           ?>

           <div id="view_data_Modal" class="modal fade">
              <div class="modal-dialog" style="max-width: 850px;">
                   <div class="modal-content" style="height : auto;">
                        <div class="modal-header">
                             <span style="font-size: 23px; font-family: monospace;"><b style="color: white;letter-spacing: 1.3px;">Inbound Request</b></span>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div id="printablediv">
                             <div class="l1" style="text-align: center;">
                               <h4>BHOOMI- TECH (PVT) LTD.</h4>
                               <p style="margin-bottom: 0px;">184, Hill Street Dehiwala</p>
                               <p style="margin-bottom: 0px;">Phone :0112-734550</p>
                               <p>Fax :0112-734550</p>
                             </div>
                             <div class="l2" style="text-align: center;">
                               <h4 style="border: 1px solid; max-width: 50%; margin: auto;  margin-bottom: 4%;">ADVICE OF DISPATCH</h4>
                             </div>
                             <div class="" style="height: 100px; margin-left: 10%; margin-right: 10%;">
                               <div class="l3d1" style="max-width: 50%;  float: left;">
                                 <label for="[object Object]">Messers</label><span style="margin-left: 35px;"><?php echo $customername;  ?></span><br>
                                 <label for="[object Object]">Address</label><span style="margin-left: 35px;"><?php echo "$customeraddress / $customersite"; ?></span><br>
                                 <label for="[object Object]">Customer's.</label><span style="margin-left: 10px;"><?php echo $dpid;  ?></span>
                               </div>
                               <div class="l3d1" style="max-width: 50%;  float: right;">
                                 <label for="[object Object]">No</label><span style="margin-left: 47px;"><?php echo "$val"; ?></span><br>
                                 <label for="[object Object]">Date</label><span style="margin-left: 35px; margin-right: 5px;"><?php echo "$ddate"; ?></span>
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
                          <input type="button" value="Print" onclick="javascript:printDiv('printablediv');" class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb; margin-left: 10%; "/>
                          <input type="button" value="Close"  class="btn btn-primary btn-sm" data-dismiss="modal" style="background: #56b8fb; color: white; border-color: #56b8fb;  margin-right: 10%;"/>
                        </div>

                   </div>
              </div>
         </div>

         <?php

         }


?>
<script type="text/javascript">
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
$(document).ready(function () {
     $('.cancel-button').click(function () {
         // window.opener.location.reload(true);
         // window.close();
         alert("pp");
     });
 });


</script>
