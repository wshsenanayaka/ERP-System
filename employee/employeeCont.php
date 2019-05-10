<?php
               include('../include/check.php');

              if(isset($_POST['esave']))
              {

                 $update = false;
                 $company =mysqli_real_escape_string($conn,$_POST['company']);
                 $firstname =mysqli_real_escape_string($conn ,$_POST['firstname']);
                 $lastname =mysqli_real_escape_string($conn,$_POST['lastname']);
                 $othername =mysqli_real_escape_string($conn ,$_POST['othername']);

                 $caddress =mysqli_real_escape_string($conn ,$_POST['caddress']);
                 $paddress =mysqli_real_escape_string($conn ,$_POST['paddress']);
                 $email =mysqli_real_escape_string($conn ,$_POST['email']);
                 $telephone =mysqli_real_escape_string($conn ,$_POST['telephone']);

                 $mobile =mysqli_real_escape_string($conn ,$_POST['mobile']);
                 $gender =mysqli_real_escape_string($conn ,$_POST['gender']);
                 $accno =mysqli_real_escape_string($conn ,$_POST['accno']);
                 $bank =mysqli_real_escape_string($conn ,$_POST['bank']);

                 $branch =mysqli_real_escape_string($conn ,$_POST['branch']);
                 $nationality =mysqli_real_escape_string($conn ,$_POST['nationality']);
                 $pno =mysqli_real_escape_string($conn ,$_POST['pno']);
                 $nic =mysqli_real_escape_string($conn ,$_POST['nic']);

                 $bod =mysqli_real_escape_string($conn ,$_POST['bod']);
                 $empno =mysqli_real_escape_string($conn ,$_POST['empno']);
                 $emptype =mysqli_real_escape_string($conn ,$_POST['emptype']);
                 $designation =mysqli_real_escape_string($conn ,$_POST['designation']);

                 $epfno =mysqli_real_escape_string($conn ,$_POST['epfno']);
                 $department =mysqli_real_escape_string($conn ,$_POST['department']);
                 $doj =mysqli_real_escape_string($conn ,$_POST['doj']);
                 $srm =mysqli_real_escape_string($conn ,$_POST['srm']);

                 $createdate =mysqli_real_escape_string($conn,$_POST['createdate']);

                 $query ="INSERT INTO  employeeinfor (company,firstname,lastname,othername,caddress,paddress,email,telephone,mobile,gender,accno,bank,barnch,nation,pno,nic,bod,empno,emptype,designation,epfno,department,doj,srm,createdate)  VALUES (?,?,?,? ,?,?,?,?, ?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,?,?,?)";


                    $stmt =mysqli_stmt_init($conn);
            				if(!mysqli_stmt_prepare($stmt,$query))
            				{
            				   echo "SQL Error";
            				}
            				else
            				{
            					  mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssss",$company,$firstname,$lastname,$othername,$caddress,$paddress,$email,$telephone,$mobile,$gender,$accno,$bank,$branch,$nationality,$pno,$nic,$bod,$empno,$emptype,$designation,$epfno,$department,$doj,$srm,$createdate);
            				    $result =  mysqli_stmt_execute($stmt);
            					  if(!$result)
                          {
                             echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"employee\"</script>";
                          }
                          else
                          {
                             echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"employee\"</script>";
                          }
            				 }


              }
              if (isset($_POST['update']))
              {
                $company =mysqli_real_escape_string($conn,$_POST['company']);
                $firstname =mysqli_real_escape_string($conn ,$_POST['firstname']);
                $lastname =mysqli_real_escape_string($conn,$_POST['lastname']);
                $othername =mysqli_real_escape_string($conn ,$_POST['othername']);

                $caddress =mysqli_real_escape_string($conn ,$_POST['caddress']);
                $paddress =mysqli_real_escape_string($conn ,$_POST['paddress']);
                $email =mysqli_real_escape_string($conn ,$_POST['email']);
                $telephone =mysqli_real_escape_string($conn ,$_POST['telephone']);

                $mobile =mysqli_real_escape_string($conn ,$_POST['mobile']);
                $gender =mysqli_real_escape_string($conn ,$_POST['gender']);
                $accno =mysqli_real_escape_string($conn ,$_POST['accno']);
                $bank =mysqli_real_escape_string($conn ,$_POST['bank']);

                $branch =mysqli_real_escape_string($conn ,$_POST['branch']);
                $nationality =mysqli_real_escape_string($conn ,$_POST['nationality']);
                $pno =mysqli_real_escape_string($conn ,$_POST['pno']);
                $nic =mysqli_real_escape_string($conn ,$_POST['nic']);

                $bod =mysqli_real_escape_string($conn ,$_POST['bod']);
                $empno =mysqli_real_escape_string($conn ,$_POST['empno']);
                $emptype =mysqli_real_escape_string($conn ,$_POST['emptype']);
                $designation =mysqli_real_escape_string($conn ,$_POST['designation']);

                $epfno =mysqli_real_escape_string($conn ,$_POST['epfno']);
                $department =mysqli_real_escape_string($conn ,$_POST['department']);
                $doj =mysqli_real_escape_string($conn ,$_POST['doj']);
                $srm =mysqli_real_escape_string($conn ,$_POST['srm']);

                $type =mysqli_real_escape_string($conn ,$_POST['type']);

                if($type=="hrm")
                {

                  $queryck ="SELECT * FROM employeeinforCopy WHERE  id ='".$_SESSION['editid']."'";

                  $resultck=mysqli_query($conn,$queryck);
                  $count =mysqli_num_rows($resultck);


                 if($count==0)
                 {

                     $query ="INSERT INTO  employeeinforCopy (id ,company,firstname,lastname,othername,caddress,paddress,email,telephone,mobile,gender,accno,bank,barnch,nation,pno,nic,bod,empno,emptype,designation,epfno,department,doj,srm)  VALUES (?,?,?,? ,?,?,?,?, ?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,?,?,?)";
                      $stmt =mysqli_stmt_init($conn);
                     if(!mysqli_stmt_prepare($stmt,$query))
                     {
                        echo "SQL Error";
                     }
                     else
                     {
                         mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssss",$_SESSION['editid'],$company,$firstname,$lastname,$othername,$caddress,$paddress,$email,$telephone,$mobile,$gender,$accno,$bank,$branch,$nationality,$pno,$nic,$bod,$empno,$emptype,$designation,$epfno,$department,$doj,$srm);
                         $result =  mysqli_stmt_execute($stmt);
                     }

                  }
                  else
                  {
                      $query ="UPDATE  employeeinforcopy SET  company=?,firstname=?,lastname=?,othername=?,caddress=?,paddress=?,email=?,telephone=?,mobile=?,gender=?,accno=?,bank=?,barnch=?,nation=?,pno=?,nic=?,bod=?,empno=?,emptype=?,designation=?,epfno=?,department=?,doj=?,srm=? WHERE id=?;";
                      $stmt =mysqli_stmt_init($conn);
                      if(!mysqli_stmt_prepare($stmt,$query))
                      {
                         echo "SQL Error";
                      }
                      else
                      {
                          mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssss",$company,$firstname ,$lastname ,$othername ,$caddress ,$paddress ,$email ,$telephone ,$mobile ,$gender ,$accno ,$bank ,$branch ,$nationality ,$pno ,$nic ,$bod ,$empno,$emptype,$designation,$epfno,$department,$doj,$srm,$_SESSION['editid']);
                          $result =  mysqli_stmt_execute($stmt);
                       }
                  }


                   $stats ="Pending";
                   $queryup ="UPDATE employeeinfor SET status='$stats'  WHERE id='".$_SESSION['editid']."'";
                   $resultup =mysqli_query($conn,$queryup);
                   if(!$resultup && !$result)
                     {
                        echo "<script type='text/javascript'>alert('Update is faild');window.location = \"employee\"</script>";
                     }
                     else
                     {
                        echo "<script type='text/javascript'>alert('Update successfully');window.location = \"employee\"</script>";
                     }
                }
                else
                {
                    $stats ="Approved";
                    $query ="UPDATE  employeeinfor  SET company=?,firstname=?,lastname=?,othername=?,caddress=?,paddress=?,email=?,telephone=?,mobile=?,gender=?,accno=?,bank=?,barnch=?,nation=?,pno=?,nic=?,bod=?,empno=?,emptype=?,designation=?,epfno=?,department=?,doj=?,srm=?,status=? WHERE id=?;";

                    $stmt =mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$query))
                    {
                       echo "SQL Error";
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssssss",$company,$firstname,$lastname,$othername,$caddress,$paddress,$email,$telephone,$mobile,$gender,$accno,$bank,$branch,$nationality,$pno,$nic,$bod,$empno,$emptype,$designation,$epfno,$department,$doj,$srm,$stats,$_SESSION['editid']);
                        $result =  mysqli_stmt_execute($stmt);
                        if(!$result)
                          {
                             echo "<script type='text/javascript'>alert('Update is faild');window.location = \"employee\"</script>";
                          }
                          else
                          {
                             echo "<script type='text/javascript'>alert('Update successfully');window.location = \"employee\"</script>";
                          }
                     }

              }
          }

         if (isset($_POST['removeID']))
         {
              $id = $_POST['removeID'];
         
              $query ="DELETE FROM  employeeinfor WHERE id=?;";

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
          // EMP report delete php code strat
          if (isset($_POST['re_delete_id']))
          {
              $id = $_POST['re_delete_id'];

              $query ="DELETE FROM  reportinfor WHERE id=?;";


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
                             echo  "Delete is faild";
                          }
                          else
                          {
                             echo "Delete successfully";
                          }
                    }

          }
          // EMP report delete php code end

          // EMP report Payroll php code strat
          if (isset($_POST['rp_delete_id']))
          {
              $id = $_POST['rp_delete_id'];

              $query ="DELETE FROM  repayroll WHERE id=?;";


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
                             echo  "Delete is faild";
                          }
                          else
                          {
                             echo "Delete successfully";
                          }
                    }

          }
         // EMP report Payroll php code end

      ?>
