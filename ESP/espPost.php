<?php

  session_start();
  $_SESSION['sp'] =$_POST['theme1'];
  echo $_SESSION['sp'];
  echo "<script type='text/javascript'>window.location = \"../Index.php\"</script>";

?>
