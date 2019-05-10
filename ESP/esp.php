<!-- nexgenITs Admin dashbord All right reseverd.-->
<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%; }
    .column-center{ display: inline-block; width: 33%; }
    .screate
    {
       margin-left: 15px;
    }
    .alignt
    {
      margin-top: 46px;
    }
    .lablet
    {
      height: 2px;
    }
  </style>

  <?php include('../include/head.php') ?>
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Employee Salary Particulars</a>
        </li>
      </ol>
      <div class="alig">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <div class="form-group">
          <div class="form-inline">
            <label for="email">Company</label>
               <div class="col-sm-2">
                 <select type="text" class="form-control form-control-sm" name="company" style ="width: 100%;">
                   <option value="">Select</option>
                  <?php
                  $query ="SELECT company FROM companyinfor";
                  $result =mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$row['company']."'>".$row['company']."</option>";
                  }
                 ?>
                 </select>
               </div>
           <div class="form-group">
            <label for="pwd">First Name</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="firstname" id="firstname"/>

            </div>
           </div>
            <div id="nameList"></div>
           <div class="form-group">
           <label for="pwd">Emp No</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="empno" id="empno" required value="<?php if(isset($_SESSION['empno'])){ echo $_SESSION['empno'];} ?>"/>
            </div>
           </div>
           <div class="form-group">
           <label for="pwd">EPF No</label>
            <div class="col-sm-3">
             <input type="text" class="form-control form-control-sm" name="epfno" />
            </div>
           </div>

           <input type="submit" name="serchsub" value="Search" class="btn btn-primary btn-sm"/>
           <!-- <input type="submit" name="serchsub" value="Search" class="btn btn-primary btn-sm"/> -->
         </div>

         </div>
      </form>
    </div>
      <br>
        <div class="table-responsive">
         <table class="table table-sm">
          <tr>
           <th width=50px>Company</th>
           <th width=50px>Department</th>
           <th width=50px>First Name</th>
           <th width=50px>EMP No</th>
           <th width=50px>EPF No</th>

          </tr>

      <?php

       $dateval =date("m/d/Y");
      // echo $dateval;
       $_SESSION['id'] =null;
       require '../include/config.php';
       $i=1;
      if(isset($_POST['serchsub']))
      {

        $company =mysqli_real_escape_string($conn ,$_POST['company']);
        $firstname =mysqli_real_escape_string($conn ,$_POST['firstname']);
        $empno =mysqli_real_escape_string($conn ,$_POST['empno']);
      //  $_SESSION['empno'] =$empno;
        $epfno =mysqli_real_escape_string($conn ,$_POST['epfno']);

        $query ="SELECT * FROM employeeinfor WHERE id is not null";
        if(isset($company) && $company!=null){
        $query= $query." AND company='$company' "; }
        if(isset($firstname) && $firstname!=null){
        $query=$query." AND firstname='$firstname' ";}
        if(isset($empno) && $empno!=null){
        $query=$query." AND empno='$empno' ";}
        if(isset($epfno) && $epfno!=null){
        $query=$query." AND epfno='$epfno' ";}


     
        $result =mysqli_query($conn,$query);

    
          $rowcount=mysqli_num_rows($result);

          if($rowcount>0)
          {
             while($row = mysqli_fetch_array($result))
             {    
            
              echo
               "<tr>";
              $_SESSION['id']=$row['id'];
              echo "<td width=50px>";
              echo $row["company"];
              echo "</td>";
               echo "<td width=50px>";
              echo $row["department"];
              echo "</td>";
              echo "<td width=50px>";
              echo $row["firstname"];
              echo "</td>";
               echo "<td width=50px>";
              echo $row["empno"];
              echo "</td>";
               echo "<td width=50px>";
              echo $row["epfno"];
              $val =$row["packageid"];
              echo "</td>";

              echo" </tr>";
               $i++;
             }
              $search =true;
          }
          else
         {
          echo "Not Found";
           $search =false;

         }

         if($val!="0"){
           $query_select ="SELECT spname FROM salarypackagesinfor WHERE id='$val'";
           $result_select =mysqli_query($conn ,$query_select);

           while($row_select = mysqli_fetch_array($result_select))
             {  
                 
                  $check1 =$row_select['spname'];
                  $add ="add";
                  $ded ="ded";

                  $tablename1 =$check1.$add;
                  $tablename2 =$check1.$ded;

                  
                  if($check1==''){
                    $tablename1 =$default.$add;
                    $tablename2 =$default.$ded;
                  }
                  else{
                    $tablename1 =$check1.$add;
                    $tablename2 =$check1.$ded;
                  }

                  //$_SESSION['tablename1']=$tablename1;
                  $cid ="0";
                  $querytable1 ="SELECT * FROM $tablename1 WHERE id ='".$_SESSION['id']."'";
                  $resultable1 =mysqli_query($conn,$querytable1);
                  while($row = mysqli_fetch_array($resultable1))
                    {
                      $id = $row['id'];
                      $bs = $row['bs'];
                      $fbs = $row['fbs'];
                      $tbs = $row['tbs'];

                      $ba = $row['ba'];
                      $fba = $row['fba'];
                      $tba = $row['tba'];

                      $mm = $row['mm'];
                      $fmm = $row['fmm'];
                      $tmm = $row['tmm'];

                      $trv = $row['trv'];
                      $ftrv = $row['ftrv'];
                      $ttrv = $row['ttrv'];

                      $acco = $row['acco'];
                      $facco = $row['facco'];
                      $tacco = $row['tacco'];

                      $add1 = $row['add1'];

                      $fadd1 = $row['fadd1'];
                      $tadd1 = $row['tadd1'];

                      $add2 = $row['add2'];
                      $fadd2 = $row['fadd2'];
                      $tadd2 = $row['tadd2'];
                    }
                  $querytable2 ="SELECT * FROM $tablename2 WHERE id ='".$_SESSION['id']."'";
                  $resultable2 =mysqli_query($conn,$querytable2);
                  while($row = mysqli_fetch_array($resultable2))
                    {
                      $id = $row['id'];
                      $epf = $row['epf'];
                      $fepf = $row['fepf'];
                      $tepf = $row['tepf'];

                      $sa = $row['sa'];
                      $fsa = $row['fsa'];
                      $tsa = $row['tsa'];

                      $sl = $row['sl'];
                      $fsl = $row['fsl'];
                      $tsl = $row['tsl'];
                      $ded1 = $row['ded1'];
                      $fded1 = $row['fded1'];
                      $tded1 = $row['tded1'];

                      $ded2 = $row['ded2'];
                      $fded2 = $row['fded2'];
                      $tded2 = $row['tded2'];
                    }
             }


         }
         
         //$query_select =""


    }
    

    //echo $_SESSION['id'];
   ?>
 </table>
  
  <?php if ($search == true): ?>
  <form action="./espCont.php" method="POST">
    <div class="form-control">
      <h6>Assign Salary Package</h6>
      <br>
       <div class="form-inline">
           <label for="pwd"><?php echo $firstname; ?></label>
            <div class="col-sm-3">
              <select type="text" class="form-control form-control-sm" name="spname" id="select2"
                required="required">
                  <option value="0">Select</option>
                  <?php
                  $query ="SELECT spname FROM salarypackagesinfor";
                  $result =mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result))
                  {
                    if($row['spname']!="default"){
                      echo "<option value='".$row['spname']."'>".$row['spname']."</option>";
                    }
                  }
                 ?>
                 </select>
            </div>
            <input type="hidden" class="form-control form-control-sm" value="<?php echo $empno; ?>"  name="fname" />
          </div>
           </div>
           <br>
         </div>
       <?php


            if(isset($_SESSION['sp']))
                  {
                      $default ="default";
                      
                      if($_SESSION['sp']==''){
                        $check1="default";
                      }
                      else{
                        $check1=$_SESSION['sp'];
                      }
                      
                      $add ="add";
                      $ded ="ded";

                      $tablename1 =$check1.$add;
                      $tablename2 =$check1.$ded;

                       
                      if($check1==''){
                        $tablename1 =$default.$add;
                        $tablename2 =$default.$ded;
                      }
                      else{
                        $tablename1 =$check1.$add;
                        $tablename2 =$check1.$ded;
                      }

                      //$_SESSION['tablename1']=$tablename1;
                      $cid ="0";
                      $querytable1 ="SELECT * FROM $tablename1 WHERE id ='$cid'";
                      $resultable1 =mysqli_query($conn,$querytable1);
                       while($row = mysqli_fetch_array($resultable1))
                        {
                          $id = $row['id'];
                          $bs = $row['bs'];
                          $fbs = $row['fbs'];
                          $tbs = $row['tbs'];

                          $ba = $row['ba'];
                          $fba = $row['fba'];
                          $tba = $row['tba'];

                          $mm = $row['mm'];
                          $fmm = $row['fmm'];
                          $tmm = $row['tmm'];

                          $trv = $row['trv'];
                          $ftrv = $row['ftrv'];
                          $ttrv = $row['ttrv'];

                          $acco = $row['acco'];
                          $facco = $row['facco'];
                          $tacco = $row['tacco'];

                          $add1 = $row['add1'];

                          $fadd1 = $row['fadd1'];
                          $tadd1 = $row['tadd1'];

                          $add2 = $row['add2'];
                          $fadd2 = $row['fadd2'];
                          $tadd2 = $row['tadd2'];
                        }
                      $querytable2 ="SELECT * FROM $tablename2 WHERE id='$cid'";
                      $resultable2 =mysqli_query($conn,$querytable2);
                       while($row = mysqli_fetch_array($resultable2))
                        {
                          $id = $row['id'];
                          $epf = $row['epf'];
                          $fepf = $row['fepf'];
                          $tepf = $row['tepf'];
    
                          $sa = $row['sa'];
                          $fsa = $row['fsa'];
                          $tsa = $row['tsa'];
    
                          $sl = $row['sl'];
                          $fsl = $row['fsl'];
                          $tsl = $row['tsl'];
                          $ded1 = $row['ded1'];
                          $fded1 = $row['fded1'];
                          $tded1 = $row['tded1'];
    
                          $ded2 = $row['ded2'];
                          $fded2 = $row['fded2'];
                          $tded2 = $row['tded2'];
                        }
                      $_SESSION['sp']=null;


                  }

          ?>
           <?php if ($check1 != ""): ?>
              <?php if ($check1== "default"): ?>
                <span style="margin-left: 35%; font-size: 26px; color: #093e77;">Selected Package: <span style=" font-size: 26px; color: #000000;">Custom</span></span>
               <?php else: ?>
                <span style="margin-left: 35%; font-size: 26px; color: #093e77;">Selected Package: <span style=" font-size: 26px; color: #000000;"><?php echo $check1 ; ?></span></span>
               <?php endif ?>
          <?php else: ?>
          <?php endif ?>
          

            <h4>Set All Additions</h4>
             <hr/>
            <div class="container">

               <div class="column-left">
                  <div class="lablet">
                  </div>
                  <div class="form-group">
                  
                     <label for="pwd">Basic Salary</label>
                      <div class="col-sm-3">
                       <input type="number" class="form-control form-control-sm" value="<?php if(isset($bs)){ echo $bs;}?>" name="abs" required="required"/>
                      </div>
                 </div>
                 <div class="form-group">
                 <label for="pwd">Budeget Allowance</label>
                  <div class="col-sm-3">
                   <input type="number" class="form-control form-control-sm"   value="<?php if(isset($ba)){ echo $ba;}?>"   name="aba" required="required"/>
                  </div>
                </div>
                 <div class="form-group">
                 <label for="pwd">Meals & Medical</label>
                  <div class="col-sm-3">
                   <input type="number" class="form-control form-control-sm"  value="<?php if(isset($mm)){ echo $mm;}?>" name="amm" required="required"/>
                  </div>
                </div>
                  <div class="form-group">
                     <label for="pwd">Travelling</label>
                      <div class="col-sm-3">
                       <input type="number" class="form-control form-control-sm"  value="<?php if(isset($trv)){ echo $trv;}?>" name="atrv" required="required"/>
                      </div>
                 </div>
                 <div class="form-group">
                 <label for="pwd">Accomodation</label>
                  <div class="col-sm-3">
                   <input type="number" class="form-control form-control-sm"  value="<?php if(isset($acco)){ echo $acco;}?>" name="aacco" required="required"/>
                  </div>
                 </div>
                  <div class="form-group">
                     <label for="pwd">Additional 2</label>
                      <div class="col-sm-3">
                       <input type="number" class="form-control form-control-sm" value="<?php if(isset($add2)){ echo $add2;}?>"  name="aadd2" />
                      </div>
                 </div>
                  <div class="form-group">
                   <label for="pwd">Additional 1</label>
                    <div class="col-sm-3">
                     <input type="number" class="form-control form-control-sm" value="<?php if(isset($add1)){ echo $add1;}?>"  name="aadd1" />
                    </div>
                 </div>
                 <input type="hidden" class="form-control form-control-sm" value="<?php echo $tablename1; ?>"  name="tablename1" />

                 <input type="hidden" class="form-control form-control-sm" value="<?php echo $id; ?>"  name="aid" />

            </div>
            <div class="column-center">

                 <label for="pwd"><b>Valied From</b></label>

                 <div class="form-group">
                    <div class="col-sm-3">
                     <input type="Date" class="form-control form-control-sm" name="fbs" value="<?php if(isset($fbs)){ echo $fbs;}?>"/>
                    </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" name="fba" value="<?php if(isset($fba)){ echo $fba;}?>"/>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" name="fmm" value="<?php if(isset($fmm)){ echo $fmm;}?>"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" name="ftrv" value="<?php if(isset($ftrv)){ echo $ftrv;}?>"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm"  name="facco" value="<?php if(isset($facco)){ echo $facco;}?>"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm"  name="fadd1" value="<?php if(isset($fadd1)){ echo $fadd1;}?>"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm"  name="fadd2" value="<?php if(isset($fadd2)){ echo $fadd2;}?>"/>
                        </div>
                  </div>
                </div>
            </div>
            <div class="column-right">
              <label for="pwd"><b>Valied To</b></label>

                 <div class="form-group">
                    <div class="col-sm-3">
                     <input type="date" class="form-control form-control-sm" value="<?php if(isset($tbs)){ echo $tbs;}?>" name="tbs"/>
                    </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tba)){ echo $tba;}?>" name="tba"/>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tmm)){ echo $tmm;}?>" name="tmm"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($ttrv)){ echo $ttrv;}?>" name="ttrv"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tacco)){ echo $tacco;}?>" name="tacco"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm"  value="<?php if(isset($tadd1)){ echo $tadd1;}?>" name="tadd1"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tadd2)){ echo $tadd2;}?>" name="tadd2"/>
                        </div>
                  </div>
                </div>

            </div>
          </div>
          <h4>Set All Deductions</h4>
          <hr/>
          <div class="container">
              <div class="column-left">
                 <div class="form-group">
                   <label for="pwd">EPF (%) </label>
                    <div class="col-sm-3">
                     <!-- <input type="number" class="form-control form-control-sm"  value="<?php if(isset($epf)){ echo $epf;}?>"  name="depf" required="required"/> -->
                     <select type="number" class="form-control form-control-sm" name="depf" required="required">
                       <?php
                         echo "<option value='".$epf."'>".$epf."</option>";

                        ?>
                       <option value="">Select</option>
                       <option value="12">12</option>;
                       <option value="8">8</option>;
                     </select>

                    </div>
                </div>
                <div class="form-group">
                   <label for="pwd">Salary Advance</label>
                    <div class="col-sm-3">
                     <input type="number" class="form-control form-control-sm"  value="<?php if(isset($sa)){ echo $sa;}?>"  name="dsa" required="required"/>
                    </div>
               </div>
                <div class="form-group">
                   <label for="pwd">Staff Loan</label>
                    <div class="col-sm-3">
                     <input type="number" class="form-control form-control-sm"  value="<?php if(isset($sl)){ echo $sl;}?>"   name="dsl" required="required"/>
                    </div>
               </div>
               <div class="form-group">
                   <label for="pwd">Deduction 1</label>
                    <div class="col-sm-3">
                     <input type="number" class="form-control form-control-sm" value="<?php if(isset($ded1)){ echo $ded1;}?>"  name="dded1"/>
                    </div>
               </div>
                <div class="form-group">
                   <label for="pwd">Deduction 2</label>
                    <div class="col-sm-3">
                     <input type="number" step="2" class="form-control form-control-sm" value="<?php if(isset($ded2)){ echo $ded2;}?>"  name="dded2"/>
                    </div>
               </div>
                <input type="hidden" class="form-control form-control-sm" value="<?php echo $tablename2; ?>"  name="tablename2" />

                <input type="hidden" class="form-control form-control-sm" value="<?php echo $id; ?>"  name="did" />
               <div class="screate">
                  <button type="submit" class="btn btn-primary btn-sm" name="aupdate">Submit</button>
               </div>
               <br>
            </div>
            <div class="column-center">

                 <label for="pwd"><b>Valied From</b></label>

                 <div class="form-group">
                    <div class="col-sm-3">
                     <input type="date" class="form-control form-control-sm" value="<?php if(isset($fepf)){ echo $fepf;}?>" name="fepf"/>
                    </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($fsa)){ echo $fsa;}?>" name="fsa"/>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($fsl)){ echo $fsl;}?>" name="fsl"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($fded1)){ echo $fded1;}?>" name="fded1"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($fded2)){ echo $fded2;}?>" name="fded2"/>
                        </div>
                  </div>
                </div>
              </div>
              <div class="column-right">
              <label for="pwd"><b>Valied To</b></label>

                 <div class="form-group">
                    <div class="col-sm-3">
                     <input type="date" class="form-control form-control-sm" value="<?php if(isset($tepf)){ echo $tepf;}?>"  name="tepf"/>
                    </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tsa)){ echo $tsa;}?>" name="tsa"/>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tsl)){ echo $tsl;}?>" name="tsl"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tded1)){ echo $tded1;}?>" name="tded1"/>
                        </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="alignt">
                        <div class="col-sm-3">
                         <input type="date" class="form-control form-control-sm" value="<?php if(isset($tded2)){ echo $tded2;}?>" name="tded2"/>
                        </div>
                  </div>
                </div>
               </div>
          </div>
        </form>
       <?php else: ?>

        <?php endif ?>


                <!--  <div class="form-group">
                   <label for="pwd">Deduction 2</label>
                    <div class="col-sm-3">
                     <input type="text" class="form-control form-control-sm" value="<?php if(isset($ded2)){ echo $ded2;}?>"  name="dded2" required="required"/>
                    </div>
               </div> -->

<br>

    <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?>


  </div>
</body>

</html>
<script>
 $(document).ready(function(){
      $('#firstname').keyup(function(){
           var query = $(this).val();
           if(query != '')
           {
                $.ajax({
                     url:"search",
                     method:"POST",
                     data:{query:query},
                     success:function(data)
                     {
                          $('#nameList').fadeIn();
                          $('#nameList').html(data);
                     }
                });
           }
      });

 });
 </script>
  <script type="text/javascript">

      $(document).ready(function() {
        $("#select1").change(function() {
          var newTheme = $(this).val();
          $.ajax({
            type:"POST",
            url: "esp",
            data: {
              theme:newTheme
            },
            success: function(result) {
              //console.log(result);
              location.reload();
            }
          });
        });
      });

       $(document).ready(function() {
        $("#select2").change(function() {
          var newTheme1 = $(this).val();
          $.ajax({
            type:"POST",
            url: "espPost",
            data: {
              theme1:newTheme1
            },
            success: function(result) {
              //console.log(result);
              location.reload();
            }
          });
        });
      });

      

    </script>
