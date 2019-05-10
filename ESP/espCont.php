<?php

  include('../include/check.php'); 

  if(isset($_POST['aupdate']))
  {
        $fname =mysqli_real_escape_string($conn ,$_POST['fname']);

       $_SESSION['empno'] =null;
       $querys ="SELECT * FROM employeeinfor WHERE empno ='$fname'";
       $results =mysqli_query($conn,$querys);
       while($row = mysqli_fetch_array($results))
       {
          $eid =$row['id'];
       }

        $aid =mysqli_real_escape_string($conn ,$_POST['aid']);
        $tablename1 =mysqli_real_escape_string($conn ,$_POST['tablename1']);

        if($tablename1==''){
          $tablename1 ="defaultadd";
        }

        $abs =mysqli_real_escape_string($conn ,$_POST['abs']);
        $aba =mysqli_real_escape_string($conn ,$_POST['aba']);
        $amm =mysqli_real_escape_string($conn ,$_POST['amm']);
        $atrv =mysqli_real_escape_string($conn ,$_POST['atrv']);
        $aacco =mysqli_real_escape_string($conn ,$_POST['aacco']);

        $aadd1 =mysqli_real_escape_string($conn ,$_POST['aadd1']);
        $aadd2 =mysqli_real_escape_string($conn ,$_POST['aadd2']);

        $fbs =mysqli_real_escape_string($conn ,$_POST['fbs']);
        if($fbs=='')
        {
          $fbs=date("Y-m-d");
        }
        $fba =mysqli_real_escape_string($conn ,$_POST['fba']);
        if($fba=='')
        {
          $fba=date("Y-m-d");
        }
        $fmm =mysqli_real_escape_string($conn ,$_POST['fmm']);
        if($fmm=='')
        {
          $fmm=date("Y-m-d");
        }
        $ftrv =mysqli_real_escape_string($conn ,$_POST['ftrv']);
        if($ftrv=='')
        {
          $ftrv=date("Y-m-d");
        }
        $facco =mysqli_real_escape_string($conn ,$_POST['facco']);
        if($facco=='')
        {
          $facco=date("Y-m-d");
        }
        $fadd1 =mysqli_real_escape_string($conn ,$_POST['fadd1']);
        if($fadd1=='')
        {
          $fadd1=date("Y-m-d");
        }
        $fadd2 =mysqli_real_escape_string($conn ,$_POST['fadd2']);
        if($fadd2=='')
        {
          $fadd2=date("Y-m-d");
        }

        $tbs =mysqli_real_escape_string($conn ,$_POST['tbs']);
        if($tbs=='')
        {
           $tbs=date('Y') . '-12-31';
        }
        $tba =mysqli_real_escape_string($conn ,$_POST['tba']);
        if($tba=='')
        {

           $tba=date('Y') . '-12-31';
        }
        $tmm =mysqli_real_escape_string($conn ,$_POST['tmm']);
        if($tmm=='')
        {

           $tmm=date('Y') . '-12-31';
        }
        $ttrv =mysqli_real_escape_string($conn ,$_POST['ttrv']);
        if($ttrv=='')
        {

           $ttrv=date('Y') . '-12-31';
        }
        $tacco =mysqli_real_escape_string($conn ,$_POST['tacco']);
        if($tacco=='')
        {

           $tacco=date('Y') . '-12-31';
        }
        $tadd1 =mysqli_real_escape_string($conn ,$_POST['tadd1']);
        if($tadd1=='')
        {

           $tadd1=date('Y') . '-12-31';
        }
        $tadd2 =mysqli_real_escape_string($conn ,$_POST['tadd2']);
        if($tadd2=='')
        {

           $tadd2=date('Y') . '-12-31';
        }

        $aadd =$abs +$aba+$amm+$atrv+$aacco+$aadd1+$aadd2;



         $querya ="INSERT INTO $tablename1 (id ,bs ,fbs,tbs,ba,fba,tba ,mm, fmm,tmm,trv,ftrv,ttrv,acco,facco ,tacco ,add1, fadd1 ,tadd1 ,add2, fadd2,tadd2) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $stmt =mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$querya))
          {
            echo "SQL Error";
          }
        else
         {
             mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssss",$eid ,$abs,$fbs,$tbs,$aba,$fba,$tba,$amm,$fmm,$tmm,$atrv,$ftrv,$ttrv,$aacco,$facco,$tacco,$aadd1,$fadd1,$tadd1,$aadd2,$fadd2,$tadd2);
             $resulta =  mysqli_stmt_execute($stmt);

          }

        $did =mysqli_real_escape_string($conn ,$_POST['did']);
        $tablename2 =mysqli_real_escape_string($conn ,$_POST['tablename2']);

        if($tablename2==''){
          $tablename2 ="defaultded";
        }
        $depf =mysqli_real_escape_string($conn ,$_POST['depf']);
        $dsa =mysqli_real_escape_string($conn ,$_POST['dsa']);
        $dsl =mysqli_real_escape_string($conn ,$_POST['dsl']);
        $dded1 =mysqli_real_escape_string($conn ,$_POST['dded1']);
        $dded2 =mysqli_real_escape_string($conn ,$_POST['dded2']);

        $fepf =mysqli_real_escape_string($conn ,$_POST['fepf']);
        if($fepf=='')
        {
          $fepf=date("Y-m-d");
        }
        $fsa =mysqli_real_escape_string($conn ,$_POST['fsa']);
        if($fsa=='')
        {
          $fsa=date("Y-m-d");
        }
        $fsl =mysqli_real_escape_string($conn ,$_POST['fsl']);
        if($fsl=='')
        {
          $fsl=date("Y-m-d");
        }
        $fded1 =mysqli_real_escape_string($conn ,$_POST['fded1']);
        if($fded1=='')
        {
          $fded1=date("Y-m-d");
        }
        $fded2 =mysqli_real_escape_string($conn ,$_POST['fded2']);
        if($fded2=='')
        {
          $fded2=date("Y-m-d");
        }
        $tepf =mysqli_real_escape_string($conn ,$_POST['tepf']);
        if($tepf=='')
        {

           $tepf=date('Y') . '-12-31';
        }
        $tsa =mysqli_real_escape_string($conn ,$_POST['tsa']);
        if($tsa=='')
        {

           $tsa=date('Y') . '-12-31';
        }
        $tsl =mysqli_real_escape_string($conn ,$_POST['tsl']);
        if($tsl=='')
        {

           $tsl=date('Y') . '-12-31';
        }
        $tded1 =mysqli_real_escape_string($conn ,$_POST['tded1']);
        if($tded1=='')
        {

           $tded1=date('Y') . '-12-31';
        }
        $tded2 =mysqli_real_escape_string($conn ,$_POST['tded2']);
        if($tded2=='')
        {
           $tded2=date('Y') . '-12-31';
        }


        $edd =$dsa+$dsl+$dded1+$dded2;


      $queryd ="INSERT INTO $tablename2 (id ,epf,fepf,tepf,sa, fsa,tsa,sl, fsl,tsl,ded1,fded1,tded1,ded2,fded2,tded2) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt =mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$queryd))
        {
          echo "SQL Error";
        }
        else
         {
             mysqli_stmt_bind_param($stmt,"ssssssssssssssss",$eid,$depf,$fepf,$tepf,$dsa,$fsa,$tsa,$dsl,$fsl,$tsl,$dded1,$fded1,$tded1,$dded2,$fded2,$tded2);
             $resultd =  mysqli_stmt_execute($stmt);

        }


             $query ="SELECT * FROM subsalarypackages WHERE   subname ='$tablename2'";
             $result =mysqli_query($conn,$query);
             while($row = mysqli_fetch_array($result))
             {
                $spnameid =$row['spid'];
             }



                       //$spname =mysqli_real_escape_string($conn ,$_POST['spname']);
                  $fname =mysqli_real_escape_string($conn ,$_POST['fname']);
                  $netold =$aadd-$edd;
                  $epfval =$abs*$depf/100;
                  $etf    =$abs*(8/100);
                  $net =$netold-$epfval;


                  $query ="UPDATE  employeeinfor  SET netsal =? ,packageid=? , epfval=? , addtion=? ,dedion=? , etfval=? WHERE empno=?;";

                  $stmt =mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt,$query))
                    {
                      echo "SQL Error";
                    }
                    else
                    {
                       mysqli_stmt_bind_param($stmt,"sssssss", $net ,$spnameid,$epfval,$aadd,$edd, $etf,$fname);
                       $result =  mysqli_stmt_execute($stmt);
                       if(!$result)
                        {
                           echo "<script type='text/javascript'>alert('Assign is faild');window.location = \"esp\"</script>";
                        }
                        else
                        {
                           echo "<script type='text/javascript'>alert('Assign successfully');window.location = \"esp\"</script>";
                        }

                    }


      }


?>
