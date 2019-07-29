<!-- <?php include('../include/check.php') ?> -->
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include('../include/head.php') ?>

   <style type="text/css">

      .salign
      {
        margin-left: 30px;
        margin-right: 25PX;
      }
       .abtn
      {
      float: right;
      }

   </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">AOD Manual Add</a>
        </li>
      </ol>
    <div class="container">
      <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
          <div class="col-sm-2">
            <label for="pwd">PO Number</label>
          </div>
          <div class="col-sm-6">
              <input type="text" style="width: 100%;" class="form-control form-control-sm" id="poNo"/>
          </div>
      </div>
      <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
          <div class="col-sm-2">
            <label for="pwd">Customer Name</label>
          </div>
          <div class="col-sm-6">
              <input type="text" style="width: 100%;" class="form-control form-control-sm" id="customerName"/>
          </div>
      </div>
      <div class="col-sm-12" style="display: inline-flex; justify-content: center; margin-bottom: 15px;">
          <div class="col-sm-2">
            <label for="pwd">Other</label>
          </div>
          <div class="col-sm-6">
              <input type="text" style="width: 100%;" class="form-control form-control-sm" id="other"/>
          </div>
      </div>
       <br><br>

       <div style="display: -webkit-box;">
        <input type="text" name="search_text" id="search_text1" placeholder="Search by Any Sales Des " class="form-control  form-control-sm"  style="margin-right: 1%;"/>
        <input type="text" name="search_text" id="search_text2" placeholder="Search by Any Item Code" class="form-control  form-control-sm" />
       </div>
    
       <br>
       <div id="result">

       </div>
       <div class="table-responsive" id="mTable">
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
        <input type="button" value="Go Back" onclick="window.location='./aCreateNewAOD';" class="btn btn-primary btn-sm" />
        </form>
        <div id="snackbar"><p id="msgView"></p></div>
      </div>
     <br><br>
    </div>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>

  </div>
</body>

</html>

<script >

$(document).ready(function(){


      //  modal View
      let params = (new URL(document.location)).searchParams;
      let reload = params.get("reload");

      if(reload =="true"){

          $('#viewModal').modal('show');    

      }

      load_data();
      load_data1();


      function load_data1(search1)
      { 
          // if(search1==null){

            $.ajax({
            url:"./AODTableM",
            method:"POST",
            data:{query1:search1},
              success:function(data)
                {
                    $('#result').html(data);
                }
              });

       
      }

      function load_data(search2)
      { 
          // if(search1==null){

            $.ajax({
            url:"./AODTableM",
            method:"POST",
            data:{query2:search2},
              success:function(data)
                {
                    $('#result').html(data);
                }
              });

          // }
          // if(search2==null){

          //   $.ajax({
          //   url:"./AODTableM",
          //   method:"POST",
          //   data:{query1:search1},
          //     success:function(data)
          //       {
          //           $('#result').html(data);
          //       }
          //     });
          // }

      }
        $('#search_text1').keyup(function(){
            var search1 = $(this).val();
         
            if(search1 != '')
            {
               load_data1(search1);
            }
            else
            {
               load_data1();
            }
        });

        $('#search_text2').keyup(function(){
          var search2 = $(this).val();
          // var search1 =null;
            if(search2 != '')
            {
               load_data(search2);
            }
            else
            {
               load_data();
            }
        });

      });

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

                $("#mTable").load(window.location.href + " #mTable");
        
              }
        });
              
      }

      function myForm1 (id){
        
        $.ajax({
                url:"./controller1.php",
                method:"POST",
                data:{deleteId:id},
                success:function(data){
                  $("#mTable").load(window.location.href + " #mTable");
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
                
              //  location.reload();
                  var reloda = true;
                  window.location = './aCreateNewAODCreateManual?reload=' + reloda;
            
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

